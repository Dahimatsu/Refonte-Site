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
    const scrollWrapper = document.getElementById('scroll-indicator-wrapper');
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');

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
    }, 3000);
});

const header = document.getElementById('main-header');

/* =========================================
   DRAG & DROP BARRE SCROLL 
   ========================================= */
const scrollTrack = document.querySelector('.scroll-track');
const scrollFill = document.getElementById('scroll-fill');
const scrollDot = document.getElementById('scroll-dot');
let isDragging = false;

const updateScrollUI = () => {
    if (!scrollFill || !scrollDot) return;
    
    const scrollTop = window.scrollY;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrollPercent = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;

    scrollFill.style.height = `${scrollPercent}%`;
    scrollDot.style.top = `${scrollPercent}%`;
};

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('header-scrolled');
    } else {
        header.classList.remove('header-scrolled');
    }
    
    if (!isDragging) {
        updateScrollUI();
    }
});

const updateScrollFromEvent = (e) => {
    if (!scrollTrack) return;
    
    const trackRect = scrollTrack.getBoundingClientRect();
    const clientY = e.clientY || (e.touches && e.touches[0].clientY);
    
    let percent = (clientY - trackRect.top) / trackRect.height;
    
    percent = Math.max(0, Math.min(1, percent));

    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    
    window.scrollTo({
        top: percent * docHeight,
        behavior: 'auto'
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

/* =========================================
   CHANGEMENT DE COULEUR DU HEADER AU SCROLL
   ========================================= */
const navbarLogo = document.getElementById('navbar-logo');
const sections = document.querySelectorAll('section[data-section-theme]');

window.addEventListener('scroll', () => {
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

        navbarLogo.src = '../assets/images/logo_semi-negatif.png';
    } else {
        header.classList.add('header-text-dark');
        header.classList.remove('header-text-light');

        navbarLogo.src = '../assets/images/logo_positif.png';
    }
});

const currentYear = new Date().getFullYear();
document.getElementById('current-year').textContent = currentYear;

// =========================================
// SCROLL TO TOP
// =========================================
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
        scrollToTopBtn.classList.add("show");
    } else {
        scrollToTopBtn.classList.remove("show");
    }
});


scrollToTopBtn.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});