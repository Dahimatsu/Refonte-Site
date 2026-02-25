<?php
// Données du programme MBDS
$mbds_modules = [
    [
        'titre' => 'Bases de données & Infostructures',
        'icone' => 'bi-database-fill-gear',
        'couleur' => 'var(--itu-bleu)',
        'matieres' => [
            'Big Data & Data Mining',
            'Customer Relationship Management (CRM)',
            'SQL3',
            'Administration avancée'
        ]
    ],
    [
        'titre' => 'Serveurs d’applications',
        'icone' => 'bi-server',
        'couleur' => 'var(--itu-vert)',
        'matieres' => [
            'J2EE',
            '.NET',
            'Web 2.0 (Ajax)',
            'XML & Services Web'
        ]
    ],
    [
        'titre' => 'Systèmes Mobiquitaires',
        'icone' => 'bi-phone-fill',
        'couleur' => 'var(--itu-bleu)',
        'matieres' => [
            'Android & iOS',
            'NFC (Near Field Communication)',
            'QR Code',
            'Réalité augmentée'
        ]
    ]
];

$dossier_items = [
    'CV & Photo CIN',
    'Certificat de résidence',
    'Copies des diplômes',
    '3 Photos d\'identité',
    'Chemise cartonnée rose'
];
?>

<section class="hero position-relative min-vh-100 d-flex align-items-center text-start" id="accueil">
    <div id="heroBackground" class="carousel slide carousel-fade position-absolute top-0 start-0 w-100 h-100 z-n1"
        data-bs-ride="carousel" data-bs-pause="false">
        <div class="carousel-inner w-100 h-100">
            <div class="carousel-item active w-100 h-100" data-bs-interval="4000">
                <img src="../assets/images/background/bg-hero-1.jpg" class="d-block w-100 h-100 object-fit-cover"
                    alt="Campus" loading="lazy" />
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
            </div>
            <div class="carousel-item w-100 h-100" data-bs-interval="4000">
                <img src="../assets/images/background/bg-hero-2.jpg" class="d-block w-100 h-100 object-fit-cover"
                    alt="Étudiants" loading="lazy" />
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
            </div>
        </div>
    </div>

    <div class="container position-relative z-1 px-4">
        <div class="row">
            <div class="col-lg-8">
                <h1 id="itu-hero-title" class="itu-hero-title text-white text-uppercase mb-3">
                    MBDS Nice.
                </h1>
                <p id="itu-hero-subtitle" class="lead text-white mb-3 fs-4 fw-light">
                    Mobiquité, Base de Données et intégrations de Systèmes.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 " data-section-theme="light">
    <div class="container py-4">
        <div class="row align-items-center mb-5">
            <div class="col-lg-7">
                <h2 class="display-5 fw-black text-uppercase mb-3"
                    style="color: var(--itu-bleu); letter-spacing: -1px;">
                    Le Master International
                </h2>
                <p class="lead text-muted" style="line-height: 1.8;">
                    IT University offre en partenariat avec l’Université de Nice à Sophia Antipolis (France), le Master
                    MBDS. Une formation de pointe pour maîtriser les technologies de demain.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <article class="p-4 p-lg-5 h-100 rounded-0 itu-brutalist-card"
                    style="border: 2px solid #1a1a1a; background-color: #f8fcfb;">
                    <div class="d-flex align-items-center mb-4 pb-3 border-bottom border-dark border-2">
                        <i class="bi bi-calendar-check fs-2 me-3" style="color: var(--itu-vert);"></i>
                        <h4 class="fw-bold mb-0 text-uppercase fs-4" style="color: #1a1a1a;">Dates à retenir</h4>
                    </div>
                    <ul class="list-unstyled mb-0 fs-5 font-monospace">
                        <li class="mb-3 d-flex align-items-center"><span class="fw-bold me-3"
                                style="color: var(--itu-bleu);">>_</span> <strong>Clôture :</strong> <span
                                class="ms-2">Septembre</span></li>
                        <li class="d-flex align-items-center"><span class="fw-bold me-3"
                                style="color: var(--itu-bleu);">>_</span> <strong>Rentrée :</strong> <span
                                class="ms-2">Octobre</span></li>
                    </ul>
                </article>
            </div>

            <div class="col-md-6">
                <article class="p-4 p-lg-5 h-100 rounded-0 itu-brutalist-card"
                    style="border: 2px solid #1a1a1a; background-color: #f8fcfb;">
                    <div class="d-flex align-items-center mb-4 pb-3 border-bottom border-dark border-2">
                        <i class="bi bi-person-check fs-2 me-3" style="color: var(--itu-vert);"></i>
                        <h4 class="fw-bold mb-0 text-uppercase fs-4" style="color: #1a1a1a;">Admission</h4>
                    </div>
                    <p class="fs-5 mb-0 fw-medium" style="color: #1a1a1a; line-height: 1.6;">
                        Ouvert aux étudiants niveau <span class="fw-bold" style="color: var(--itu-bleu);">Bac+4 en
                            Informatique</span> ou équivalent, après un examen rigoureux du dossier.
                    </p>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color: var(--itu-gris);" data-section-theme="light">
    <div class="container py-5">

        <header class="text-start mb-5 border-bottom border-dark border-3 pb-3">
            <h2 class="display-4 fw-black text-uppercase mb-0" style="letter-spacing: -2px; font-weight: 900;">
                Détails
            </h2>
        </header>

        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <?php
            $index = 1;
            foreach ($mbds_modules as $module):
                $num = str_pad($index, 2, '0', STR_PAD_LEFT);
                ?>
                <div class="col">
                    <article class="card h-100 rounded-0 itu-brutalist-card position-relative overflow-hidden"
                        style="border: 2px solid #1a1a1a; background-color: #ffffff;">

                        <div class="position-absolute"
                            style="top: -20px; right: -10px; font-size: 10rem; font-weight: 900; line-height: 1; color: transparent; -webkit-text-stroke: 2px <?= $module['couleur'] ?>; opacity: 0.2; z-index: 0; pointer-events: none; user-select: none;">
                            <?= $num ?>
                        </div>

                        <div class="card-body p-4 p-lg-5 position-relative z-1 d-flex flex-column">
                            <div class="mb-4 pb-3 border-bottom border-dark border-2">
                                <h4 class="fw-bold mb-0 text-uppercase fs-4 d-flex align-items-end"
                                    style="letter-spacing: -1px; color: #1a1a1a; min-height: 3.5rem;">
                                    <?= $module['titre'] ?>
                                </h4>
                            </div>

                            <ul class="list-unstyled mb-0">
                                <?php foreach ($module['matieres'] as $matiere): ?>
                                    <li class="d-flex align-items-start mb-3 font-monospace"
                                        style="font-size: 0.85rem; color: #1a1a1a;">
                                        <span class="me-3 fw-bold fs-6" style="color: <?= $module['couleur'] ?>;">>_</span>
                                        <span class="fw-medium">
                                            <?= $matiere ?>
                                        </span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </article>
                </div>
                <?php
                $index++;
            endforeach;
            ?>
        </div>
    </div>
</section>