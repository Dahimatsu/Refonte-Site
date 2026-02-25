<?php
$cspNonce = Flight::get('csp_nonce');
?>
<section class="position-relative py-5 d-flex align-items-center justify-content-center"
    style="min-height: 40vh; background-color: var(--itu-bleu);">
    <div class="position-absolute top-0 start-0 w-100 h-100 z-0">
        <img src="/assets/images/background/itu-bg-1.jpeg" alt="Résultats ITU" class="w-100 h-100 object-fit-cover"
            loading="lazy" style="opacity: 0.2; filter: grayscale(100%);" />
    </div>

    <div class="container position-relative z-1 text-center text-white mt-5">
        <h1 class="display-3 fw-black text-uppercase mb-3" style="letter-spacing: -2px; color: #ffffff;">Résultats
            d'Admission</h1>
        <p class="lead fw-light fs-4">Liste officielle <span class="fw-bold" id="current-year"
                style="color: var(--itu-vert);"></span></p>
    </div>
</section>

<section class="py-5" style="background-color: var(--itu-gris); min-height: 60vh;" data-section-theme="light">
    <div class="container py-4">

        <div class="d-flex justify-content-center mb-5 border-bottom border-dark border-3 pb-0">
            <a href="?parcours=info"
                class="text-decoration-none px-4 py-3 fw-black text-uppercase fs-6 <?= ($parcours == 'info') ? 'border-dark border-bottom border-4 text-dark' : 'text-muted' ?>"
                style="margin-bottom: -3px;">
                <i class="bi bi-pc-display me-2"></i> Informatique
            </a>
            <a href="?parcours=design"
                class="text-decoration-none px-4 py-3 fw-black text-uppercase fs-6 <?= ($parcours == 'design') ? 'border-dark border-bottom border-4 text-dark' : 'text-muted' ?>"
                style="margin-bottom: -3px;">
                <i class="bi bi-palette-fill me-2"></i> Design
            </a>
        </div>

        <article class="p-4 p-md-5 resultats-article ">

            <div class="mb-5">

                <div class="row g-3">
                    <div class="col-lg-7">
                        <div class="input-group input-group-lg h-100" style="border: 2px solid #1a1a1a;">
                            <span class="input-group-text bg-white border-0 rounded-0"><i
                                    class="bi bi-search fs-4"></i></span>
                            <input type="text" id="searchInput" class="form-control border-0 rounded-0 shadow-none fs-5"
                                placeholder="Rechercher nom, prénom, n° bacc...">
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="btn-group w-100 h-100" role="group" aria-label="Filtre de statut"
                            style="border: 2px solid #1a1a1a;">
                            <input type="radio" class="btn-check filter-radio" name="statutFilter" id="btnAll"
                                value="all" checked>
                            <label
                                class="btn btn-outline-dark rounded-0 fw-bold border-0 border-end border-dark d-flex align-items-center justify-content-center text-uppercase"
                                style="border-width: 2px !important;" for="btnAll">Tous</label>

                            <input type="radio" class="btn-check filter-radio" name="statutFilter" id="btnAdmis"
                                value="admis">
                            <label
                                class="btn btn-outline-dark rounded-0 fw-bold border-0 border-end border-dark d-flex align-items-center justify-content-center text-uppercase"
                                style="border-width: 2px !important;" for="btnAdmis">Admis</label>

                            <input type="radio" class="btn-check filter-radio" name="statutFilter" id="btnAttente"
                                value="attente">
                            <label
                                class="btn btn-outline-dark rounded-0 fw-bold border-0 d-flex align-items-center justify-content-center text-uppercase"
                                for="btnAttente">Attente</label>
                        </div>
                    </div>
                </div>

                <div id="searchInfo" class="mt-3 fw-bold" style="color: #1a1a1a; display: none;"></div>
            </div>

            <div class="table-responsive overflow-hidden">
                <table class="table table-borderless table-hover align-middle" style="color: #1a1a1a;">
                    <thead style="border-bottom: 3px solid #1a1a1a;">
                        <tr class="text-uppercase" style="color: var(--itu-bleu);">
                            <th scope="col" class="py-3">Candidat</th>
                            <th scope="col" class="py-3 d-none d-md-table-cell">Matricule</th>
                            <th scope="col" class="py-3 text-end">Statut</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody"></tbody>
                </table>
            </div>

            <nav class="mt-5 d-flex justify-content-center" aria-label="Pagination">
                <ul class="pagination mb-0" style="gap: 5px;" id="paginationContainer"></ul>
            </nav>

        </article>
    </div>
