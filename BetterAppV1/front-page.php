<?php get_header(); ?>

<main class="site-main">
    <section class="hero">
        <h1>Welcome to The Better Co.</h1>
        <p>Your journey starts here</p>
    </section>

    <section class="content-section">
        <div class="container">
            <h2>Featured Properties</h2>
            <!-- Add test content to ensure scrolling works -->
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <div class="content-block">
                    <h3>Content Block <?php echo $i; ?></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            <?php endfor; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
