<?php
$page ??= 'accueil';
$title ??= 'Université spécialisée en informatique';
$description ??= 'IT University est un établissement d’enseignement supérieur privé en informatique créé en 2011,qui a ppour principal objectif de former les futurs professionnels dans les métiers des nouvelles technologies de l’information et de la communication.';

$cspNonce = Flight::get('csp_nonce');

$navlinks = [
    ['label' => 'Accueil', 'href' => '/'],
    ['label' => 'Parcours', 'href' => '/formation'],
    ['label' => 'Diplômes', 'href' => '/diplome'],
    ['label' => 'MBDS', 'href' => '/mbds'],
    ['label' => 'FAQ', 'href' => '/faq'],
    ['label' => 'Contact', 'href' => '/contact'],
];
?>
<!doctype html>
<html lang="fr" data-bs-theme="light">
    <head>
        <meta charset="UTF-8" />
        <!-- Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="<?= $description ?>" />
        <meta name="author" content="Binary Beasts" />
        <meta name="keywords" content="université, informatique, design, Madagascar, Antananarivo, Andoharanofotsy, master, licence, développement web, technologie" />
        <meta name="robots" content="index, follow" />
        <meta http-equiv="content-language" content="fr" />
        <!-- Property -->
        <meta property="og:title" content="IT University - <?= $title ?>" />
        <meta property="og:description" content="<?= $description ?>" />
        <meta property="og:image" content="https://nom-de-domaine.mg/assets/images/remise_diplome.jpg" />
        <meta property="og:url" content="https://nom-de-domaine.mg" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="fr_FR" />
        <!-- Titre -->
        <title>IT University - <?= $title ?></title>
        <!-- Link -->
        <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/assets/bootstrap/font/bootstrap-icons.min.css" />
        <link rel="stylesheet" href="/assets/css/typography.css" />
        <link rel="stylesheet" href="/assets/css/style.css" />
        <link rel="stylesheet" href="/assets/css/theme.css" />
        <link rel="stylesheet" href="/assets/css/animate.min.css" />
        <!-- Scripts -->
        <script src="/assets/scripts/theme-toggle.js" defer nonce="<?= formatText($cspNonce) ?>"></script>
        <script src="/assets/scripts/anime.min.js" defer nonce="<?= formatText($cspNonce) ?>"></script>
        <script src="/assets/scripts/scripts.js" defer nonce="<?= formatText($cspNonce) ?>"></script>
        <?php if ($page === 'accueil') { ?>
            <script src="/assets/scripts/animation-home.js" defer nonce="<?= formatText($cspNonce) ?>"></script>
        <?php } else { ?>
            <script src="/assets/scripts/animation-page.js" defer nonce="<?= formatText($cspNonce) ?>"></script>
        <?php } ?>
        <script src="/assets/bootstrap/js/bootstrap.bundle.min.js" defer nonce="<?= formatText($cspNonce) ?>"></script>
    </head>

    <body class="no-scroll">
        <?php if($page === 'accueil') { ?>
            <!-- PRELOADER -->
            <div id="preloader" class="d-flex flex-column justify-content-center align-items-center vh-100 w-100 position-fixed top-0 start-0 z-3">
                <img src="/assets/images/logo/logo_semi-negatif.png" alt="Logo IT University" id="preloader-logo" loading="lazy" class="itu-logo"/>
            </div>
        <?php } ?>

        <!-- Header -->
        <header class="fixed-top transition-header" id="main-header" style="opacity: 0">
            <nav class="navbar navbar-expand-lg itu-navbar py-3">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/accueil">
                        <img src="/assets/images/logo/logo_semi-negatif.png" alt="IT University" height="40" id="navbar-logo" />
                    </a>

                    <div class="d-flex align-items-center gap-2 gap-sm-3 ms-auto ms-lg-0">
                        <button id="theme-toggle" class="btn btn-sm d-flex align-items-center justify-content-center mx-2 text-white" style="width: 38px; height: 38px; flex-shrink: 0" aria-label="Changer de thème">
                            <i id="theme-icon" class="bi bi-moon-fill fs-5"></i>
                        </button>

                        <button class="btn border-0 p-1 ms-1 text-white d-flex justify-content-center align-items-center gap-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#ituOffcanvas" aria-controls="ituOffcanvas" title="Menu">
                            <i class="bi bi-list fs-5"></i>
                        </button>
                    </div>
                </div>
            </nav>
            <svg class="d-none"></svg>
        </header>

        <!-- Off-canvas -->
        <div class="offcanvas offcanvas-end itu-offcanvas" tabindex="-1" id="ituOffcanvas" aria-labelledby="ituOffcanvasLabel">
            <div class="offcanvas-header p-4 p-lg-5">
                <button type="button" class="btn border-0 d-flex align-items-center p-0" data-bs-dismiss="offcanvas" aria-label="Fermer">
                    <span class="fw-bold me-2"><i class="bi bi-arrow-right fs-5"></i></span>
                </button>
            </div>

            <div class="offcanvas-body d-flex flex-column justify-content-center px-4 px-lg-5">
                <nav class="nav flex-column itu-big-menu">
                    <?php foreach ($navlinks as $link) { ?>
                        <a class="nav-link" href="<?= $link['href'] ?>">
                            <?= $link['label'] ?>
                        </a>
                    <?php } ?>
                </nav>

                <div class="mt-auto pt-5 d-flex justify-content-between align-items-end text-muted">
                    <div>
                        <span class="d-block text-uppercase small mb-1">IT University</span>
                        <a href="mailto:ituniversity@moov.mg" class="text-decoration-none text-uppercase">ituniversity@moov.mg</a>
                    </div>
                    <div>
                        <a href="https://www.linkedin.com/company/it-university-mg" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-uppercase small">LINKEDIN</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <main>
            <?php require __DIR__ . '/pages/' . $page . '.php'; ?>
        </main>
        <!-- Footer -->
        <footer class="itu-footer text-white pt-5" data-section-theme="dark">
            <section class="container py-5">
                <div class="row gy-5">
                    <section class="col-lg-6 pe-lg-5">
                        <h4 class="text-uppercase mb-2" style="color: var(--itu-vert); font-family: var(--font-title); font-style: italic">Rejoignez-nous</h4>
                        <h2 class="display-4 fw-bold mb-4 text-uppercase footer-subtitle" style="font-family: var(--font-title); line-height: 1.1">Votre carrière<br />commence ici</h2>

                        <div class="d-flex flex-wrap gap-3 mb-5">
                            <a href="faq.html" class="btn-itu btn-itu-vert py-2 px-4 fs-6">S'inscrire</a>
                        </div>

                        <div class="d-flex gap-4 mb-4 fs-4">
                            <a href="https://www.facebook.com/profile.php?id=100064841042452" target="_blank" rel="noopener noreferrer" class="social-link" title="Facebook" aria-label="Visitez notre page Facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.linkedin.com/company/it-university-mg" target="_blank" rel="noopener noreferrer" class="social-link" title="LinkedIn" aria-label="Visitez notre page LinkedIn"><i class="bi bi-linkedin"></i></a>
                        </div>

                        <article class="mt-4">
                            <div class="d-flex align-items-start mb-3">
                                <i class="bi bi-telephone fs-5 me-3 mt-1" style="color: var(--itu-vert)"></i>

                                <div class="fs-5 d-flex flex-wrap gap-2">
                                    <a href="tel:+261340530032" class="text-decoration-none contact-link">034 05 300 32</a>
                                    <span class="text-secondary"> - </span>
                                    <a href="tel:+261331530040" class="text-decoration-none contact-link">033 15 300 40</a>
                                    <span class="text-secondary"> - </span>
                                    <a href="tel:+261320530040" class="text-decoration-none contact-link">032 05 300 40</a>
                                </div>
                            </div>
                            <a href="mailto:ituniversity@moov.mg" class="d-flex align-items-center mb-3 text-decoration-none contact-link">
                                <i class="bi bi-envelope fs-5 me-3" style="color: var(--itu-vert)"></i>
                                <span class="fs-5">ituniversity@moov.mg</span>
                            </a>
                            <a href="https://maps.google.com/?cid=9140985535758018311&g_mp=Cidnb29nbGUubWFwcy5wbGFjZXMudjEuUGxhY2VzLlNlYXJjaFRleHQ" target="_blank" rel="noopener noreferrer" class="d-flex align-items-center mb-3 text-decoration-none contact-link">
                                <i class="bi bi-geo-alt-fill fs-5 me-3" style="color: var(--itu-vert)"></i>
                                <span class="fs-5">Andoharanofotsy, Antananarivo</span>
                            </a>
                        </article>
                    </section>

                    <nav class="col-lg-3 mt-lg-5 pt-lg-4" aria-label="Liens rapides du pied de page">
                        <h5 class="fw-bold mb-4 fs-4" style="color: var(--itu-vert)">Découvrir</h5>
                        <ul class="list-unstyled footer-links">
                            <li class="mb-3"><a href="#">Vos Diplômes</a></li>
                            <li class="mb-3"><a href="#">Étudier avec nous</a></li>
                            <li class="mb-3"><a href="#">Votre carrière</a></li>
                            <li class="mb-3"><a href="#">Admissions</a></li>
                            <li class="mb-3"><a href="#">Portes Ouvertes</a></li>
                            <li class="mb-3"><a href="#">Campus</a></li>
                            <li class="mb-3"><a href="#">À propos de nous</a></li>
                            <li class="mb-3"><a href="#">Espace Étudiant</a></li>
                        </ul>
                    </nav>

                    <section class="col-lg-3 mt-lg-5 pt-lg-4">
                        <h5 class="fw-bold mb-4 fs-4" style="color: var(--itu-vert)">Newsletter</h5>
                        <p class="text-white opacity-75 mb-4">Restez informé des actualités et des prochaines admissions de l'université.</p>

                        <form action="#" method="POST" class="newsletter-form">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control bg-transparent text-white border-secondary" placeholder="Votre email" aria-label="Votre email" required style="border-radius: 0; border-right: none" />
                                <button class="btn btn-itu-vert" type="submit" style="border-radius: 0; padding: 10px 20px" title="Envoyer" aria-label="Envoyer">
                                    <i class="bi bi-send-fill"></i>
                                </button>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="newsletterCheck" required />
                                <label class="form-check-label text-white opacity-50 small" for="newsletterCheck" style="font-size: 0.75rem"> J'accepte de recevoir des actualités de l'ITU. </label>
                            </div>
                        </form>
                    </section>
                </div>
            </section>

            <section class="footer-bottom py-4 mt-4" style="background-color: #080808; border-top: 1px solid rgba(255, 255, 255, 0.05)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            <span style="font-size: 0.85rem; color: #888">&copy; <span id="current-year"></span> IT University. Tous droits réservés.</span>
                        </div>

                        <div class="col-md-6 text-center text-md-end">
                            <span style="font-size: 0.85rem; color: #888">Conçu par <span class="fw-bold text-white">Binary Beasts</span></span>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <button id="scrollToTopBtn" class="btn-itu-top" title="Retour en haut" style="opacity: 0" aria-label="Retour en haut">
            <i class="bi bi-chevron-up"></i>
        </button>
        <div id="scroll-indicator-wrapper" class="scroll-indicator-wrapper d-none d-lg-block" style="opacity: 0">
            <div class="scroll-track">
                <div class="scroll-tick" style="top: 0%"></div>
                <div class="scroll-tick" style="top: 25%"></div>
                <div class="scroll-tick" style="top: 50%"></div>
                <div class="scroll-tick" style="top: 75%"></div>
                <div class="scroll-tick" style="top: 100%"></div>

                <div class="scroll-fill" id="scroll-fill"></div>

                <div class="scroll-dot" id="scroll-dot"></div>
            </div>
        </div>
        <script nonce="<?= formatText($cspNonce) ?>">
            // Masquer immédiatement le preloader si déjà visité
            (function() {
                var preloader = document.getElementById('preloader');
                if (localStorage.getItem('hasVisited')) {
                    if (preloader) preloader.style.display = 'none';
                    document.body.classList.remove('no-scroll');
                }
            })();
        </script>
    </body>
</html>
