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

$design_resumes = [
    [
        'titre' => "Design et Communication digitale",
        'desc' => "Maîtrise du design et de l’art graphique au service de projet digital."
    ],
    [
        'titre' => "Content Management et Digital marketing",
        'desc' => "Maîtrise du développement de contenu Web 2.0 et du digital marketing."
    ]
];
?>
<section class="hero position-relative min-vh-100 d-flex align-items-center text-start" id="accueil">
    <div id="heroBackground" class="carousel slide carousel-fade position-absolute top-0 start-0 w-100 h-100 z-n1"
        data-bs-ride="carousel" data-bs-pause="false">
        <div class="carousel-inner w-100 h-100">
            <div class="carousel-item active w-100 h-100" data-bs-interval="4000">
                <img src="../assets/images/background/bg-hero-1.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Campus"
                    loading="lazy" />
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
            </div>
            <div class="carousel-item w-100 h-100" data-bs-interval="4000">
                <img src="../assets/images/background/bg-hero-2.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Étudiants"
                    loading="lazy" />
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
            </div>
        </div>
    </div>

    <div class="container position-relative z-1 px-4">
        <div class="row">
            <div class="col-lg-8">
                <h1 id="itu-hero-title" class="itu-hero-title text-white text-uppercase mb-3">
                    Nos Formations <br />
                </h1>
                <p id="itu-hero-subtitle" class="lead text-white mb-3 fs-4 fw-light">
                    Découvrez les parcours qui feront de vous un <span class="fw-bold">expert.</span>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Info Section -->
<section class="itu-formation itu-formations-info container-fluid py-5" style="background-color: var(--itu-bleu);">
    <div class="container py-5 text-center">
        
        <header class="mb-5">
            <h3 class="fw-bold text-uppercase d-inline-block pb-2" style="color: var(--itu-vert);">
                Informatique
            </h3>
        </header>
        
        <article class="row justify-content-center mb-5">
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

<!-- Design Section -->
<section class="itu-formation itu-formations-design container-fluid py-5" style="background-color: var(--itu-vert);">
    <div class="container py-5 text-center">
        
        <header class="mb-5">
            <h3 class="fw-bold text-uppercase d-inline-block pb-2" style="color: var(--itu-bleu);">
                Design
            </h3>
        </header>

        <article class="row justify-content-center mb-5">
            <?php foreach ($design_resumes as $parcours) { ?>
                <article class="col-md-5 mb-4">
                    <h5 class="fw-bold" style="color: var(--itu-bleu);"><?= $parcours['titre'] ?></h5>
                    <p class="text-muted px-3"><?= $parcours['desc'] ?></p>
                </article>
            <?php } ?>
        </article>
    </div>
</section>

<section class="itu-contact-cta min-vh-100 d-flex align-items-center justify-content-center position-relative text-center">
    
    <div class="itu-cta-overlay position-absolute top-0 start-0 w-100 h-100"></div>

<<<<<<< HEAD
    <div class="container position-relative z-1 text-white">
        <h2 class="itu-cta-title display-2 fw-bold text-uppercase mb-4">
            Plus d'informations ?
        </h2>
        <p class="lead mb-5 fs-4 fw-light opacity-75">
            Notre équipe est là pour vous guider dans vos choix de parcours.
        </p>
        
        <a href="/contact" class="btn-itu btn-itu-vert rounded-0 fw-bold px-5 py-3 text-uppercase">
            Contactez-nous
        </a>
=======
        <hr class="my-5 opacity-10">

        <div class="row justify-content-center">
            <div class="col-12 mb-4">
                <h3 class="fw-bold text-uppercase border-bottom d-inline-block pb-2 mb-5" style="color: var(--itu-vert); border-color: var(--itu-vert) !important;">Design</h3>
            </div>

            <div class="col-md-5 mb-5">
                <div class="itu-icon-wrapper mb-3">
                    <img src="assets/images/icons/design.png" alt="Icon Design" style="width: 60px;">
                </div>
                <h5 class="fw-bold" style="color: var(--itu-vert)">Design et Communication digital</h5>
                <p class="text-muted small px-3">Maîtrise du design et de l’art graphique au service de projet digital.</p>
            </div>

            <div class="col-md-5 mb-5">
                <div class="itu-icon-wrapper mb-3">
                    <img src="assets/images/icons/marketing.png" alt="Icon Marketing" style="width: 60px;">
                </div>
                <h5 class="fw-bold" style="color: var(--itu-vert)">Content Management et Digital marketing</h5>
                <p class="text-muted small px-3">Maîtrise du développement de contenu Web 2.0 et du digital marketing.</p>
            </div>
        </div>
>>>>>>> 453ba60e14380aefbace9f7be96bf0ca87945a1f
    </div>
</section>