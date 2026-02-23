window.addEventListener('load', () => {
    document.body.classList.remove('no-scroll');

    const heroTitle = document.getElementById('itu-hero-title');
    const heroSubtitle = document.getElementById('itu-hero-subtitle');
    const heroBtnWrapper = document.getElementById('itu-hero-btn-wrapper');
    const scrollWrapper = document.getElementById('scroll-indicator-wrapper');
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');

    setTimeout(() => {
        setTimeout(() => {
            scrollWrapper.style.opacity = '1';
            scrollToTopBtn.style.opacity = '1';
        }, 100);

        setTimeout(() => {
            header.classList.add('animate__animated', 'animate__fadeInDown');
            header.style.opacity = '1';
        }, 100);

        setTimeout(() => {
            heroTitle.classList.add('animate__animated', 'animate__fadeInDown');
            heroTitle.style.opacity = '1';
        }, 300);

        setTimeout(() => {
            heroSubtitle.classList.add('animate__animated', 'animate__fadeIn');
            heroSubtitle.style.opacity = '1';
        }, 700);

        setTimeout(() => {
            heroBtnWrapper.classList.add('animate__animated', 'animate__fadeInUp');
            heroBtnWrapper.style.opacity = '1';
        }, 1000);

    }, 1);
});
