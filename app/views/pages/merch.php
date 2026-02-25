<?php
$merchs = [
    [
        'id' => 'hoodie-blanc',
        'nom' => 'Bold White Hoodie',
        'prix' => '65 000 Ar',
        'categorie' => 'hoodies',
        'image' => 'hoodie-white.jpg'
    ],
    [
        'id' => 'hoodie-noir',
        'nom' => 'Black Hoodie',
        'prix' => '65 000 Ar',
        'categorie' => 'hoodies',
        'image' => 'hoodie-black.png'
    ],
    [
        'id' => 'chemise-textured',
        'nom' => 'Textured Shirt',
        'prix' => '45 000 Ar',
        'categorie' => 'shirts',
        'image' => 'shirt-white.png'
    ],
    [
        'id' => 'tshirt-noir',
        'nom' => 'Relaxed Fit Shirt',
        'prix' => '35 000 Ar',
        'categorie' => 't-shirts',
        'image' => 'tshirt-black.png'
    ],
    [
        'id' => 'casquette-itu',
        'nom' => 'Casquette ITU',
        'prix' => '25 000 Ar',
        'categorie' => 'hats',
        'image' => 'hat-black.png'
    ],
    [
        'id' => 'tshirt-blanc',
        'nom' => 'Classic White T-Shirt',
        'prix' => '35 000 Ar',
        'categorie' => 't-shirts',
        'image' => 'tshirt-white.png'
    ]
];
?>
<section class="hero position-relative min-vh-100 d-flex align-items-center text-start" id="accueil">

    <div class="position-absolute top-0 start-0 w-100 h-100 z-n1">
        <img src="/assets/images/background/bg-hero-merch.jpg" class="d-block w-100 h-100 object-fit-cover"
            alt="ITU Boutique" loading="lazy" />
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
    </div>

    <div class="container position-relative z-1 px-4">
        <div class="row">
            <div class="col-lg-8">
                <h1 id="itu-hero-title" class="itu-hero-title text-white text-uppercase mb-3">
                    Collection <br />
                    <span class="d-inline-flex" style="color: var(--itu-bleu);">Officielle.</span>
                </h1>
                <p id="itu-hero-subtitle" class="lead text-white mb-4 fs-4 fw-light">
                    Portez fièrement les couleurs de l'élite de l'IT. Découvrez notre collection de vêtements et
                    d'accessoires.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 mb-5"  data-section-theme="light">
    <div class="container">

        <div
            class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-end mb-5 gap-3 border-bottom border-dark border-3 pb-3">
            <h2 class="display-6 fw-bold text-uppercase m-0" style="letter-spacing: -1px;">Find Your Fit</h2>

            <div class="d-flex flex-wrap gap-2" id="merch-filters">
                <button class="filter-btn font-monospace active" data-filter="all">All</button>
                <button class="filter-btn font-monospace" data-filter="t-shirts">T-Shirts</button>
                <button class="filter-btn font-monospace" data-filter="shirts">Shirts</button>
                <button class="filter-btn font-monospace" data-filter="hoodies">Hoodies</button>
                <button class="filter-btn font-monospace" data-filter="hats">Hats</button>
            </div>
        </div>

        <div class="row g-4" id="merch-grid">
            
            <?php foreach ($merchs as $item): ?>
                <div class="col-12 col-sm-6 col-lg-4 merch-item" data-category="<?= $item['categorie'] ?>">
        
                    <a href="#produit-<?= $item['id'] ?>"
                        class="card rounded-0 border-0 h-100 merch-card bg-transparent text-decoration-none d-block">
        
                        <div class="merch-img-container border border-dark border-2 w-100">
                            <img src="/assets/images/merch/<?= $item['image'] ?>" alt="<?= $item['nom'] ?>">
        
                            <div class="merch-overlay"></div>
        
                            <div class="merch-info">
                                <h5 class="fw-black mb-1 text-uppercase fs-4 merch-title" style="letter-spacing: -1px;">
                                    <?= $item['nom'] ?>
                                </h5>
                                <p class="mb-0 font-monospace fw-bold merch-price fs-5">
                                    >_ <?= $item['prix'] ?>
                                </p>
                            </div>
                        </div>
        
                    </a>
        
                </div>
            <?php endforeach; ?>
        
        </div>

        <div id="no-products-msg" class="text-center py-5 d-none">
            <i class="bi bi-box-seam fs-1 text-muted d-block mb-3"></i>
            <p class="font-monospace fw-bold text-muted text-uppercase">>_ Rupture de stock pour cette catégorie.</p>
        </div>

    </div>
</section>