</section>

<script nonce="<?= $cspNonce ?>">
    document.addEventListener("DOMContentLoaded", function () {
        const allCandidats = <?= json_encode($candidats) ?>;

        let filteredData = allCandidats;
        let currentPage = 1;
        const rowsPerPage = 10;

        const tbody = document.getElementById('tableBody');
        const paginationContainer = document.getElementById('paginationContainer');
        const searchInput = document.getElementById('searchInput');
        const searchInfo = document.getElementById('searchInfo');
        const filterRadios = document.querySelectorAll('.filter-radio');

        let currentSearchQuery = '';
        let currentStatusFilter = 'all';

        function applyFilters() {
            filteredData = allCandidats.filter(c => {
                const nom = (c.Nom || '').toLowerCase();
                const prenom = (c.Prenom || '').toLowerCase();
                const numBacc = (c.NumBacc || '').toLowerCase();
                const matchesText = currentSearchQuery === '' || nom.includes(currentSearchQuery) || prenom.includes(currentSearchQuery) || numBacc.includes(currentSearchQuery);

                const statut = (c.Statut || '').toLowerCase().trim();
                const matchesStatus = currentStatusFilter === 'all' || statut === currentStatusFilter;

                return matchesText && matchesStatus;
            });

            if (currentSearchQuery !== '' || currentStatusFilter !== 'all') {
                searchInfo.style.display = 'block';
                let infoHtml = `>_ ${filteredData.length} résultat(s) trouvé(s)`;
                if (currentSearchQuery !== '') infoHtml += ` pour "<span style="color: var(--itu-bleu);">${currentSearchQuery}</span>"`;
                if (currentStatusFilter !== 'all') infoHtml += ` - ${currentStatusFilter.toUpperCase()}`;

                searchInfo.innerHTML = `${infoHtml} <button class="btn btn-link text-danger text-decoration-none ms-3 p-0" id="clearBtn"><i class="bi bi-x-circle-fill"></i> Réinitialiser</button>`;

                document.getElementById('clearBtn').addEventListener('click', clearFilters);
            } else {
                searchInfo.style.display = 'none';
            }

            currentPage = 1;
            renderTable();
        }

        searchInput.addEventListener('input', function (e) {
            currentSearchQuery = e.target.value.toLowerCase().trim();
            applyFilters();
        });

        filterRadios.forEach(radio => {
            radio.addEventListener('change', function (e) {
                currentStatusFilter = e.target.value;
                applyFilters();
            });
        });

        function clearFilters() {
            searchInput.value = '';
            currentSearchQuery = '';
            currentStatusFilter = 'all';
            document.getElementById('btnAll').checked = true;
            applyFilters();
        }

        function renderTable() {
            tbody.innerHTML = '';

            if (filteredData.length === 0) {
                tbody.innerHTML = `<tr><td colspan="4" class="text-center py-5 text-muted fw-bold"><i class="bi bi-folder-x fs-1 d-block mb-3"></i> Aucun résultat trouvé.</td></tr>`;
                paginationContainer.innerHTML = '';
                return;
            }

            const start = (currentPage - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            const pageData = filteredData.slice(start, end);

            pageData.forEach(c => {
            const nom = c.Nom ? c.Nom : '';
            const prenom = c.Prenom ? c.Prenom : '';
            const numBacc = c.NumBacc ? c.NumBacc : 'N/A';
            const statut = c.Statut ? c.Statut.toLowerCase().trim() : '';

            let badgeHtml = '';
            if (statut === 'admis') {
                badgeHtml = `<span class=\"itu-badge itu-badge-vert\">Admis</span>`;
            } else if (statut === 'attente') {
                badgeHtml = `<span class=\"itu-badge itu-badge-jaune\">Attente</span>`;
            } else if (statut) {
                badgeHtml = `<span class=\"itu-badge itu-badge-bleu\">${c.Statut}</span>`;
            } else {
                badgeHtml = `<span class=\"itu-badge bg-secondary\">N/A</span>`;
            }

            tbody.innerHTML += `
                <tr style="border-bottom: 2px dashed rgba(0,0,0,0.1);">
                    <td class="py-3">
                        <div class="fw-bold fs-5 text-uppercase">${nom} <span class="fw-medium text-capitalize">${prenom}</span></div>
                        <div class="text-muted small d-md-none mt-1">Matricule: ${numBacc}</div>
                    </td>
                    <td class="py-3 text-muted d-none d-md-table-cell align-middle">
                        ${numBacc}
                    </td>
                    <td class="py-3 text-end align-middle">
                        ${badgeHtml}
                    </td>
                </tr>
            `;
        });

            renderPagination();
        }

        function renderPagination() {
            paginationContainer.innerHTML = '';
            const totalPages = Math.ceil(filteredData.length / rowsPerPage);

            if (totalPages <= 1) return;

            paginationContainer.innerHTML += `
            <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                <button class="page-link rounded-0 border-dark text-dark fw-bold px-3 py-2 shadow-none page-btn" 
                   data-page="${currentPage - 1}" style="border-width: 2px; ${currentPage === 1 ? 'opacity: 0.5;' : ''}">
                    <i class="bi bi-chevron-left"></i>
                </button>
            </li>
            `;

            for (let i = 1; i <= totalPages; i++) {
                if (i === 1 || i === totalPages || (i >= currentPage - 2 && i <= currentPage + 2)) {
                    const activeClass = i === currentPage ? 'bg-dark text-white' : 'text-dark';
                    const styleClass = i === currentPage ? 'background-color: var(--itu-bleu);' : '';

                    paginationContainer.innerHTML += `
                    <li class="page-item ${i === currentPage ? 'active' : ''}">
                        <button class="page-link rounded-0 border-dark fw-bold px-3 py-2 shadow-none page-btn ${activeClass}" 
                           data-page="${i}" style="border-width: 2px; ${styleClass}">
                            ${i}
                        </button>
                    </li>
                    `;
                } else if (i === 2 || i === totalPages - 1) {
                    if (!paginationContainer.innerHTML.endsWith('...</span></li>')) {
                        paginationContainer.innerHTML += `<li class="page-item disabled"><span class="page-link rounded-0 border-0 text-dark bg-transparent">...</span></li>`;
                    }
                }
            }

            paginationContainer.innerHTML += `
            <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                <button class="page-link rounded-0 border-dark text-dark fw-bold px-3 py-2 shadow-none page-btn" 
                   data-page="${currentPage + 1}" style="border-width: 2px; ${currentPage === totalPages ? 'opacity: 0.5;' : ''}">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </li>
            `;
        }

        paginationContainer.addEventListener('click', function (e) {

            const btn = e.target.closest('.page-btn');
            if (!btn) return;

            const targetPage = parseInt(btn.getAttribute('data-page'), 10);
            const totalPages = Math.ceil(filteredData.length / rowsPerPage);

            if (targetPage >= 1 && targetPage <= totalPages) {
                currentPage = targetPage;
                renderTable();

                document.getElementById('searchInput').scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });

        renderTable();
    });
</script>