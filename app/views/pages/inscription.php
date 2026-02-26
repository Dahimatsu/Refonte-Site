<?php
$dossiers_data = [
    [
        'niveau' => 'Licence',
        'badge' => 'L1',
        'couleur' => 'var(--itu-bleu)',
        'note' => 'Vous pouvez déposer votre dossier sans attendre les résultats du Bacc.',
        'chemise' => 'Chemise : Bleue (Info) / Verte (Design)',
        'bouton' => 'Formulaire Licence',
        'fichier' => '/assets/downloads/formulaire_licence.pdf',
        'dossiers' => [
            'Formulaire de dépôt de dossier (en ligne ou sur place)',
            'Bulletin de naissance ou photocopie CIN',
            'Certificat de résidence (- de 3 mois)',
            'Photocopie attestation et relevé de notes du Bacc',
            'Photocopies des diplômes ou attestations utiles',
            '3 photos d’identité',
            'Droit de dépôt : 15 000 Ar'
        ]
    ],
    [
        'niveau' => 'Master 1',
        'badge' => 'M1',
        'couleur' => '#ffc107',
        'note' => '',
        'chemise' => 'Chemise cartonnée jaune',
        'bouton' => 'Formulaire Master 1',
        'fichier' => '/assets/downloads/formulaire_master_1.pdf',
        'dossiers' => [
            'Formulaire de dépôt de dossier (en ligne ou sur place)',
            'Bulletin de naissance ou photocopie CIN',
            'Certificat de résidence (- de 3 mois)',
            'Photocopie attestation LICENCE et relevés L1+L2+L3',
            'Photocopies des diplômes ou attestations utiles',
            '3 photos d’identité',
            'Droit de dépôt : 15 000 Ar'
        ]
    ],
    [
        'niveau' => 'Master 2',
        'badge' => 'M2',
        'couleur' => '#e83e8c',
        'note' => '',
        'chemise' => 'Chemise cartonnée rose',
        'bouton' => 'Formulaire Master 2',
        'fichier' => '/assets/downloads/formulaire_master_2.pdf',
        'dossiers' => [
            'Dossier d’inscription (en ligne ou sur place)',
            'CV en couleur avec photo',
            '3 photos d’identité',
            'Photocopie couleur certifiée diplômes Licence + Bacc',
            'Photocopie certifiée notes M1 + Licence + Bacc',
            'Photocopie couleur CIN',
            'Copie intégrale en français',
            'Certificat de résidence en français',
            'Fiche de paie (pour les travailleurs)',
            'Clé USB avec le scan des dossiers remplis',
            'Droit de dépôt : 15 000 Ar'
        ]
    ]
];
?>
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
                <h1 id="itu-hero-title" class="itu-hero-title text-white text-uppercase mb-3">
                    Rejoignez <br />
                    <span id="animated-foundation" class="d-inline-flex">l'élite de l'IT.</span>
                </h1>
                <p id="itu-hero-subtitle" class="lead text-white mb-3 fs-4 fw-light">
                    Préparez votre dossier et intégrez <span class="fw-bold">IT University.</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="dossiers" class="py-5" style="background-color: var(--itu-gris);" data-section-theme="light">
    <div class="container py-5">

        <header class="text-center mb-5 reveal">
            <h2 class="display-4 fw-black text-uppercase mb-3"
                style="letter-spacing: -2px; font-weight: 900; color: #1a1a1a;">
                Dossiers à fournir
            </h2>
            <p class="lead text-muted">Préparez soigneusement votre dossier selon votre niveau.</p>
        </header>

        <div class="row g-4 justify-content-center">

            <?php foreach ($dossiers_data as $data): ?>
                <div class="col-md-6 col-lg-4 reveal">
                    <article
                        class="card h-100 rounded-0 itu-brutalist-card d-flex flex-column position-relative overflow-hidden"
                        style="border: 2px solid #1a1a1a; background-color: #ffffff;">

                        <div class="position-absolute"
                            style="top: -15px; right: -10px; font-size: 8rem; font-weight: 900; line-height: 1; color: transparent; -webkit-text-stroke: 2px <?= $data['couleur'] ?>; opacity: 0.15; z-index: 0; pointer-events: none; user-select: none;">
                            <?= $data['badge'] ?>
                        </div>

                        <div
                            class="card-header border-bottom border-dark border-2 p-4 position-relative z-1 d-flex justify-content-between align-items-center">
                            <h3 class="fw-black text-uppercase mb-0 fs-3" style="color: #1a1a1a;">
                                <?= $data['niveau'] ?>
                            </h3>

                            <?php if (!empty($data['note'])): ?>
                                <button class="btn btn-link p-0 text-decoration-none shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#note-<?= $data['badge'] ?>" aria-expanded="false"
                                    aria-controls="note-<?= $data['badge'] ?>">
                                    <i class="bi bi-info-circle-fill fs-4" style="color: <?= $data['couleur'] ?>;"></i>
                                </button>
                            <?php endif; ?>
                        </div>

                        <?php if (!empty($data['note'])): ?>
                            <div class="collapse position-relative z-1" id="note-<?= $data['badge'] ?>">
                                <div class="p-3 small fw-bold font-monospace border-bottom border-dark border-2"
                                    style="background-color: color-mix(in srgb, <?= $data['couleur'] ?> 15%, transparent); color: #1a1a1a;">
                                    >_ <?= $data['note'] ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="card-body p-4 position-relative z-1 flex-grow-1">

                            <div class="mb-4 d-flex align-items-center flex-wrap">

                                <?php if ($data['badge'] == 'L1'): ?>
                                    <div class="d-flex align-items-center me-3">
                                        <i class="bi bi-folder-fill fs-3"
                                            style="color: var(--itu-bleu); margin-right: -8px; z-index: 2;"></i>
                                        <i class="bi bi-folder-fill fs-3" style="color: var(--itu-vert); z-index: 1;"></i>
                                    </div>
                                    <span class="fw-bold text-uppercase border-bottom border-dark border-2 pb-1"
                                        style="font-size: 0.85rem; color: #1a1a1a;">
                                        Chemise : <span style="color: var(--itu-bleu);">Bleue (Info)</span> / <span
                                            style="color: var(--itu-vert);">Verte (Design)</span>
                                    </span>

                                <?php else: ?>
                                    <i class="bi bi-folder-fill fs-3 me-3" style="color: <?= $data['couleur'] ?>;"></i>
                                    <span class="fw-bold text-uppercase border-bottom border-dark border-2 pb-1"
                                        style="color: #1a1a1a;">
                                        <?= $data['chemise'] ?>
                                    </span>
                                <?php endif; ?>

                            </div>

                            <ul class="list-unstyled mb-0 font-monospace" style="font-size: 0.85rem; color: #1a1a1a;">
                                <?php foreach ($data['dossiers'] as $dossier): ?>
                                    <li class="d-flex align-items-start mb-3">
                                        <span class="me-2 fw-bold" style="color: <?= $data['couleur'] ?>;">>_</span>
                                        <span class="fw-medium"><?= $dossier ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="card-footer border-top border-dark border-2 p-0 position-relative z-1">
                            <a href="<?= $data['fichier'] ?>" download
                                class="btn w-100 rounded-0 fw-bold py-3 text-uppercase d-flex justify-content-center align-items-center shadow-none itu-download-btn"
                                style="background-color: <?= $data['couleur'] ?>; color: <?= ($data['badge'] == 'M1') ? '#1a1a1a' : '#ffffff' ?>; border: none; transition: all 0.3s ease;">
                                <i class="bi bi-download me-2 fs-5"></i>
                                <span><?= $data['bouton'] ?></span>
                            </a>
                        </div>

                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>