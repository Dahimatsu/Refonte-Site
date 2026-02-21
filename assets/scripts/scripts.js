window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');

    setTimeout(() => {
        preloader.classList.add('fade-out');

        document.body.classList.remove('no-scroll');
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