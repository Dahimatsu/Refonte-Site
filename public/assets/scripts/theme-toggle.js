const themeToggleBtn = document.getElementById('theme-toggle');
const themeIcon = document.getElementById('theme-icon');
const htmlElement = document.documentElement;

function applyTheme(theme) {
    if (theme === 'dark') {
        htmlElement.setAttribute('data-bs-theme', 'dark');

        themeIcon.classList.replace('bi-moon-fill', 'bi-sun-fill');
        themeToggleBtn.classList.replace('btn-outline-dark', 'btn-outline-light');

    } else {
        htmlElement.setAttribute('data-bs-theme', 'light');

        themeIcon.classList.replace('bi-sun-fill', 'bi-moon-fill');
        themeToggleBtn.classList.replace('btn-outline-light', 'btn-outline-dark');

    }
}

let currentTheme = htmlElement.getAttribute('data-bs-theme') || 'light';
applyTheme(currentTheme);

themeToggleBtn.addEventListener('click', () => {
    currentTheme = currentTheme === 'light' ? 'dark' : 'light';
    applyTheme(currentTheme);
});
