const logoPulse = anime.animate('#preloader-logo', {
    scale: [0.95, 1.05],
    opacity: [0.8, 1],
    duration: 1200,
    ease: 'inOutSine',
    alternate: true,
    loop: true,
});

window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    const heroTitle = document.getElementById('itu-hero-title');
    const heroSubtitle = document.getElementById('itu-hero-subtitle');
    const heroBtnWrapper = document.getElementById('itu-hero-btn-wrapper');

    setTimeout(() => {
        anime.animate(preloader, {
            opacity: 0,
            duration: 600,
            ease: 'linear',
            onComplete: function () {
                preloader.style.visibility = 'hidden';
                document.body.classList.remove('no-scroll');
                logoPulse.pause();
            },
        });

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
