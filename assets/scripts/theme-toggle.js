/* =========================================
   GESTION DU THEME (BOUTON SIMPLE)
   ========================================= */
const themeToggleBtn = document.getElementById('theme-toggle');
const themeIcon = document.getElementById('theme-icon');
const navbarLogo = document.getElementById('navbar-logo');
const htmlElement = document.documentElement;

// Fonction pour appliquer le thème
function applyTheme(theme) {
    if (theme === 'dark') {
        htmlElement.setAttribute('data-bs-theme', 'dark');

        // On passe à l'icône soleil et le bouton devient clair
        themeIcon.classList.replace('bi-moon-fill', 'bi-sun-fill');
        themeToggleBtn.classList.replace('btn-outline-dark', 'btn-outline-light');

        // Logo pour le mode sombre
        navbarLogo.src = 'assets/images/ITU_logo_semi-negatif.png';
    } else {
        htmlElement.setAttribute('data-bs-theme', 'light');

        // On passe à l'icône lune et le bouton devient sombre
        themeIcon.classList.replace('bi-sun-fill', 'bi-moon-fill');
        themeToggleBtn.classList.replace('btn-outline-light', 'btn-outline-dark');

        // Logo pour le mode clair
        navbarLogo.src = 'assets/images/ITU_logo_positif.png';
    }
}

// Initialisation au chargement de la page
let currentTheme = htmlElement.getAttribute('data-bs-theme') || 'light';
applyTheme(currentTheme);

// Écouteur de clic sur le bouton
themeToggleBtn.addEventListener('click', () => {
    currentTheme = currentTheme === 'light' ? 'dark' : 'light';
    applyTheme(currentTheme);
});
