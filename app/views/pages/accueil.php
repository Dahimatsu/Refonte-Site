<?php
$partenaires = [
    ['src' => 'republique.png', 'alt' => 'République de Madagascar'],
    ['src' => 'mesupres.png', 'alt' => 'MESUPRES'],
    ['src' => 'mndpt.png', 'alt' => 'MNDPT'],
    ['src' => 'pamff.png', 'alt' => 'PAMFF'],
    ['src' => 'axian.png', 'alt' => 'Groupe Axian'],
    ['src' => 'bred.png', 'alt' => 'BRED Banque Populaire'],
    ['src' => 'accessbanque.png', 'alt' => 'AccessBanque Madagascar'],
    ['src' => 'bassan.png', 'alt' => 'Groupe Bassan'],
    ['src' => 'qdata.png', 'alt' => 'Q-Data'],
    ['src' => 'softwell.png', 'alt' => 'Softwell'],
    ['src' => 'asisten.png', 'alt' => 'Asisten'],
    ['src' => 'sioka.png', 'alt' => 'Sioka'],
    ['src' => 'fthm.png', 'alt' => 'FTHM Consulting'],
    ['src' => 'yas.png', 'alt' => 'Yas Madagascar']
];
?>
<!-- Hero Section -->
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
                    Education is our <br />
                    <span id="animated-foundation" class="d-inline-flex">foundation.</span>
                </h1>
                <p id="itu-hero-subtitle" class="lead text-white mb-3 fs-4 fw-light">Université specialisée en <span
                        class="fw-bold">Informatique.</span></p>

                <div id="itu-hero-btn-wrapper" class="d-inline-block">
                    <a href="#inscrire" class="btn-itu btn-itu-vert">
                        <span>Rejoignez-nous</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Banner Section -->
<section class="itu-cta-banner position-relative" data-section-theme="dark">
    <div class="container py-5 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="cta-title mb-3">Votre Avenir dans l'IT commence ici</h2>
                <p class="cta-text mb-0"><strong>Découvrez plus</strong> sur nos diplômes de <strong>Licence</strong> et
                    <strong>Master.</strong></p>
            </div>

            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="#parcours" class="btn-itu btn-itu-bleu"> Voir les parcours </a>
            </div>
        </div>
    </div>
</section>

<!-- Options section -->
<section id="options" class="min-vh-100 d-flex flex-column flex-lg-row" data-section-theme="dark">
    <article class="w-100 position-relative d-flex flex-column justify-content-center px-4 px-lg-5 py-5"
        style="flex: 1; background-color: var(--itu-gris); min-height: 50vh">
        <div class="position-relative z-1">
            <h6 class="text-uppercase fw-bold mb-2" style="color: var(--itu-vert); letter-spacing: 2px">Nos formations
            </h6>
            <h2 class="display-4 fw-bold mb-5 text-white" style="font-family: var(--font-title)">Choisissez
                votre<br />Option</h2>
            <a href="/formation" class="btn-itu btn-itu-bleu"> Voir plus en détails <i
                    class="bi bi-arrow-right ms-2"></i> </a>
        </div>

        <div class="position-absolute top-0 start-0 w-100 h-100 z-0 bg-dark">
            <img src="../assets/images/option-image.jpg" alt="Image d'illustration des options de formation"
                loading="lazy" class="w-100 h-100" style="object-fit: cover; opacity: 0.6" />
        </div>
    </article>

    <article class="w-100 d-flex flex-column p-0" style="flex: 1">
        <article
            class="itu-article itu-article-bleu w-100 d-flex flex-column justify-content-center p-4 p-lg-5 border-0 text-white"
            style="background-color: var(--itu-bleu); flex: 1">
            <div class="w-100 mx-auto" style="max-width: 500px">
                <h3 class="fw-bold mb-4 text-white text-uppercase">INFORMATIQUE</h3>

                <ul class="list-unstyled mb-4 fs-5 itu-list itu-list-vert">
                    <li>Développement</li>
                    <li>Web & Design</li>
                    <li>Réseaux & Base de données</li>
                </ul>

                <div class="mt-2">
                    <span class="itu-badge itu-badge-vert py-2 px-3 fs-6 fw-bold text-uppercase">Série
                        scientifique</span>
                </div>
            </div>
        </article>

        <article
            class="itu-article itu-article-vert w-100 d-flex flex-column justify-content-center p-4 p-lg-5 border-0">
            <div class="w-100 mx-auto" style="max-width: 500px">
                <h3 class="fw-bold mb-4 text-uppercase" style="color: var(--itu-bleu)">DESIGN</h3>

                <ul class="list-unstyled mb-4 fs-5 itu-list itu-list-bleu">
                    <li>Design & Communication Digitale</li>
                    <li>Content management & digital marketing</li>
                </ul>

                <div class="mt-2">
                    <span class="itu-badge itu-badge-bleu py-2 px-3 fs-6 fw-bold text-uppercase">Toutes séries</span>
                </div>
            </div>
        </article>
    </article>
