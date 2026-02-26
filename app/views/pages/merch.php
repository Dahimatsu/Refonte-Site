<?php
$merchs = [
    [
        'id' => 'polo',
        'nom' => 'Polo ITU',
        'prix' => '35 000 Ar',
        'categorie' => 'Vêtements',
        'text_color' => '#ffffff',
        'image_front' => 'polo.jpg',
        'image_back' => null
    ],
    [
        'id' => 'sweat-noir',
        'nom' => 'Sweater Noir',
        'prix' => '65 000 Ar',
        'categorie' => 'Vêtements',
        'text_color' => '#ffffff',
        'image_front' => 'sweat-noir-front.jpg',
        'image_back' => 'sweat-noir-back.jpg'
    ],
    [
        'id' => 'sweat-blanc',
        'nom' => 'Sweater Blanc',
        'prix' => '65 000 Ar',
        'categorie' => 'Vêtements',
        'text_color' => '#000000',
        'image_front' => 'sweat-blanc-front.jpg',
        'image_back' => 'sweat-blanc-back.jpg'
    ],
    [
        'id' => 'crewneck-blanc',
        'nom' => 'Crewneck Blanc',
        'prix' => '60 000 Ar',
        'categorie' => 'Vêtements',
        'text_color' => '#ffffff',
        'image_front' => 'crewneck-blanc-front.jpg',
        'image_back' => 'crewneck-blanc-back.jpg'
    ],
    [
        'id' => 'tshirt-noir',
        'nom' => 'T-Shirt Noir',
        'prix' => '35 000 Ar',
        'categorie' => 'Vêtements',
        'text_color' => '#ffffff',
        'image_front' => 'tshirt-noir-front.jpg',
        'image_back' => 'tshirt-noir-back.jpg'
    ],
    [
        'id' => 'tshirt-blanc',
        'nom' => 'T-Shirt Blanc',
        'prix' => '35 000 Ar',
        'categorie' => 'Vêtements',
        'text_color' => '#000000',
        'image_front' => 'tshirt-blanc-front.jpg',
        'image_back' => 'tshirt-blanc-back.jpg'
    ],
    [
        'id' => 'mug-itu',
        'nom' => 'Mug',
        'prix' => '15 000 Ar',
        'categorie' => 'Objets',
        'text_color' => '#000000',
        'image_front' => 'mug.png',
        'image_back' => 'mug_metal.png'
    ],
    [
        'id' => 'gourde-itu',
        'nom' => 'Gourde Isotherme',
        'prix' => '25 000 Ar',
        'categorie' => 'Objets',
        'text_color' => '#000000',
        'image_front' => 'gourde.png',
        'image_back' => 'gourde-all-view.png'
    ],
    [
        'id' => 'pyjama-bleu',
        'nom' => 'Pyjama Bleu',
        'prix' => '45 000 Ar',
        'categorie' => 'Vêtements',
        'text_color' => '#000000',
        'image_front' => 'pyjama_bleu_front.jpg',
        'image_back' => 'pyjama_bleu_back.jpg'
    ],
    [
        'id' => 'pyjama-rose',
        'nom' => 'Pyjama Rose',
        'prix' => '45 000 Ar',
        'categorie' => 'Vêtements',
        'text_color' => '#000000',
        'image_front' => 'pyjama_rose_front.jpg',
        'image_back' => 'pyjama_rose_back.jpg'
    ],
    [
        'id' => 'teddy',
        'nom' => 'Teddy ITU',
        'prix' => '45 000 Ar',
        'categorie' => 'Vêtements',
        'text_color' => '#000000',
        'image_front' => 'teddy_front.png',
        'image_back' => 'teddy_back.png'
    ],
    [
        'id' => 'sticker',
        'nom' => 'Sticker',
        'prix' => '15 000 Ar',
        'categorie' => 'Accessoires',
        'text_color' => '#000000',
        'image_front' => 'stickers.jpg',
        'image_back' => null
    ],
    [
        'id' => 'totebag',
        'nom' => 'Totebag',
        'prix' => '25 000 Ar',
        'categorie' => 'Accessoires',
        'text_color' => '#000000',
        'image_front' => 'totebag.jpg',
        'image_back' => null
    ],
    [
        'id' => 'casquette',
        'nom' => 'Casquette ITU',
        'prix' => '30 000 Ar',
        'categorie' => 'Accessoires',
        'text_color' => '#000000',
        'image_front' => 'casquette_1.jpg',
        'image_back' => 'casquette_2.jpg'
    ],
    [
        'id' => 'jogger',
        'nom' => 'Jogger',
        'prix' => '40 000 Ar',
        'categorie' => 'Vêtements',
        'text_color' => '#ffffff',
        'image_front' => 'jogger_fotsy.jpg',
        'image_back' => 'jogger_mainty.jpg'
    ]
];

