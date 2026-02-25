<?php
$bihar_modules = [
    [
        'titre' => 'Cloud & Data',
        'icone' => 'bi-cloud-arrow-up-fill',
        'couleur' => 'var(--itu-bleu)',
        'matieres' => [
            'Cloud Programming',
            'Distributed Big Data Management'
        ]
    ],
    [
        'titre' => 'Sécurité & IA',
        'icone' => 'bi-shield-lock-fill',
        'couleur' => 'var(--itu-vert)',
        'matieres' => [
            'Cybersecurity and Blockchain',
            'Artificial Intelligence and NLP',
            'Advanced Machine Learning and Deep Learning'
        ]
    ],
    [
        'titre' => 'Développement Avancé',
        'icone' => 'bi-code-slash',
        'couleur' => 'var(--itu-bleu)',
        'matieres' => [
            'Full-stack Web Mobile Programming',
            'Augmented Reality and Virtual Reality',
            'Advanced Mobile Programming',
            'Agile and NFC Programming'
        ]
    ],
    [
        'titre' => 'Compétences Transversales',
        'icone' => 'bi-person-gear',
        'couleur' => 'var(--itu-vert)',
        'matieres' => [
            'Multidisciplinary and Soft Skills'
        ]
    ]
];

$bihar_projets = [
    [
        'titre' => 'DEEP BRIDGE',
        'type' => 'Projet BIG DATA et IA (Sur 5 ans)',
        'icone' => 'bi-shield-plus',
        'desc' => "Imagerie médicale / SCANNER cardiaque (ECRIN & 3 centres Européens)."
    ],
    [
        'titre' => 'JMAGINE',
        'type' => 'Projet SMART CITY',
        'icone' => 'bi-geo-alt',
        'desc' => "Réseau social scolaire (Face School) sur territoire culturel."
    ],
    [
        'titre' => 'MASLOW',
        'type' => 'Projet SMART CITY',
        'icone' => 'bi-house-gear',
        'desc' => "Smart Home (IoT, SALTO Systems) & Énergies renouvelables."
    ],
    [
        'titre' => '2LIFI',
        'type' => 'Projet SMART CITY',
        'icone' => 'bi-lightbulb',
        'desc' => "Éclairage public intelligent (Smart Lighting) avec QR Light."
    ],
    [
        'titre' => 'RASPCAR',
        'type' => 'Projet SMART CITY',
        'icone' => 'bi-car-front',
        'desc' => "Voiture à air comprimé (Raspberry PI) pour l'Expo Universelle Dubaï."
    ]
];
?>

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
                    L'aboutissement <br />
                    <span id="animated-foundation" class="d-inline-flex">MSc BIHAR.</span>
                </h1>
                <p id="itu-hero-subtitle" class="lead text-white mb-3 fs-4 fw-light">
                    Big Data Intelligence for Human Augmented <span class="fw-bold">Reality.</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 " data-section-theme="light" style="background-color: var(--itu-vert);">
    <div class="container py-4">
        <div class="row align-items-center mb-5">
            <div class="col-lg-7">
                <h2 class="display-5 fw-black text-uppercase mb-3"
                    style="color: var(--itu-bleu); letter-spacing: -1px;">
                    Master of Science BIHAR
                </h2>
                <p class="lead text-muted" style="line-height: 1.8;">
                    Une formation d'excellence accréditée par la Conférence des Grandes Écoles, en partenariat avec
                    l'ESTIA.
                </p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-10 col-lg-8">
                <article class="p-4 p-lg-5 h-100 rounded-0 itu-brutalist-card"
                    style="border: 2px solid #1a1a1a; background-color: #f8fcfb;">
                    <div class="d-flex align-items-center mb-4 pb-3 border-bottom border-dark border-2">
                        <i class="bi bi-crosshair fs-2 me-3" style="color: var(--itu-vert);"></i>
                        <h4 class="fw-bold mb-0 text-uppercase fs-4" style="color: #1a1a1a;">4 Blocs de compétences
                            métier</h4>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-2 g-3">
                        <div class="col d-flex align-items-center font-monospace">
                            <span class="fw-bold me-3" style="color: var(--itu-bleu);">>_</span>
                            <span class="fw-medium">Data Science</span>
                        </div>
                        <div class="col d-flex align-items-center font-monospace">
                            <span class="fw-bold me-3" style="color: var(--itu-vert);">>_</span>
                            <span class="fw-medium">Architecte Big Data</span>
                        </div>
                        <div class="col d-flex align-items-center font-monospace">
                            <span class="fw-bold me-3" style="color: var(--itu-bleu);">>_</span>
                            <span class="fw-medium">Chef de Projet Cloud & Cybersécurité</span>
                        </div>
                        <div class="col d-flex align-items-center font-monospace">
                            <span class="fw-bold me-3" style="color: var(--itu-vert);">>_</span>
                            <span class="fw-medium">Développeur Mobile et Web</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color: var(--itu-gris);" data-section-theme="light">
    <div class="container py-5">

        <header class="text-start mb-5 border-bottom border-dark border-3 pb-3">
            <h2 class="display-4 fw-black text-uppercase mb-0" style="letter-spacing: -2px; font-weight: 900;">
                Programme Détaillé
            </h2>
        </header>

        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-xl-4">
            <?php
            $index = 1;
            foreach ($bihar_modules as $module):
                $num = str_pad($index, 2, '0', STR_PAD_LEFT);
                ?>
                <div class="col">
                    <article class="card h-100 rounded-0 itu-brutalist-card position-relative overflow-hidden"
                        style="border: 2px solid #1a1a1a; background-color: #ffffff;">

                        <div class="position-absolute"
                            style="top: -20px; right: -10px; font-size: 8rem; font-weight: 900; line-height: 1; color: transparent; -webkit-text-stroke: 2px <?= $module['couleur'] ?>; opacity: 0.2; z-index: 0; pointer-events: none; user-select: none;">
                            <?= $num ?>
                        </div>

                        <div class="card-body p-4 position-relative z-1 d-flex flex-column">
                            <div class="mb-4 pb-3 border-bottom border-dark border-2">
                                <h4 class="fw-bold mb-0 text-uppercase fs-5 d-flex align-items-end"
                                    style="letter-spacing: -1px; color: #1a1a1a; min-height: 3.5rem;">
                                    <?= $module['titre'] ?>
                                </h4>
                            </div>

                            <ul class="list-unstyled mb-0">
                                <?php foreach ($module['matieres'] as $matiere): ?>
                                    <li class="d-flex align-items-start mb-3 font-monospace"
                                        style="font-size: 0.8rem; color: #1a1a1a;">
                                        <span class="me-2 fw-bold" style="color: <?= $module['couleur'] ?>;">>_</span>
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

