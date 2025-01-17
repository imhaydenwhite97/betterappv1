<header class="desktop-header">
    <div class="menu-icon">☰</div>
    
    <div class="logo">
        <img src="<?php echo get_theme_file_uri('assets/images/thebetterco.co-3009020047629789.svg'); ?>" alt="<?php bloginfo('name'); ?>">
    </div>
    
    <nav class="priority-links">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'mega-menu',
            'container' => false,
            'walker' => new Mega_Menu_Walker(),
            'items_wrap' => '%3$s'
        ));
        ?>
    </nav>
    
    <div class="user-auth">
        <button class="login-btn">Log In</button>
        <button class="register-btn">Register</button>
    </div>
</header>
