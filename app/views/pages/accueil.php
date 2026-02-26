<?php
$partenaires = [
    ['src' => 'republique.png', 'alt' => 'République de Madagascar', 'link' => 'https://www.presidence.gov.mg/'],
    ['src' => 'mesupres.png', 'alt' => 'MESUPRES', 'link' => 'https://www.mesupres.gov.mg/'],
    ['src' => 'mndpt.png', 'alt' => 'MNDPT', 'link' => 'https://www.mndpt.gov.mg/'],
    ['src' => 'pamf.png', 'alt' => 'PAMF', 'link' => 'https://www.pamf.mg/'],
    ['src' => 'axian.png', 'alt' => 'Groupe Axian', 'link' => 'https://www.axian-group.com/'],
    ['src' => 'bred.png', 'alt' => 'BRED Banque Populaire', 'link' => 'https://www.bred.mg/'],
    ['src' => 'accesbanque.png', 'alt' => 'AccèsBanque Madagascar', 'link' => 'https://www.accesbanque.mg/'],
    ['src' => 'basan.png', 'alt' => 'Groupe Basan', 'link' => 'https://www.basan.mg/'],
    ['src' => 'qdata.png', 'alt' => 'Q-Data', 'link' => 'https://www.facebook.com/qdatamadagascar/'],
    ['src' => 'softwell.png', 'alt' => 'Softwell', 'link' => 'https://www.softwell.mg/'],
    ['src' => 'asisten.png', 'alt' => 'Asisten', 'link' => 'https://asisten-travel.com/'],
    ['src' => 'sioka.png', 'alt' => 'Sioka', 'link' => 'https://www.sioka.org/'],
    ['src' => 'fthm.png', 'alt' => 'FTHM Consulting', 'link' => 'https://fthmconsulting.com/'],
    ['src' => 'yas.png', 'alt' => 'Yas Madagascar', 'link' => 'https://www.yas.mg/'],
];
?>
<!-- Hero Section -->
<section class="hero position-relative min-vh-100 d-flex align-items-center text-start" id="accueil">
    <div id="heroBackground" class="carousel slide carousel-fade position-absolute top-0 start-0 w-100 h-100 z-n1"
        data-bs-ride="carousel" data-bs-pause="false">
        <div class="carousel-inner w-100 h-100">
            <div class="carousel-item active w-100 h-100" data-bs-interval="4000">
                <img src="/assets/images/background/itu-bg-1.jpeg"
                    class="d-block w-100 h-100 object-fit-cover bg-mobile-right" alt="Campus" loading="lazy" />
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
            </div>
            <div class="carousel-item w-100 h-100" data-bs-interval="4000">
                <img src="/assets/images/background/bg-hero-2.jpg"
                    class="d-block w-100 h-100 object-fit-cover bg-mobile-right" alt="Étudiants" loading="lazy" />
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
            </div>
        </div>
    </div>

    <div class="container position-relative z-1 px-4">
        <div class="row">
            <div class="col-lg-8">

                <?php if ($hasResults) { ?>

                    <h1 class="itu-hero-title text-white text-uppercase mb-3">
                        Les résultats sont disponibles ! 
                    </h1>
                    <p class="lead text-white mb-3 fs-4 fw-light">
                        Découvrez la liste des admis pour la rentrée <span class="fw-bold" id="current-year"></span>
                    </p>
                    <div class="d-inline-block mt-3">
                        <a href="/resultats" class="btn-itu btn-itu-bleu" style="border-color: var(--itu-bleu);">
                            <span>Voir les résultats <i class="bi bi-arrow-right ms-2"></i></span>
                        </a>
                    </div>

                <?php } else { ?>

                    <h1 id="itu-hero-title" class="itu-hero-title text-white text-uppercase mb-3">
                        Education is our <br />
                        <span id="animated-foundation" class="d-inline-flex">foundation.</span>
                    </h1>
                    <p id="itu-hero-subtitle" class="lead text-white mb-3 fs-4 fw-light">
                        Université specialisée en <span class="fw-bold">Informatique.</span>
                    </p>
                    <div id="itu-hero-btn-wrapper" class="d-inline-block mt-3">
                        <a href="/inscription" class="btn-itu btn-itu-vert">
                            <span>Rejoignez-nous</span>
                        </a>
                    </div>

                <?php } ?>

            </div>
        </div>
    </div>
