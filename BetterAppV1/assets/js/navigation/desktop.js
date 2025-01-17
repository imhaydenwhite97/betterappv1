document.addEventListener("DOMContentLoaded", () => {
    // Touch detection function
    function isTouchDevice() {
        const touchDevice = window.matchMedia('(hover: none) and (pointer: coarse)');
        return touchDevice.matches;
    }

    // Add touch-device class if needed
    if (isTouchDevice()) {
        document.body.classList.add('touch-device');
    }

    // Desktop Navigation
    const menuItems = document.querySelectorAll(".menu-item");
    const header = document.querySelector(".desktop-header");

    // Mega Menu functionality
    menuItems.forEach((menuItem) => {
        const megaMenu = menuItem.querySelector(".mega-menu");
        let timeout;

        if (megaMenu) {
            menuItem.addEventListener("mouseenter", () => {
                console.log('Hover detected on:', menuItem);
                console.log('Mega menu element:', megaMenu);
                clearTimeout(timeout);
                megaMenu.classList.add("active");
                header.classList.add("has-active-menu");
            });

            menuItem.addEventListener("mouseleave", () => {
                timeout = setTimeout(() => {
                    megaMenu.classList.remove("active");
                    header.classList.remove("has-active-menu");
                }, 200);
            });
        }
    });
});
