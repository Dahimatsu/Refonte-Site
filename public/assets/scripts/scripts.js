const header = document.getElementById('main-header');

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

        navbarLogo.src = '../assets/images/logo/logo_semi-negatif.png';
    } else {
        header.classList.add('header-text-dark');
        header.classList.remove('header-text-light');

        navbarLogo.src = '../assets/images/logo/logo_positif.png';
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