</section>

<!-- CTA Banner Section -->
<section class="itu-cta-banner position-relative" data-section-theme="dark">
    <div class="container py-5 position-relative z-1">
        <div class="row align-items-center reveal">
            <div class="col-lg-8 reveal delay-1">
                <h2 class="cta-title mb-3">Votre Avenir dans l'IT commence ici</h2>
                <p class="cta-text mb-0"><strong>Découvrez plus</strong> sur nos diplômes de <strong>Licence</strong> et
                    <strong>Master.</strong>
                </p>
            </div>

            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="/diplome" class="btn-itu btn-itu-bleu"> Voir les diplomes </a>
            </div>
        </div>
    </div>
</section>

<!-- Options section -->
<section id="options" class="min-vh-100 d-flex flex-column flex-lg-row" data-section-theme="dark">
    <article class="w-100 position-relative d-flex flex-column justify-content-center px-4 px-lg-5 py-5"
        style="flex: 1; background-color: var(--itu-gris); min-height: 50vh">
        <div class="position-relative z-1 reveal">
            <h6 class="text-uppercase fw-bold mb-2" style="color: var(--itu-vert); letter-spacing: 2px">Nos formations
            </h6>
            <h2 class="display-4 fw-bold mb-5 text-white" style="font-family: var(--font-title)">Choisissez
                votre<br />Option</h2>
        </div>

        <div class="position-absolute top-0 start-0 w-100 h-100 z-0 bg-dark">
            <img src="/assets/images/background/option-image.jpg" alt="Image d'illustration des options de formation"
                loading="lazy" class="w-100 h-100" style="object-fit: cover; opacity: 0.6" />
        </div>
    </article>

    <section class="w-100 d-flex flex-column p-0" style="flex: 1">

        <article
            class="itu-article itu-article-bleu w-100 d-flex flex-column justify-content-center p-4 p-lg-5 border-0 text-white "
            style="background-color: var(--itu-bleu); flex: 1">
            <div class="w-100 mx-auto reveal" style="max-width: 500px">

                <header class="w-100 d-flex justify-content-between align-items-center mb-4 ">
                    <h3 class="fw-bold mb-0 text-white text-uppercase">INFORMATIQUE</h3>
                </header>

                <ul class="list-unstyled mb-5 fs-5 itu-list itu-list-vert">
                    <li class="mb-2">Développement</li>
                    <li class="mb-2">Web & Design</li>
                    <li class="mb-2">Réseaux & Base de données</li>
                </ul>

                <a href="/formations/informatique" class="btn-itu btn-itu-vert"> En savoir plus <i
                        class="bi bi-arrow-right ms-2"></i> </a>
            </div>
        </article>

        <article
            class="itu-article itu-article-vert w-100 d-flex flex-column justify-content-center p-4 p-lg-5 border-0"
            style="background-color: var(--itu-gris); flex: 1">
            <div class="w-100 mx-auto reveal" style="max-width: 500px">

                <header class="w-100 d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold mb-0 text-uppercase" style="color: var(--itu-bleu)">DESIGN</h3>
                </header>

                <ul class="list-unstyled mb-5 fs-5 itu-list itu-list-bleu">
                    <li class="mb-2">Design & Communication Digitale</li>
                    <li class="mb-2">Content management & digital marketing</li>
                </ul>

                <a href="/formations/design" class="btn-itu btn-itu-bleu"> En savoir plus <i
                        class="bi bi-arrow-right ms-2"></i> </a>
            </div>
        </article>

    </section>
