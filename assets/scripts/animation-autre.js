{
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

            const wordEl = document.getElementById('animated-foundation');
            const wordText = wordEl.innerText;
            wordEl.innerHTML = '';

            const charWrappers = [];

            wordText.split('').forEach((char) => {
                const clipSpan = document.createElement('span');
                clipSpan.className = 'char-clip';

                const wrapperSpan = document.createElement('span');
                wrapperSpan.className = 'char-wrapper';

                const originalSpan = document.createElement('span');
                originalSpan.innerText = char;

                const cloneSpan = document.createElement('span');
                cloneSpan.className = 'char-clone';
                cloneSpan.innerText = char;

                wrapperSpan.appendChild(originalSpan);
                wrapperSpan.appendChild(cloneSpan);
                clipSpan.appendChild(wrapperSpan);
                wordEl.appendChild(clipSpan);

                charWrappers.push(wrapperSpan);
            });

            setTimeout(() => {
                anime.animate(charWrappers, {
                    translateY: ['0%', '-100%'],
                    duration: 750,
                    delay: anime.stagger(150, { from: 'center' }),
                    ease: 'inOutQuad',
                    alternate: true,
                    loop: true,
                    loopDelay: 3500,
                });
            }, 1500);
        }, 1);
    });
}
