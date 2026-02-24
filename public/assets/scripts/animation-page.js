window.addEventListener('load', () => {
    document.body.classList.remove('no-scroll');

    // On récupère tous les éléments (ils peuvent être null si absents de la page)
    const heroTitle = document.getElementById('itu-hero-title');
    const heroSubtitle = document.getElementById('itu-hero-subtitle');
    const heroBtnWrapper = document.getElementById('itu-hero-btn-wrapper');
    const scrollWrapper = document.getElementById('scroll-indicator-wrapper');
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');
    const header = document.getElementById('main-header'); // Ajouté ici pour plus de sécurité

    setTimeout(() => {
        // Indicateurs de scroll
        setTimeout(() => {
            if (scrollWrapper) scrollWrapper.style.opacity = '1';
            if (scrollToTopBtn) scrollToTopBtn.style.opacity = '1';
        }, 100);

        // Header
        setTimeout(() => {
            if (header) {
                header.classList.add('animate__animated', 'animate__fadeInDown');
                header.style.opacity = '1';
            }
        }, 100);

        // Titre
        setTimeout(() => {
            if (heroTitle) {
                heroTitle.classList.add('animate__animated', 'animate__fadeInDown');
                heroTitle.style.opacity = '1';
            }
        }, 300);

        // Sous-titre
        setTimeout(() => {
            if (heroSubtitle) {
                heroSubtitle.classList.add('animate__animated', 'animate__fadeIn');
                heroSubtitle.style.opacity = '1';
            }
        }, 700);

        // Bouton
        setTimeout(() => {
            if (heroBtnWrapper) {
                heroBtnWrapper.classList.add('animate__animated', 'animate__fadeInUp');
                heroBtnWrapper.style.opacity = '1';
            }
        }, 1000);
    }, 1);
});
