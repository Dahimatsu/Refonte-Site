const hasVisited = localStorage.getItem('hasVisited');
const preloader = document.getElementById('preloader');

// Si déjà visité, on le cache instantanément avant toute animation
if (hasVisited && preloader) {
    preloader.classList.add('d-none');
    document.body.classList.remove('no-scroll');
}

// 2. DÉFINITION DE L'ANIMATION LOGO (Seulement si besoin)
let logoPulse = null;
if (!hasVisited) {
    logoPulse = anime.animate('#preloader-logo', {
        scale: [0.95, 1.05],
        opacity: [0.8, 1],
        duration: 1200,
        ease: 'inOutSine',
        alternate: true,
        loop: true,
    });
}

window.addEventListener('load', () => {
    // --- FONCTION POUR LANCER TOUTES LES ANIMS ---
    const lancerAnimations = (delaiPreloader = 0) => {
        const heroTitle = document.getElementById('itu-hero-title');
        const heroSubtitle = document.getElementById('itu-hero-subtitle');
        const heroBtnWrapper = document.getElementById('itu-hero-btn-wrapper');
        const scrollWrapper = document.getElementById('scroll-indicator-wrapper');
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');
        const header = document.getElementById('main-header');

        setTimeout(() => {
            // Gestion du preloader durant l'animation
            if (preloader && !hasVisited) {
                anime.animate(preloader, {
                    opacity: 0,
                    duration: 600,
                    ease: 'linear',
                    onComplete: function () {
                        preloader.classList.add('d-none');
                        document.body.classList.remove('no-scroll');
                        if (logoPulse) logoPulse.pause();
                    },
                });
            }

            const fastAnim = delaiPreloader === 0;

            setTimeout(
                () => {
                    if (scrollWrapper) scrollWrapper.style.opacity = '1';
                    if (scrollToTopBtn) scrollToTopBtn.style.opacity = '1';
                    if (header) {
                        header.classList.add('animate__animated', 'animate__fadeInDown');
                        header.style.opacity = '1';
                    }
                },
                fastAnim ? 0 : 100
            );

            setTimeout(
                () => {
                    if (heroTitle) {
                        heroTitle.classList.add('animate__animated', 'animate__fadeInDown');
                        heroTitle.style.opacity = '1';
                    }
                },
                fastAnim ? 50 : 300
            );

            if (heroSubtitle) {
                setTimeout(
                    () => {
                        heroSubtitle.classList.add('animate__animated', 'animate__fadeIn');
                        heroSubtitle.style.opacity = '1';
                    },
                    fastAnim ? 150 : 700
                );
            }

            if (heroBtnWrapper) {
                setTimeout(
                    () => {
                        heroBtnWrapper.classList.add('animate__animated', 'animate__fadeInUp');
                        heroBtnWrapper.style.opacity = '1';
                    },
                    fastAnim ? 250 : 1000
                );
            }

            const wordEl = document.getElementById('animated-foundation');
            if (wordEl) {
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

                setTimeout(
                    () => {
                        anime.animate(charWrappers, {
                            translateY: ['0%', '-100%'],
                            duration: 750,
                            delay: anime.stagger(150, { from: 'center' }),
                            ease: 'inOutQuad',
                            alternate: true,
                            loop: true,
                            loopDelay: 3500,
                        });
                    },
                    fastAnim ? 500 : 1500
                );
            }
        }, delaiPreloader);
    };

    if (hasVisited) {
        lancerAnimations(0);
    } else {
        localStorage.setItem('hasVisited', 'true');
        lancerAnimations(3000);
    }
});
