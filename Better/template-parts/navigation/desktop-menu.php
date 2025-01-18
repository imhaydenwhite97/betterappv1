<header class="desktop-header">
    <div class="logo">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_theme_file_uri('assets/images/better-logo.svg'); ?>" alt="<?php bloginfo('name'); ?>">
        </a>
    </div>
    
    <nav class="priority-links">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'desktop-menu',
            'container' => false,
            'walker' => new Desktop_Menu_Walker(),
            'items_wrap' => '%3$s'
        ));
        ?>
    </nav>
    
    <div class="user-auth">
        <button class="login-btn">Log In</button>
        <button class="register-btn">Register</button>
    </div>
</header>
