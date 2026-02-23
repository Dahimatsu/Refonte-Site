<section class="hero position-relative min-vh-100 d-flex align-items-center text-start" id="accueil">
    <div id="heroBackground" class="carousel slide carousel-fade position-absolute top-0 start-0 w-100 h-100 z-n1"
        data-bs-ride="carousel" data-bs-pause="false">
        <div class="carousel-inner w-100 h-100">
            <div class="carousel-item active w-100 h-100" data-bs-interval="4000">
                <img src="../assets/images/bg-hero-1.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Campus"
                    loading="lazy" />
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
            </div>
            <div class="carousel-item w-100 h-100" data-bs-interval="4000">
                <img src="../assets/images/bg-hero-2.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Étudiants"
                    loading="lazy" />
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
            </div>
        </div>
    </div>

    <div class="container position-relative z-1 px-4">
        <div class="row">
            <div class="col-lg-8">
                <h1 id="itu-hero-title" class="itu-hero-title text-white text-uppercase mb-3">
                    Vos diplômes <br />
                    <span id="animated-foundation" class="d-inline-flex">reconnus.</span>
                </h1>
                <p id="itu-hero-subtitle" class="lead text-white mb-3 fs-4 fw-light">Diplômes habilités par
                    l’Enseignement Supérieur – <span class="fw-bold">Système LMD.</span></p>
            </div>
        </div>
    </div>
</section>

<!-- Diplome Section -->
<section id="diplome" class="min-vh-100 position-relative py-5" data-section-theme="dark">
    <div class="position-absolute top-0 start-0 w-100 h-100 z-0">
        <img src="../assets/images/remise_diplome.jpg" alt="Remise de diplôme ITU" class="w-100 h-100 object-fit-cover" loading="lazy" />
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, rgba(10, 25, 47, 0.98) 30%, rgba(10, 25, 47, 0.7) 100%)"></div>
    </div>

    <div class="container position-relative z-1 py-5">
        <div class="row">
            <div class="col-lg-8 col-xl-7 text-white">
                <h6 class="text-uppercase fw-bold mb-3" style="color: var(--itu-vert); letter-spacing: 2px">L'aboutissement</h6>
                <h2 class="display-4 fw-bold mb-4" style="font-family: var(--font-title)">Master MBDS Nice</h2>
                
                <p class="lead opacity-75 mb-5">
                    IT University offre en partenariat avec l’Université de Nice à Sophia Antipolis (France), 
                    le Master MBDS (Mobiquité, Base de Données et intégrations de Systèmes).
                </p>

                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <div class="p-4 border border-white border-opacity-10 h-100" style="background: rgba(255,255,255,0.03);">
                            <h5 class="text-vert mb-3"><i class="bi bi-calendar-check me-2"></i>Dates à retenir</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2 small"><strong>Clôture :</strong> Septembre</li>
                                <li class="small"><strong>Rentrée :</strong> Octobre</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-4 border border-white border-opacity-10 h-100" style="background: rgba(255,255,255,0.03);">
                            <h5 class="text-vert mb-3"><i class="bi bi-mortarboard me-2"></i>Admission</h5>
                            <p class="small mb-0">Ouvert aux Bac+4 en Informatique ou équivalent après examen du dossier.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion accordion-flush itu-accordion mb-5" id="accordionMBDS">
                    
                    <div class="accordion-item bg-transparent border-white border-opacity-10">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDossier">
                                Dossier à fournir
                            </button>
                        </h2>
                        <div id="collapseDossier" class="accordion-collapse collapse" data-bs-parent="#accordionMBDS">
                            <div class="accordion-body text-white opacity-75">
                                <ul class="row row-cols-md-2 g-2 list-unstyled mb-0">
                                    <li><i class="bi bi-check2 text-vert me-2"></i>CV & Photo CIN</li>
                                    <li><i class="bi bi-check2 text-vert me-2"></i>Certificat de résidence</li>
                                    <li><i class="bi bi-check2 text-vert me-2"></i>Copies des diplômes</li>
                                    <li><i class="bi bi-check2 text-vert me-2"></i>3 Photos d'identité</li>
                                    <li><i class="bi bi-check2 text-vert me-2"></i>Chemise cartonnée rose</li>
                                </ul>
                                <a href="#" class="btn btn-link text-vert p-0 mt-3 text-decoration-none">
                                    <i class="bi bi-download me-2"></i>Télécharger le formulaire
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item bg-transparent border-white border-opacity-10">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProgramme">
                                Contenu de la formation (Modules)
                            </button>
                        </h2>
                        <div id="collapseProgramme" class="accordion-collapse collapse" data-bs-parent="#accordionMBDS">
                            <div class="accordion-body text-white opacity-75">
                                <div class="mb-3">
                                    <h6 class="text-vert">Bases de données & Infostructures</h6>
                                    <p class="small">Big Data, Data Mining, CRM, SQL3, Administration avancée.</p>
                                </div>
                                <div class="mb-3">
                                    <h6 class="text-vert">Serveurs d’applications</h6>
                                    <p class="small">J2EE, .NET, Web 2.0 (Ajax), XML, Services Web.</p>
                                </div>
                                <div>
                                    <h6 class="text-vert">Systèmes Mobiquitaires</h6>
                                    <p class="small">Android, iOS, NFC, QR Code, Réalité augmentée.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>