</section>

<!-- Inscrire Section -->
<section id="inscrire" class="py-5 position-relative overflow-hidden" data-section-theme="light">
    <div class="position-absolute top-0 start-0 w-100 h-100 z-0 pattern"></div>

    <div class="container py-5 my-lg-5 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 reveal delay-1">
                <div class="mb-3">
                    <i class="bi bi-mortarboard-fill" style="font-size: 3rem; color: var(--itu-vert)"></i>
                </div>

                <h2 class="display-5 fw-bold mb-4" style="color: var(--itu-bleu)">Rentrée universitaire <span
                        id="current-year"></span></h2>

                <div class="itu-separator mb-4"></div>

                <p class="fs-4 mb-5" style="color: var(--text-color)">
                    Rejoignez les <strong>meilleurs</strong>,<br />
                    Rejoignez <strong>IT University</strong>
                </p>

                <a href="/faq" class="btn-itu btn-itu-vert"> Comment s'inscrire ? </a>
            </div>

            <div class="col-lg-6 text-center reveal">
                <img src="/assets/images/background/illustration-rentree.png" alt="Illustration Rentrée ITU"
                    loading="lazy" class="img-fluid floating-img" style="max-width: 90%" />
            </div>
        </div>
    </div>
</section>

<!-- Diplome Section -->
<section id="diplome" class="vh-100 position-relative overflow-hidden d-flex align-items-center"
    data-section-theme="dark">
    <div class="position-absolute top-0 start-0 w-100 h-100 z-0 reveal">
        <img src="/assets/images/background/remise_diplome.jpg" alt="Remise de diplôme ITU" class="w-100 h-100"
            loading="lazy" style="object-fit: cover; object-position: center" />

        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(to right, rgba(10, 25, 47, 0.95) 0%, rgba(10, 25, 47, 0.4) 100%)"></div>
    </div>

    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-lg-7 col-xl-6 text-white">
                <h2 class="display-3 fw-bold mb-5 text-white reveal delay-1" style="font-family: var(--font-title)">Vos
                    diplômes<br />reconnus</h2>

                <article class="p-4 p-lg-5 mb-5 reveal">
                    <p class="fs-4 mb-2 text-white opacity-75">L'université offre</p>
                    <h4 class="display-6 fw-bold mb-4"><span style="color: var(--itu-vert)">3 diplômes</span></h4>

                    <ul class="itu-list itu-list-vert mt-5 fs-4 fw-bold text-white">
                        <li>Licence en Informatique</li>
                        <li>Master MBDS</li>
                        <li>Master BIHAR</li>
                    </ul>
                </article>

                <a href="/diplome" class="btn-itu btn-itu-vert reveal"> En Savoir Plus <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Partenaires Section -->
<section id="partenaires" class="py-5" data-section-theme="light">
    <div class="container py-4">
        <h2 class="text-center fw-bold mb-5 text-uppercase reveal" style="color: var(--itu-bleu); letter-spacing: 1px">Nos
            Principaux partenaires</h2>

        <article class="partenaires-slider reveal delay-1">
            <div class="partenaires-track">
                <?php foreach ($partenaires as $partenaire) { ?>
                    <a href="<?= $partenaire['link'] ?>" target="_blank">
                        <img src="/assets/images/partenaires/<?= formatText($partenaire['src']) ?>"
                            alt="<?= formatText($partenaire['alt']) ?>" class="partenaire-logo" loading="lazy" />
                    </a>
                <?php } ?>
                <?php foreach ($partenaires as $partenaire) { ?>
                    <a href="<?= $partenaire['link'] ?>" target="_blank">
                        <img src="/assets/images/partenaires/<?= formatText($partenaire['src']) ?>"
                            alt="<?= formatText($partenaire['alt']) ?>" class="partenaire-logo" loading="lazy" />
                    </a>
                <?php } ?>
            </div>
        </article>
    </div>
</section>