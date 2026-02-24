<section class="itu-contact-hero py-5 bg-white " style="background-color: var(--bg-color);" data-section-theme="light">
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="fw-bold text-uppercase mb-3" style="color: var(--itu-bleu);">Contactez-nous</h1>
                <p class="lead text-muted">Une question sur nos formations ? Notre équipe vous répond dans les plus brefs délais.</p>
                <hr class="mx-auto" style="width: 50px; height: 3px; background-color: var(--itu-vert); opacity: 1;">
            </div>
        </div>
    </div>
</section>

<section class="itu-contact-form-section pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="p-4 p-md-5 shadow-sm border-0 rounded-0">
                    <form action="#" method="POST">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-bold small text-uppercase" style="color: var(--itu-bleu);">Nom</label>
                                <input type="text" class="form-control rounded-0 border-0 border-bottom bg-light" id="name" name="name" placeholder="Votre nom" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="mail" class="form-label fw-bold small text-uppercase" style="color: var(--itu-bleu);">Email</label>
                                <input type="email" class="form-control rounded-0 border-0 border-bottom bg-light" id="mail" name="mail" placeholder="votre@email.com" required>
                            </div>

                            <div class="col-md-6">
                                <label for="phone" class="form-label fw-bold small text-uppercase" style="color: var(--itu-bleu);">Téléphone</label>
                                <input type="tel" class="form-control rounded-0 border-0 border-bottom bg-light" id="phone" name="phone" placeholder="+261 ... (Optionel)">
                            </div>

                            <div class="col-md-6">
                                <label for="order" class="form-label fw-bold small text-uppercase" style="color: var(--itu-bleu);">Formation d'intérêt</label>
                                <input type="text" class="form-control rounded-0 border-0 border-bottom bg-light" id="order" name="order" placeholder="Ex: Informatique (Optionel)">
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label fw-bold small text-uppercase" style="color: var(--itu-bleu);">Message*</label>
                                <textarea class="form-control rounded-0 border-0 border-bottom bg-light" id="message" name="message" rows="5" placeholder="Comment pouvons-nous vous aider ?" required></textarea>
                            </div>

                            <input type="hidden" name="form-name" value="contact">
                            
                            <div class="col-12 mt-4 text-center">
                                <button type="submit" class="btn btn-itu btn-itu-vert rounded-0 fw-bold px-5 py-3 text-uppercase border-0 shadow-sm">
                                    Envoyer le message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>