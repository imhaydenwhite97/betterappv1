<header class="mobile-header">
    <div class="logo">
        <img src="<?php echo get_theme_file_uri('assets/images/thebetterco.co-3009020047629789.svg'); ?>" alt="<?php bloginfo('name'); ?>">
    </div>
    <div class="user-auth">
        <button class="login-signup">Log In / Sign Up</button>
    </div>
</header>

<div class="overlay"></div>
<div class="side-menu">
    <div class="side-menu-header">
        <div class="logo">
            <img src="<?php echo get_theme_file_uri('assets/images/thebetterco.co-3009020047629789.svg'); ?>" alt="<?php bloginfo('name'); ?>">
        </div>
        <button class="side-menu-close">×</button>
    </div>
    <div class="side-menu-content">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'mobile-menu',
            'container' => false
        ));
        ?>
    </div>
</div>

<nav class="mobile-bottom-bar">
    <button data-menu="home">
        <img src="<?php echo get_theme_file_uri('assets/images/icons/home.svg'); ?>" alt="Home">
    </button>
    <button data-menu="invest">
        <img src="<?php echo get_theme_file_uri('assets/images/icons/invest.svg'); ?>" alt="Invest">
    </button>
    <button data-menu="rent">
        <img src="<?php echo get_theme_file_uri('assets/images/icons/rent.svg'); ?>" alt="Rent">
    </button>
    <button data-menu="profile">
        <img src="<?php echo get_theme_file_uri('assets/images/icons/profile.svg'); ?>" alt="Profile">
    </button>
    <button data-menu="menu">
        <img src="<?php echo get_theme_file_uri('assets/images/icons/menu.svg'); ?>" alt="Menu">
    </button>
</nav>