<section class="py-5" data-section-theme="light">
    <div class="container py-5">
        <header class="text-center mb-5">
            <h2 class="display-5 fw-black text-uppercase mb-3" style="color: var(--itu-bleu); letter-spacing: -1px;">
                Projets d'innovation R&D
            </h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">
                Mettez en pratique vos compétences sur des projets réels et ambitieux.
            </p>
        </header>

        <div class="row g-4 justify-content-center">
            <?php foreach ($bihar_projets as $projet): ?>
                <div class="col-md-6 col-lg-4">
                    <article class="p-4 h-100 rounded-0 itu-brutalist-card d-flex flex-column"
                        style="border: 2px solid #1a1a1a; background-color: var(--itu-gris);">

                        <div class="mb-3 d-flex align-items-center">
                            <i class="bi <?= $projet['icone'] ?> fs-2 me-3" style="color: var(--itu-vert);"></i>
                            <div>
                                <span class="badge rounded-0 mb-1"
                                    style="background-color: var(--itu-bleu); font-size: 0.7rem; border: 1px solid #1a1a1a;">
                                    <?= $projet['type'] ?>
                                </span>
                                <h5 class="fw-bold text-uppercase mb-0" style="color: #1a1a1a;">
                                    <?= $projet['titre'] ?>
                                </h5>
                            </div>
                        </div>

                        <p class="text-muted font-monospace mt-auto mb-0" style="font-size: 0.85rem;">
                            <?= $projet['desc'] ?>
                        </p>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>