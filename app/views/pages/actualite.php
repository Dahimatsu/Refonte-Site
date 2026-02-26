<section class="py-5 actu-hero">
    <div class="container pt-5 pb-4 text-white">
        <span class="font-monospace text-uppercase fw-bold" style="color: var(--itu-vert);">>_ Flux Social</span>

        <h1 class="display-3 fw-black text-uppercase text-white mt-2 mb-3">
            Dernières <br>
            <span>Actualités.</span>
        </h1>

        <p class="lead fw-light col-lg-6">
            Suivez la vie du campus, nos événements et les succès de nos étudiants en direct de notre page Facebook.
        </p>
    </div>
</section>

<section class="py-5" data-section-theme="light">
    <div class="container py-4">

        <div class="row g-4">
            <?php foreach ($posts as $post): ?>

                <?php
                $date = new DateTime($post['created_time']);
                $dateFormatee = $date->format('d/m/Y');
                ?>

                <div class="col-12 col-md-6 col-lg-4">
                    <article class="actu-card">

                        <div class="actu-img-container">
                            <img src="<?= $post['full_picture'] ?>" alt="Actualité ITU" loading="lazy">
                        </div>

                        <div class="p-4 d-flex flex-column flex-grow-1">

                            <div class="mb-3">
                                <span
                                    class="badge rounded-0 border border-dark text-dark bg-transparent font-monospace fw-bold px-2 py-1">
                                    <i class="bi bi-calendar3 me-1"></i> <?= $dateFormatee ?>
                                </span>
                                <span class="badge rounded-0 bg-dark text-white font-monospace ms-2">
                                    <i class="bi bi-facebook"></i>
                                </span>
                            </div>

                            <p class="fs-5 fw-medium mb-4 actu-text-clamp" style="color: #1a1a1a; line-height: 1.4;">
                                <?= formatText($post['message']) ?>
                            </p>

                            <div class="mt-auto">
                                <a href="<?= $post['permalink_url'] ?>" target="_blank"
                                    class="btn btn-outline-dark rounded-0 border-2 fw-bold text-uppercase w-100">
                                    Voir sur Facebook <i class="bi bi-arrow-up-right ms-1"></i>
                                </a>
                            </div>

                        </div>
                    </article>
                </div>

            <?php endforeach; ?>
        </div>

    </div>
</section>