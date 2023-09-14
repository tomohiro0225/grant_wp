<?php get_header(); ?>

<body>
    <header>
        <?php get_template_part('_inc/header-top'); ?>
        <div class="main_images">
            <div class="main_img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/resolution_main.png" alt="艶髪の女性">
            </div>
            <div class="title_bottom_wrap">
                <h1 class="main_title_bottom">お悩み解決</h1>
                <p class="main_title_bottom_accesary">RESOLUTION</p>
            </div>
        </div>
        <?php get_template_part('_inc/header-menu'); ?>
    </header>
    <main>
        <div class="resolution_wrap">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="resolution_item">
                <p class="resolution_title"><?php echo the_title(); ?></p>
                <div class="resolution_text"><?php echo the_content(); ?></div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </main>
    <?php get_footer(); ?>
    <?php get_template_part('_inc/button'); ?>
</body>

</html>