</section>

<!-- Inscrire Section -->
<section id="inscrire" class="py-5 position-relative overflow-hidden" data-section-theme="light">
    <div class="position-absolute top-0 start-0 w-100 h-100 z-0 pattern"></div>

    <div class="container py-5 my-lg-5 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="mb-3">
                    <i class="bi bi-mortarboard-fill" style="font-size: 3rem; color: var(--itu-vert)"></i>
                </div>

                <h2 class="display-5 fw-bold mb-4" style="color: var(--itu-bleu)">Rentrée universitaire 2026</h2>

                <div class="itu-separator mb-4"></div>

                <p class="fs-4 mb-5" style="color: var(--text-color)">
                    Rejoignez les <strong>meilleurs</strong>,<br />
                    Rejoignez <strong>IT University</strong>
                </p>

                <a href="/faq" class="btn-itu btn-itu-vert"> Comment s'inscrire ? </a>
            </div>

            <div class="col-lg-6 text-center">
                <img src="../assets/images/illustration-rentree.png" alt="Illustration Rentrée ITU" loading="lazy"
                    class="img-fluid floating-img" style="max-width: 90%" />
            </div>
        </div>
    </div>
</section>

<!-- Diplome Section -->
<section id="diplome" class="vh-100 position-relative overflow-hidden d-flex align-items-center"
    data-section-theme="dark">
    <div class="position-absolute top-0 start-0 w-100 h-100 z-0">
        <img src="../assets/images/remise_diplome.jpg" alt="Remise de diplôme ITU" class="w-100 h-100" loading="lazy"
            style="object-fit: cover; object-position: center" />

        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(to right, rgba(10, 25, 47, 0.95) 0%, rgba(10, 25, 47, 0.4) 100%)"></div>
    </div>

    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-lg-7 col-xl-6 text-white">
                <h6 class="text-uppercase fw-bold mb-3" style="color: var(--itu-vert); letter-spacing: 2px">
                    L'aboutissement</h6>
                <h2 class="display-3 fw-bold mb-5 text-white" style="font-family: var(--font-title)">Vos
                    diplômes<br />reconnus</h2>

                <article class="p-4 p-lg-5 mb-5">
                    <p class="fs-4 mb-2 text-white opacity-75">L'université offre</p>
                    <h4 class="display-6 fw-bold mb-4"><span style="color: var(--itu-vert)">3 diplômes</span></h4>

                    <ul class="itu-list itu-list-vert mt-5 fs-4 fw-bold text-white">
                        <li>Licence en Informatique</li>
                        <li>Master MBDS</li>
                        <li>Master BIHAR</li>
                    </ul>
                </article>

                <a href="/diplome" class="btn-itu btn-itu-vert"> En Savoir Plus <i
                        class="bi bi-arrow-right ms-2"></i> </a>
            </div>
        </div>
    </div>
</section>

<!-- Partenaires Section -->
<section id="partenaires" class="py-5" data-section-theme="light">
    <div class="container py-4">
        <h2 class="text-center fw-bold mb-5 text-uppercase" style="color: var(--itu-bleu); letter-spacing: 1px">Nos
            Principaux partenaires</h2>

        <article class="partenaires-slider">
            <div class="partenaires-track">
                <?php foreach ($partenaires as $partenaire) { ?>
                    <img src="/assets/images/partenaires/<?= formatText($partenaire['src']) ?>" alt="<?= formatText($partenaire['alt']) ?>"
                        class="partenaire-logo" loading="lazy" />
                <?php } ?>
                <?php foreach ($partenaires as $partenaire) { ?>
                    <img src="/assets/images/partenaires/<?= formatText($partenaire['src']) ?>" alt="<?= formatText($partenaire['alt']) ?>"
                        class="partenaire-logo" loading="lazy" />
                <?php } ?>
            </div>
        </article>
    </div>
</section>