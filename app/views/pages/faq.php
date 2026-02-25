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
                    Foire aux Questions<br />
                </h1>
                <p id="itu-hero-subtitle" class="lead text-white mb-3 fs-4 fw-light">
                    Voici les questions les plus <span class="fw-bold">posées.</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color: var(--itu-gris);">
    <div class="container py-5">

        <header class="text-start mb-5 border-bottom border-dark border-3 pb-3">
            <h2 class="display-4 fw-black text-uppercase mb-0"
                style="letter-spacing: -2px; font-weight: 900; color: var(--itu-bleu);">
                Informations Pratiques
            </h2>
        </header>

        <div class="accordion" id="faqAccordion">

            <div class="card rounded-0 mb-4 bg-white itu-brutalist-card" style="border: 2px solid #1a1a1a;">
                <div class="card-header bg-white border-0 p-0">
                    <button
                        class="btn w-100 text-start p-4 fw-bold fs-4 d-flex justify-content-between align-items-center rounded-0 shadow-none text-dark text-uppercase"
                        type="button" data-bs-toggle="collapse" data-bs-target="#qStudy" aria-expanded="true"
                        style="letter-spacing: -1px;">
                        <span>Comment étudier à l’IT University ?</span>
                        <i class="bi bi-chevron-down fs-3" style="color: var(--itu-vert);"></i>
                    </button>
                </div>
                <div id="qStudy" class="collapse show" data-bs-parent="#faqAccordion">
                    <div class="card-body p-4 p-lg-5 border-top border-dark" style="border-width: 2px !important;">
                        <p class="fs-5 mb-4 text-dark">
                            L’entrée se fait par sélection de dossier. Il n’y a pas de restriction sur l’année
                            d’obtention du bacc.
                        </p>
                        <div class="row g-4 font-monospace">
                            <div class="col-md-6">
                                <h5 class="fw-bold mb-3 text-uppercase" style="color: var(--itu-vert);">Série
                                    Scientifique / Technique</h5>
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-start mb-2"><span class="fw-bold me-2"
                                            style="color: var(--itu-bleu);">>_</span>Développement</li>
                                    <li class="d-flex align-items-start mb-2"><span class="fw-bold me-2"
                                            style="color: var(--itu-bleu);">>_</span>Web et Design</li>
                                    <li class="d-flex align-items-start"><span class="fw-bold me-2"
                                            style="color: var(--itu-bleu);">>_</span>Réseaux et BD</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5 class="fw-bold mb-3 text-uppercase" style="color: var(--itu-vert);">Toutes Séries
                                </h5>
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-start mb-2"><span class="fw-bold me-2"
                                            style="color: var(--itu-bleu);">>_</span>Design Digital</li>
                                    <li class="d-flex align-items-start"><span class="fw-bold me-2"
                                            style="color: var(--itu-bleu);">>_</span>Content Marketing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card rounded-0 mb-4 bg-white itu-brutalist-card" style="border: 2px solid #1a1a1a;">
                <div class="card-header bg-white border-0 p-0">
                    <button
                        class="btn w-100 text-start p-4 fw-bold fs-4 d-flex justify-content-between align-items-center rounded-0 shadow-none text-dark text-uppercase collapsed"
                        type="button" data-bs-toggle="collapse" data-bs-target="#qDossiers" aria-expanded="false"
                        style="letter-spacing: -1px;">
                        <span>Quels sont les dossiers à préparer ?</span>
                        <i class="bi bi-chevron-down fs-3" style="color: var(--itu-vert);"></i>
                    </button>
                </div>
                <div id="qDossiers" class="collapse" data-bs-parent="#faqAccordion">
                    <div class="card-body p-4 p-lg-5 border-top border-dark" style="border-width: 2px !important;">
                        <p class="fs-5 mb-4 text-dark">
                            Liste des dossiers pour L1 (dépôt possible avant les résultats du Bacc) :
                        </p>
                        <div class="row g-4 font-monospace">
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-start mb-2"><span class="fw-bold me-2"
                                            style="color: var(--itu-bleu);">>_</span>Formulaire de dépôt</li>
                                    <li class="d-flex align-items-start mb-2"><span class="fw-bold me-2"
                                            style="color: var(--itu-bleu);">>_</span>Bulletin de naissance ou CIN</li>
                                    <li class="d-flex align-items-start mb-2"><span class="fw-bold me-2"
                                            style="color: var(--itu-bleu);">>_</span>Certificat de résidence (-3 mois)
                                    </li>
                                    <li class="d-flex align-items-start"><span class="fw-bold me-2"
                                            style="color: var(--itu-bleu);">>_</span>1 photo d'identité</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-start mb-2"><span class="fw-bold me-2"
                                            style="color: var(--itu-bleu);">>_</span>Relevé Bacc + Notes Terminales</li>
                                    <li class="d-flex align-items-start mb-2"><span class="fw-bold me-2"
                                            style="color: var(--itu-bleu);">>_</span>Lettre de motivation</li>
                                    <li class="d-flex align-items-start mb-2"><span class="fw-bold me-2"
                                            style="color: var(--itu-bleu);">>_</span>Chemise cartonnée</li>
                                    <li class="d-flex align-items-start"><span class="fw-bold me-2"
                                            style="color: var(--itu-bleu);">>_</span>Droit de dépôt (15 000 Ar)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card rounded-0 mb-4 bg-white itu-brutalist-card" style="border: 2px solid #1a1a1a;">
                <div class="card-header bg-white border-0 p-0">
                    <button
                        class="btn w-100 text-start p-4 fw-bold fs-4 d-flex justify-content-between align-items-center rounded-0 shadow-none text-dark text-uppercase collapsed"
                        type="button" data-bs-toggle="collapse" data-bs-target="#qDates" aria-expanded="false"
                        style="letter-spacing: -1px;">
                        <span>Quelle est la date limite de dépôt ?</span>
                        <i class="bi bi-chevron-down fs-3" style="color: var(--itu-vert);"></i>
                    </button>
                </div>
                <div id="qDates" class="collapse" data-bs-parent="#faqAccordion">
                    <div class="card-body p-4 p-lg-5 border-top border-dark font-monospace"
                        style="border-width: 2px !important;">
                        <p class="fs-5 text-dark">
                            La date limite de dépôt est généralement fixée à la fin du mois de septembre, quelques jours après la publication des résultats du Bacc. Nous vous recommandons de suivre nos réseaux sociaux pour les annonces officielles.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card rounded-0 mb-4 bg-white itu-brutalist-card" style="border: 2px solid #1a1a1a;">
                <div class="card-header bg-white border-0 p-0">
                    <button
                        class="btn w-100 text-start p-4 fw-bold fs-4 d-flex justify-content-between align-items-center rounded-0 shadow-none text-dark text-uppercase collapsed"
                        type="button" data-bs-toggle="collapse" data-bs-target="#qAdmis" aria-expanded="false"
                        style="letter-spacing: -1px;">
                        <span>Où et quand voir la liste des admis ?</span>
                        <i class="bi bi-chevron-down fs-3" style="color: var(--itu-vert);"></i>
                    </button>
                </div>
                <div id="qAdmis" class="collapse" data-bs-parent="#faqAccordion">
                    <div class="card-body p-4 p-lg-5 border-top border-dark" style="border-width: 2px !important;">
                        <p class="fs-5 text-dark">
                            Disponible sur ce site et au campus (Andoharanofotsy). La date sera communiquée quelques jours après la clôture des dépôts alors suivez-nous.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card rounded-0 mb-4 bg-white itu-brutalist-card" style="border: 2px solid #1a1a1a;">
                <div class="card-header bg-white border-0 p-0">
                    <button
                        class="btn w-100 text-start p-4 fw-bold fs-4 d-flex justify-content-between align-items-center rounded-0 shadow-none text-dark text-uppercase collapsed"
                        type="button" data-bs-toggle="collapse" data-bs-target="#qDiplomes" aria-expanded="false"
                        style="letter-spacing: -1px;">
                        <span>Quels sont les diplômes délivrés ?</span>
                        <i class="bi bi-chevron-down fs-3" style="color: var(--itu-vert);"></i>
                    </button>
                </div>
                <div id="qDiplomes" class="collapse" data-bs-parent="#faqAccordion">
                    <div class="card-body p-4 p-lg-5 border-top border-dark" style="border-width: 2px !important;">
                        <p class="fs-5 mb-4 text-dark">
                            IT University adopte le système <strong>LMD</strong> avec des Licences (3 ans) et des Master
                            2 :
                        </p>
                        <div class="row g-4 font-monospace mb-4">
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-start mb-2"><span class="fw-bold me-2"
                                            style="color: var(--itu-vert);">>_</span>Développement d’applications</li>
                                    <li class="d-flex align-items-start mb-2"><span class="fw-bold me-2"
                                            style="color: var(--itu-vert);">>_</span>Base de données et Réseaux</li>
                                    <li class="d-flex align-items-start"><span class="fw-bold me-2"
                                            style="color: var(--itu-vert);">>_</span>Web Intégration</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-start mb-2"><span class="fw-bold me-2"
                                            style="color: var(--itu-vert);">>_</span>Design & Communication</li>
                                    <li class="d-flex align-items-start"><span class="fw-bold me-2"
                                            style="color: var(--itu-vert);">>_</span>Content Management</li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-3 bg-light font-monospace d-flex align-items-center"
                            style="border: 2px solid #1a1a1a;">
                            <span class="fw-bold me-3 fs-5" style="color: var(--itu-bleu);">>_</span>
                            <span class="small text-dark"><strong>Master 2 MBDS :</strong> En collaboration avec
                                l’Université de Nice Sophia Antipolis et l’ESTIA.</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="row g-5">

            <div class="col-lg-6">
                <article class="p-4 p-lg-5 h-100 rounded-0 itu-brutalist-card d-flex flex-column"
                    style="border: 2px solid #1a1a1a; background-color: #f8fcfb;">
                    <div class="mb-4 pb-3 border-bottom border-dark border-2 d-flex align-items-center">
                        <i class="bi bi-geo-alt-fill fs-1 me-3" style="color: var(--itu-bleu);"></i>
                        <h3 class="fw-black text-uppercase mb-0" style="letter-spacing: -1px; color: #1a1a1a;">
                            Localisation</h3>
                    </div>
                    <p class="fs-5 text-dark mb-4 flex-grow-1">
                        L’IT University se situe à <strong>Andoharanofotsy</strong>, entre la banque BNI et la station
                        GALANA.
                    </p>
                    <a href="https://maps.app.goo.gl/7LMyT1Mq9JZx8YYg7 Quels" target="_blank" rel="noopener noreferrer"
                        class="btn btn-itu-vert rounded-0 fw-bold px-4 py-3 text-uppercase align-self-start"
                        style="border: 2px solid #1a1a1a;">
                        <i class="bi bi-map-fill me-2"></i> Ouvrir Maps
                    </a>
                </article>
            </div>

            <div class="col-lg-6">
                <article class="p-4 p-lg-5 h-100 rounded-0 itu-brutalist-card d-flex flex-column"
                    style="border: 2px solid #1a1a1a; background-color: #f8fcfb;">
                    <div class="mb-4 pb-3 border-bottom border-dark border-2 d-flex align-items-center">
                        <i class="bi bi-clock-fill fs-1 me-3" style="color: var(--itu-vert);"></i>
                        <h3 class="fw-black text-uppercase mb-0" style="letter-spacing: -1px; color: #1a1a1a;">Horaires
                        </h3>
                    </div>
                    <div class="d-flex align-items-center flex-grow-1 mt-2">
                        <div class="font-monospace">
                            <p class="display-3 fw-black mb-0" style="color: var(--itu-bleu); letter-spacing: -2px;">
                                08h<span class="fs-2 text-muted mx-2">-</span>17h</p>
                            <p class="text-dark fw-bold fs-5 mt-2 mb-0">>_ Avec une pause à midi</p>
                        </div>
                    </div>
                </article>
            </div>

        </div>
    </div>
</section>

<section class="py-5" style="background-color: var(--itu-bleu);">
    <div class="container py-5 text-center position-relative z-1">
        <h2 class="display-5 fw-black text-white text-uppercase mb-4" style="letter-spacing: -1px;">
            Vous n'avez pas trouvé ce que vous cherchez ?
        </h2>
        <p class="lead text-white-50 mb-5 mx-auto" style="max-width: 600px;">
            N'hésitez pas à nous envoyer un message directement ou à nous appeler. Notre équipe est là pour vous
            répondre !
        </p>
        <a href="/contact" class="btn-itu btn-itu-vert rounded-0 fw-bold px-5 py-3 text-uppercase fs-5"
            style="border: 2px solid #1a1a1a; box-shadow: 6px 6px 0px #1a1a1a;">
            <i class="bi bi-send-fill me-2"></i> Contactez-nous
        </a>
    </div>
</section>