<?php
$design_resumes = [
    [
        'titre' => "Design et Communication digitale",
        'desc' => "Maîtrise du design et de l’art graphique au service de projet digital (UI/UX, Identité visuelle, Print)."
    ],
    [
        'titre' => "Content Management et Digital marketing",
        'desc' => "Maîtrise de la création de contenus Web, du Community Management, du SEO et de la stratégie digitale."
    ]
];

$cursus_data = [
    [
        'titre' => 'Design & Art Graphique',
        'couleur' => 'var(--itu-bleu)',
        'matieres' => [
            'Art graphique (Dessin traditionnel, Illustration digitale)',
            'Fondamentaux du design & Process Créatif',
            'Layout Design & Technique de composition',
            'Print Design (Packaging, édition)',
            'Identité visuelle et charte graphique'
        ]
    ],
    [
        'titre' => 'UI/UX & Médias',
        'couleur' => 'var(--itu-vert)',
        'matieres' => [
            'Digital Graphic Design - UI/UX Design',
            'Animations graphiques dédiées au web',
            'Design et programmation (Jeu vidéo, animation)',
            'Édition vidéo et traitement (Color grading, montage)'
        ]
    ],
    [
        'titre' => 'Développement Front-End',
        'couleur' => 'var(--itu-bleu)',
        'matieres' => [
            'HTML et Introduction au Web',
            'Technologies Front-End (niv 1, niv 2 et Mobiles)',
            'Web dynamique',
            'Webmastering, Web analytics, Gestion de contenus',
            'Framework (Principe et utilisation)'
        ]
    ],
    [
        'titre' => 'Marketing & Communication',
        'couleur' => 'var(--itu-vert)',
        'matieres' => [
            'Community Management et Médias',
            'Création de contenus rédactionnels et SEO',
            'Marketing digital & Stratégie',
            'Communication d\'entreprise',
            'Droit et législation sur la communication'
        ]
    ],
    [
        'titre' => 'Programmation & Système',
        'couleur' => 'var(--itu-bleu)',
        'matieres' => [
            'Programmation procédurale & Orientée objet',
            'Bases de données relationnelles',
            'Réseaux informatiques',
            'Architecture logicielle et conception objet',
            'Maintenance informatique et administration système'
        ]
    ],
    [
        'titre' => 'Management & Ouverture',
        'couleur' => 'var(--itu-vert)',
        'matieres' => [
            'Anglais professionnel & Culture digitale',
            'Gestion d\'entreprise',
            'Gestion de projets informatique & communication',
            'Test et Assurance qualité'
        ]
    ]
];
?>

<section class="hero position-relative min-vh-100 d-flex align-items-center text-start" id="accueil">
    <div class="position-absolute top-0 start-0 w-100 h-100 z-n1">
        <img src="/assets/images/background/bg-hero-2.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Campus"
            loading="lazy" />

        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
    </div>

    <div class="container position-relative z-1 px-4">
        <div class="row">
            <div class="col-lg-8">
                <h1 id="itu-hero-title" class="itu-hero-title text-white text-uppercase mb-3">
                    Parcours Design <br />
                </h1>
                <p id="itu-hero-subtitle" class="lead text-white mb-3 fs-4 fw-light">
                    Libérez votre créativité et maîtrisez l'art de la communication digitale.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="itu-formation itu-formations-info container-fluid py-5" style="background-color: var(--itu-bleu);">
    <div class="container py-5 text-center">

        <header class="mb-5">
            <h3 class="fw-bold text-uppercase d-inline-block pb-2" style="color: var(--itu-vert);">
                Options
            </h3>
        </header>

        <article class="row justify-content-center mb-5">
            <?php foreach ($design_resumes as $parcours) { ?>
                <article class="col-md-5 mb-4">
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
        
        <header class="text-start mb-5 border-bottom border-dark border-3 pb-3">
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
                <div class="col">
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

<a href="/formations/informatique" class="text-decoration-none d-block w-100 itu-cta-design">
    <section class="py-4 py-md-5" style="background-color: var(--itu-bleu);">
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between">

                <div>
                    <p class="text-white-50 text-uppercase mb-1 fw-bold"
                        style="letter-spacing: 2px; font-size: 0.85rem;">
                        Plutôt passionné par le code ?
                    </p>
                    <h3 class="display-6 fw-bold text-white mb-0 text-uppercase">
                        Découvrez le parcours Informatique
                    </h3>
                </div>

                <div class="mt-3 mt-md-0 d-flex align-items-center overflow-hidden">
                    <span class="text-white fw-bold text-uppercase me-3 fs-5 d-md-none d-lg-block">Explorer</span>
                    <i class="bi bi-arrow-right text-white display-5 mb-0 itu-banner-arrow"></i>
                </div>

            </div>
        </div>
    </section>
</a>