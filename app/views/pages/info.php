<?php
$info_resumes = [
    [
        'titre' => "Développement d'applications",
        'desc' => "Conception et développement de projets d’entreprises en architecture N-tiers."
    ],
    [
        'titre' => "Web intégration et Web Designer",
        'desc' => "Maîtrise des nouvelles techniques du Web 2.0 et du développement Front-end."
    ],
    [
        'titre' => "Base de données et Réseaux",
        'desc' => "Administration des BDD (relationnelles, objets, NoSQL) et des systèmes/réseaux."
    ]
];

$cursus_data = [
    [
        'titre' => 'Programmation',
        'icone' => 'bi-code-slash',
        'couleur' => 'var(--itu-bleu)',
        'matieres' => [
            'Programmation Avancée, Frameworks',
            'Programmation Système',
            'Programmation Orientée Objet',
            'Conception en Modèle orienté Objet',
            'Architecture Logicielle'
        ]
    ],
    [
        'titre' => 'Base de Données et Réseaux',
        'icone' => 'bi-database-fill-gear',
        'couleur' => 'var(--itu-vert)',
        'matieres' => [
            'Bases de Données avancées, Administration et optimisation',
            'Datawarehouse et Datamining',
            'Gestion de Domaines, Clustering',
            'Conception et Modèle relationnels'
        ]
    ],
    [
        'titre' => 'Web',
        'icone' => 'bi-globe',
        'couleur' => 'var(--itu-bleu)',
        'matieres' => [
            'Web Dynamique',
            'Web Services',
            'Web Design',
            'Web Avancé'
        ]
    ],
    [
        'titre' => 'Techniques de base',
        'icone' => 'bi-pc-display',
        'couleur' => 'var(--itu-vert)',
        'matieres' => [
            'Programmation',
            'Algorithmique',
            'Bases de données',
            'Base de l’Administration Système',
            'Réseaux et Communication',
            'HTML et Introduction au Web',
            'Maintenance Matériel et Logiciel',
            'Projet Informatique'
        ]
    ],
    [
        'titre' => 'Mathématiques',
        'icone' => 'bi-calculator-fill',
        'couleur' => 'var(--itu-bleu)',
        'matieres' => [
            'Arithmétique, Nombres réels et Complexes',
            'Probabilité et Statistique',
            'Algèbre Linéaire',
            'Analyse',
            'Calcul Numérique',
            'Mathématiques Assistées par Ordinateur',
            'Recherche Opérationnelle',
            'Géométrie 2D et 3D'
        ]
    ],
    [
        'titre' => 'Matières d’Ouverture',
        'icone' => 'bi-briefcase-fill',
        'couleur' => 'var(--itu-vert)',
        'matieres' => [
            'Législation',
            'Mathématiques Financières',
            'Notions d’Economie',
            'Notions de gestion',
            'Communication d’Entreprise',
            'Techniques de Communication'
        ]
    ]
];
?>
<section class="hero position-relative min-vh-100 d-flex align-items-center text-start" id="accueil">
    <div class="position-absolute top-0 start-0 w-100 h-100 z-n1">
        <img src="../assets/images/background/bg-hero-2.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Campus"
            loading="lazy" />

        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
    </div>

    <div class="container position-relative z-1 px-4">
        <div class="row">
            <div class="col-lg-8">
                <h1 id="itu-hero-title" class="itu-hero-title text-white text-uppercase mb-3">
                    Parcours Informatique <br />
                </h1>
                <p id="itu-hero-subtitle" class="lead text-white mb-3 fs-4 fw-light">
                    Concevez, développez et administrez les solutions de demain.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Info Section -->
<section class="itu-formation itu-formations-info container-fluid py-5" style="background-color: var(--itu-bleu);">
    <div class="container py-5 text-center">

        <header class="mb-5 reveal">
            <h3 class="fw-bold text-uppercase d-inline-block pb-2" style="color: var(--itu-vert);">
                Parcours
            </h3>
        </header>

        <article class="row justify-content-center mb-5 reveal">
            <?php foreach ($info_resumes as $parcours) { ?>
                <article class="col-md-4 mb-4">
                    <h5 class="fw-bold text-white">
                        <?= $parcours['titre'] ?>
                    </h5>
                    <p class="text-white-50 px-3">
                        <?= $parcours['desc'] ?>
                    </p>
                </article>
            <?php } ?>
        </article>
    </div>
</section>

<section class="py-5" style="background-color: var(--itu-gris);" data-section-theme="light">
    <div class="container py-5">

        <header class="text-start mb-5 border-bottom border-dark border-3 pb-3 reveal">
            <h2 class="display-4 fw-black text-uppercase mb-0" style="letter-spacing: -2px; font-weight: 900;">
                Programme Détaillé
            </h2>
        </header>

        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-xl-3">

            <?php
            $index = 1;
            foreach ($cursus_data as $categorie):
                $num = str_pad($index, 2, '0', STR_PAD_LEFT);
                ?>
                <div class="col reveal">
                    <article class="card h-100 rounded-0 itu-brutalist-card position-relative overflow-hidden"
                        style="border: 2px solid #1a1a1a; background-color: #ffffff;">

                        <div class="position-absolute" style="top: -20px; right: -10px; font-size: 10rem; font-weight: 900; line-height: 1; 
                                    color: transparent; -webkit-text-stroke: 2px <?= $categorie['couleur'] ?>; 
                                    opacity: 0.2; z-index: 0; pointer-events: none; user-select: none;">
                            <?= $num ?>
                        </div>

                        <div class="card-body p-4 p-lg-5 position-relative z-1 d-flex flex-column">

                            <div class="mb-4 pb-3 border-bottom border-dark border-2">
                                <h4 class="fw-bold mb-0 text-uppercase fs-4 d-flex align-items-end"
                                    style="letter-spacing: -1px; color: #1a1a1a; min-height: 3.5rem;">
                                    <?= $categorie['titre'] ?>
                                </h4>
                            </div>

                            <ul class="list-unstyled mb-0">
                                <?php foreach ($categorie['matieres'] as $matiere): ?>
                                    <li class="d-flex align-items-start mb-3 font-monospace"
                                        style="font-size: 0.85rem; color: #1a1a1a;">
                                        <span class="me-3 fw-bold fs-6" style="color: <?= $categorie['couleur'] ?>;">>_</span>
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

<a href="/formations/design" class="text-decoration-none d-block w-100 itu-cta-design">
    <section class="py-4 py-md-5" style="background-color: var(--itu-bleu);">
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between ">

                <div class="reveal">
                    <p class="text-white-50 text-uppercase mb-1 fw-bold"
                        style="letter-spacing: 2px; font-size: 0.85rem;">
                        Vous avez une âme créative ?
                    </p>
                    <h3 class="display-6 fw-bold text-white mb-0 text-uppercase">
                        Découvrez le parcours Design
                    </h3>
                </div>

                <div class="mt-3 mt-md-0 d-flex align-items-center overflow-hidden reveal delay-1">
                    <span class="text-white fw-bold text-uppercase me-3 fs-5 d-md-none d-lg-block">Explorer</span>
                    <i class="bi bi-arrow-right text-white display-5 mb-0 itu-banner-arrow"></i>
                </div>

            </div>
        </div>
    </section>
</a>