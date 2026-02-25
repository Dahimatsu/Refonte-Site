<section class="hero position-relative min-vh-100 d-flex align-items-center text-start" id="accueil">
    <div id="heroBackground" class="carousel slide carousel-fade position-absolute top-0 start-0 w-100 h-100 z-n1"
        data-bs-ride="carousel" data-bs-pause="false">
        <div class="carousel-inner w-100 h-100">
            <div class="carousel-item active w-100 h-100" data-bs-interval="4000">
                <img src="/assets/images/background/contact-bg-1.jpg" class="d-block w-100 h-100 object-fit-cover"
                    alt="Étudiants en design" loading="lazy" />
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
            </div>
            <div class="carousel-item w-100 h-100" data-bs-interval="4000">
                <img src="/assets/images/background/itu-bg-2.jpeg" class="d-block w-100 h-100 object-fit-cover"
                    alt="Création numérique" loading="lazy" />
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
            </div>
        </div>
    </div>

    <div class="container position-relative z-1 px-4">
        <div class="row">
            <div class="col-lg-8">
                <h1 id="itu-hero-title" class="itu-hero-title text-white text-uppercase mb-3">
                    CONTACTEZ NOUS <br />
                </h1>
                <p id="itu-hero-subtitle" class="lead text-white mb-3 fs-4 fw-light">
                    Une question sur nos parcours ? Notre équipe est là pour vous <span class="fw-bold">guider.</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 min-vh-100" data-section-theme="light">
    <div class="container py-4 py-md-5">
        <div class="row g-5">

            <div class="col-lg-6">
                <form action="#" method="POST" class="itu-brutalist-form">

                    <div class="mb-4">
                        <label for="name" class="form-label fw-bold small text-uppercase"
                            style="color: var(--itu-bleu);">Votre Nom</label>
                        <input type="text" class="form-control rounded-0 p-3" id="name" name="name"
                            placeholder="Ex: Rakoto..." style="border: 2px solid #1a1a1a;" required>
                    </div>

                    <div class="mb-4">
                        <label for="mail" class="form-label fw-bold small text-uppercase"
                            style="color: var(--itu-bleu);">Votre Email</label>
                        <input type="email" class="form-control rounded-0 p-3" id="mail" name="mail"
                            placeholder="votre@email.com" style="border: 2px solid #1a1a1a;" required>
                    </div>

                    <div class="mb-4">
                        <label for="subject" class="form-label fw-bold small text-uppercase"
                            style="color: var(--itu-bleu);">Sujet</label>
                        <input type="text" class="form-control rounded-0 p-3" id="subject" name="subject"
                            placeholder="De quoi souhaitez-vous parler ?" style="border: 2px solid #1a1a1a;" required>
                    </div>

                    <div class="mb-4">
                        <label for="message" class="form-label fw-bold small text-uppercase"
                            style="color: var(--itu-bleu);">Votre Message</label>
                        <textarea class="form-control rounded-0 p-3" id="message" name="message" rows="6"
                            placeholder="Écrivez votre message ici..." style="border: 2px solid #1a1a1a;"
                            required></textarea>
                    </div>

                    <button type="submit" class="btn-itu btn-itu-vert rounded-0 fw-bold px-5 py-3 text-uppercase w-100"
                        style="border: 2px solid #1a1a1a;">
                        Envoyer le message
                    </button>

                </form>
            </div>

            <div class="col-lg-5 offset-lg-1 d-flex flex-column justify-content-center">

                <h2 class="display-5 fw-black text-uppercase mb-5"
                    style="color: var(--itu-bleu); letter-spacing: -1px;">Get In Touch</h2>

                <div class="row g-4 mb-5">
                    <div class="col-sm-6 d-flex align-items-start">
                        <i class="bi bi-telephone-fill fs-2 me-3" style="color: var(--itu-vert);"></i>
                        <div>
                            <h5 class="fw-bold mb-1 fs-6 text-uppercase" style="color: var(--itu-bleu);">Appelez-nous
                            </h5>
                            <div class="d-flex flex-wrap gap-2 mt-1">
                                <a href="tel:+261340530032" class="text-muted text-decoration-none contact-link">034 05
                                    300 32</a>
                                <a href="tel:+261331530040" class="text-muted text-decoration-none contact-link">033 15
                                    300 40</a>
                                <a href="tel:+261320530040" class="text-muted text-decoration-none contact-link">032 05
                                    300 40</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex align-items-start">
                        <i class="bi bi-envelope-fill fs-2 me-3" style="color: var(--itu-vert);"></i>
                        <div>
                            <h5 class="fw-bold mb-1 fs-6 text-uppercase" style="color: var(--itu-bleu);">Email</h5>
                            <a href="mailto:contact@ituniversity-mg.com"
                                class="text-muted text-decoration-none">ituniversity@moov.mg</a>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex align-items-start">
                        <i class="bi bi-globe fs-2 me-3" style="color: var(--itu-vert);"></i>
                        <div>
                            <h5 class="fw-bold mb-1 fs-6 text-uppercase" style="color: var(--itu-bleu);">Site Web</h5>
                            <a href="/" class="text-muted text-decoration-none">www.ituniversity.mg</a>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex align-items-start">
                        <i class="bi bi-geo-alt-fill fs-2 me-3" style="color: var(--itu-vert);"></i>
                        <div>
                            <h5 class="fw-bold mb-1 fs-6 text-uppercase" style="color: var(--itu-bleu);">Adresse</h5>
                            <span class="text-muted">Andoharanofotsy, Antananarivo</span>
                        </div>
                    </div>
                </div>

                <div>
                    <h5 class="fw-bold mb-3 fs-6 text-uppercase" style="color: var(--itu-bleu);">Suivez-nous</h5>
                    <div class="d-flex gap-2">
                        <a href="https://www.facebook.com/profile.php?id=100064841042452" target="_blank"
                            rel="noopener noreferrer"
                            class="btn btn-outline-dark rounded-0 d-flex align-items-center justify-content-center"
                            style="width: 45px; height: 45px; border-width: 2px;">
                            <i class="bi bi-facebook fs-5"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/it-university-mg" target="_blank"
                            rel="noopener noreferrer"
                            class="btn btn-outline-dark rounded-0 d-flex align-items-center justify-content-center"
                            style="width: 45px; height: 45px; border-width: 2px;">
                            <i class="bi bi-linkedin fs-5"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="w-100" style="height: 450px;" data-section-theme="light">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2667.7562120075854!2d47.53325332967746!3d-18.98545272551033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07bf95431f83d%3A0x7edb4de9ebd72707!2sIT%20University!5e0!3m2!1sfr!2smg!4v1772011413923!5m2!1sfr!2smg"
        width="100%" height="100%" style="border:0; filter: grayscale(20%);" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>