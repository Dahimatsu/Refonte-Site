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
    }, 3000);
});

const header = document.getElementById('main-header');

const scrollFill = document.getElementById('scroll-fill');
const scrollDot = document.getElementById('scroll-dot');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('header-scrolled');
    } else {
        header.classList.remove('header-scrolled');
    }

    const scrollTop = window.scrollY;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;

    const scrollPercent = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;

    if (scrollFill && scrollDot) {
        scrollFill.style.height = `${scrollPercent}%`;
        scrollDot.style.top = `${scrollPercent}%`;
    }
});

/* =========================================
   DRAG & DROP DE LA BARRE DE SCROLL
   ========================================= */
const scrollTrack = document.querySelector('.scroll-track');
let isDragging = false;

scrollDot.addEventListener('mousedown', (e) => {
    isDragging = true;
    document.body.style.userSelect = 'none'; 
});

document.addEventListener('mousemove', (e) => {
    if (!isDragging) return;

    const trackRect = scrollTrack.getBoundingClientRect();
    
    let percent = ((e.clientY - trackRect.top) / trackRect.height) * 100;
    
    percent = Math.max(0, Math.min(100, percent));

    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const newScrollPosition = (percent / 100) * docHeight;

    window.scrollTo({
        top: newScrollPosition,
        behavior: 'auto' 
    });
});

document.addEventListener('mouseup', () => {
    if (isDragging) {
        isDragging = false;
        document.body.style.userSelect = ''; 
    }
});

/* =========================================
   CHANGEMENT DE COULEUR DU HEADER AU SCROLL
   ========================================= */
const navbarLogo = document.getElementById('navbar-logo'); 
const sections = document.querySelectorAll('section[data-section-theme]');

window.addEventListener('scroll', () => {
    let currentSectionTheme = 'dark'; // Par défaut (comme le Hero au chargement)
    
    // On détecte quelle section est actuellement sous le header
    sections.forEach(section => {
        const rect = section.getBoundingClientRect();
        // 80 correspond à peu près à la hauteur de ton header
        if (rect.top <= 80 && rect.bottom >= 80) {
            currentSectionTheme = section.getAttribute('data-section-theme');
        }
    });

    // On applique le style en fonction de la section
    if (currentSectionTheme === 'dark') {
        // Section SOMBRE -> Header CLAIR
        header.classList.add('header-text-light');
        header.classList.remove('header-text-dark');
        
        // On met le logo blanc (semi-négatif)
        navbarLogo.src = 'assets/images/logo_semi-negatif.png'; 
    } else {
        // Section CLAIRE -> Header SOMBRE (Bleu ITU)
        header.classList.add('header-text-dark');
        header.classList.remove('header-text-light');
        
        navbarLogo.src = 'assets/images/logo_positif.png'; 
    }
});