$categories = array_unique(array_column($merchs, 'categorie'));
?>
<section class="hero position-relative min-vh-100 d-flex align-items-center text-start" id="accueil">

    <div class="position-absolute top-0 start-0 w-100 h-100 z-n1">
        <img src="/assets/images/background/merch-bg.png" class="d-block w-100 h-100 object-fit-cover"
            alt="ITU Boutique" loading="lazy" />
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
    </div>

    <div class="container position-relative z-1 px-4">
        <div class="row">
            <div class="col-lg-8">
                <h1 id="itu-hero-title" class="itu-hero-title text-white text-uppercase mb-3">
                    Collection Officielle.
                </h1>
                <p id="itu-hero-subtitle" class="lead text-white mb-4 fs-4 fw-light">
                    Portez fièrement les couleurs de l'élite de l'IT. Découvrez notre collection de vêtements et
                    d'accessoires.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 mb-5" data-section-theme="light">
    <div class="container">

        <header
            class="reveal d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-end mb-5 gap-3 border-bottom border-dark border-3 pb-3">
            <h2 class="display-6 fw-bold text-uppercase m-0" style="letter-spacing: -1px;">Find Your Fit</h2>

            <div class="d-flex flex-wrap gap-2" id="merch-filters">
                <button class="filter-btn active" data-filter="all">Tous</button>
                <?php foreach ($categories as $categorie) { ?>
                    <button class="filter-btn" data-filter="<?= $categorie ?>"><?= ucfirst($categorie) ?></button>
                <?php } ?>
            </div>
        </header>

        <section class="row g-4" id="merch-grid">

            <?php foreach ($merchs as $item): ?>
                <article class="col-12 col-sm-6 col-lg-4 merch-item reveal" data-category="<?= $item['categorie'] ?>">

                    <a href="#produit-<?= $item['id'] ?>"
                        class="card rounded-0 border-0 h-100 merch-card bg-transparent text-decoration-none d-block">

                        <div class="merch-img-container border border-dark border-2 w-100">

                            <img src="/assets/images/merch/<?= $item['image_front'] ?>" class="img-front"
                                alt="<?= $item['nom'] ?> - Face">

                            <?php if (!empty($item['image_back'])): ?>
                                <img src="/assets/images/merch/<?= $item['image_back'] ?>" class="img-back"
                                    alt="<?= $item['nom'] ?> - Dos">
                            <?php endif; ?>

                            <div class="merch-overlay"></div>

                            <div class="merch-info">
                                <h5 class="fw-black mb-1 text-uppercase fs-4 merch-title" style="letter-spacing: -1px; color: <?= $item['text_color'] ?>">
                                    <?= $item['nom'] ?>
                                </h5>
                                <!-- <p class="mb-0 font-monospace fw-bold merch-price fs-5" style="color: <?= $item['text_color'] ?>">
                                    >_ <?= $item['prix'] ?>
                                </p> -->
                            </div>
                        </div>

                    </a>

                </article>
            <?php endforeach; ?>

        </section>

        <div id="no-products-msg" class="text-center py-5 d-none">
            <i class="bi bi-box-seam fs-1 text-muted d-block mb-3"></i>
            <p class="font-monospace fw-bold text-muted text-uppercase">>_ Rupture de stock pour cette catégorie.</p>
        </div>

    </div>
</section>