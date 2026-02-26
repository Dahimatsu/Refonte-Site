/* ==========================================================================
   1. VARIABLES GLOBALES & ÉLÉMENTS DU DOM
   ========================================================================== */
const header = document.getElementById('main-header');
const navbarLogo = document.getElementById('navbar-logo');
const sections = document.querySelectorAll('section[data-section-theme]');

const scrollTrack = document.querySelector('.scroll-track');
const scrollFill = document.getElementById('scroll-fill');
const scrollDot = document.getElementById('scroll-dot');
let isDragging = false;

const scrollToTopBtn = document.getElementById('scrollToTopBtn');

/* ==========================================================================
   2. BARRE DE DÉFILEMENT PERSONNALISÉE (CUSTOM SCROLLBAR)
   ========================================================================== */
const updateScrollUI = () => {
    if (!scrollFill || !scrollDot) return;

    const scrollTop = window.scrollY;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrollPercent = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;

    scrollFill.style.height = `${scrollPercent}%`;
    scrollDot.style.top = `${scrollPercent}%`;
};

const updateScrollFromEvent = (e) => {
    if (!scrollTrack) return;

    const trackRect = scrollTrack.getBoundingClientRect();
    const clientY = e.clientY || (e.touches && e.touches[0].clientY);

    let percent = (clientY - trackRect.top) / trackRect.height;
    percent = Math.max(0, Math.min(1, percent));

    const docHeight = document.documentElement.scrollHeight - window.innerHeight;

    window.scrollTo({
        top: percent * docHeight,
        behavior: 'auto',
    });

    if (scrollFill && scrollDot) {
        scrollFill.style.height = `${percent * 100}%`;
        scrollDot.style.top = `${percent * 100}%`;
    }
};

if (scrollDot) {
    scrollDot.addEventListener('mousedown', (e) => {
        isDragging = true;
        scrollDot.classList.add('active');
        document.body.style.userSelect = 'none';
        document.body.style.cursor = 'grabbing';
    });
}

document.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    updateScrollFromEvent(e);
});

document.addEventListener('mouseup', () => {
    if (isDragging) {
        isDragging = false;
        if (scrollDot) scrollDot.classList.remove('active');
        document.body.style.userSelect = '';
        document.body.style.cursor = '';
    }
});

if (scrollTrack) {
    scrollTrack.addEventListener('click', (e) => {
        if (e.target !== scrollDot) {
            updateScrollFromEvent(e);
        }
    });
}

/* ==========================================================================
   3. ÉVÉNEMENTS LIÉS AU SCROLL (HEADER, THÈME & UI)
   ========================================================================== */
window.addEventListener('scroll', () => {
    // Gestion de la classe du header
    if (window.scrollY > 50) {
        header.classList.add('header-scrolled');
    } else {
        header.classList.remove('header-scrolled');
    }

    // Mise à jour de la custom scrollbar
    if (!isDragging) {
        updateScrollUI();
    }

    // Changement de thème (couleur du header)
    let currentSectionTheme = 'dark';
    sections.forEach((section) => {
        const rect = section.getBoundingClientRect();
        if (rect.top <= 80 && rect.bottom >= 80) {
            currentSectionTheme = section.getAttribute('data-section-theme');
        }
    });

    if (currentSectionTheme === 'dark') {
        header.classList.add('header-text-light');
        header.classList.remove('header-text-dark');
        navbarLogo.src = '/assets/images/logo/logo_semi-negatif.png';
    } else {
        header.classList.add('header-text-dark');
        header.classList.remove('header-text-light');
        navbarLogo.src = '/assets/images/logo/logo_semi-positif.png';
    }

    // Gestion de l'affichage du bouton Scroll To Top
    if (window.scrollY > 300) {
        scrollToTopBtn.classList.add('show');
    } else {
        scrollToTopBtn.classList.remove('show');
    }
});

/* ==========================================================================
   4. BOUTON "REMONTER EN HAUT" (SCROLL TO TOP)
   ========================================================================== */
scrollToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth',
    });
});

/* ==========================================================================
   5. UTILITAIRES (ANNÉE COURANTE DU FOOTER)
   ========================================================================== */
const currentYear = new Date().getFullYear();
document.getElementById('current-year').textContent = currentYear;

/* ==========================================================================
   6. SCRIPTS CHARGÉS AU DÉMARRAGE (DOM CONTENT LOADED)
   ========================================================================== */
document.addEventListener('DOMContentLoaded', function () {
    // --- A. FILTRES DE LA BOUTIQUE (MERCH) ---
    const filterBtns = document.querySelectorAll('.filter-btn');
    const merchItems = document.querySelectorAll('.merch-item');
    const noProductsMsg = document.getElementById('no-products-msg');

    filterBtns.forEach((btn) => {
        btn.addEventListener('click', function () {
            // Gérer la classe active
            filterBtns.forEach((b) => b.classList.remove('active'));
            this.classList.add('active');

            // Récupérer la catégorie cliquée
            const selectedCategory = this.getAttribute('data-filter');
            let visibleCount = 0;

            // Afficher/Cacher les produits
            merchItems.forEach((item) => {
                const itemCategory = item.getAttribute('data-category');
                if (selectedCategory === 'all' || selectedCategory === itemCategory) {
                    item.style.display = 'block';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });

            // Afficher message si vide
            if (visibleCount === 0) {
                noProductsMsg.classList.remove('d-none');
            } else {
                noProductsMsg.classList.add('d-none');
            }
        });
    });

    // --- B. ANIMATION D'APPARITION AU SCROLL (REVEAL) ---
    const reveals = document.querySelectorAll('.reveal');
    const options = {
        root: null,
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px',
    };

    const revealOnScroll = new IntersectionObserver(function (entries, observer) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, options);

    reveals.forEach((reveal) => {
        revealOnScroll.observe(reveal);
    });
});
