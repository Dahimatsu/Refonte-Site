window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');

    setTimeout(() => {
        preloader.classList.add('fade-out');

        document.body.classList.remove('no-scroll');
    }, 3000);
});
