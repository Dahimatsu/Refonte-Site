window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');

    const heroTitle = document.getElementById('itu-hero-title');
    const heroSubtitle = document.getElementById('itu-hero-subtitle');
    const heroBtn = document.getElementById('itu-hero-btn-wrapper');

    setTimeout(() => {
        preloader.classList.add('fade-out');
        document.body.classList.remove('no-scroll');

        setTimeout(() => {
            heroTitle.classList.add('animate__animated', 'animate__fadeInDown');
            heroTitle.style.opacity = '1';
        }, 300);

        setTimeout(() => {
            heroSubtitle.classList.add('animate__animated', 'animate__fadeIn');
            heroSubtitle.style.opacity = '1';
        }, 700);

        setTimeout(() => {
            heroBtn.classList.add('animate__animated', 'animate__fadeInUp');
            heroBtn.style.opacity = '1';
        }, 1000);
    }, 3000); 
});

const header = document.getElementById('main-header');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('header-scrolled');
    } else {
        header.classList.remove('header-scrolled');
    }
});
