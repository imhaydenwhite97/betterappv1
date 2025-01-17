document.addEventListener("DOMContentLoaded", () => {
    // Mobile Navigation
    const menuIcon = document.querySelector('.menu-icon');
    const sideMenu = document.querySelector('.side-menu');
    const overlay = document.querySelector('.overlay');
    const closeButton = document.querySelector('.side-menu-close');

    // Side Menu functionality
    menuIcon.addEventListener('click', () => {
        sideMenu.classList.add('active');
        overlay.classList.add('active');
    });

    closeButton.addEventListener('click', () => {
        sideMenu.classList.remove('active');
        overlay.classList.remove('active');
    });

    overlay.addEventListener('click', () => {
        sideMenu.classList.remove('active');
        overlay.classList.remove('active');
    });
});
