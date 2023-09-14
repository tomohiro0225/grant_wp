<?php get_header(); ?>

<body>
    <header>
        <?php get_template_part('_inc/header-top'); ?>
        <div class="main_images">
            <div class="main_img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/menu_main.png" alt="施術写真">
            </div>
            <div class="title_bottom_wrap">
                <h1 class="main_title_bottom">お知らせ</h1>
                <p class="main_title_bottom_accesary">NEWS</p>
            </div>
        </div>
        <?php get_template_part('_inc/header-menu'); ?>
    </header>
    <main>
        <div class="single-news">
            <div class="single-news_inner">
                <h2 class="single-news_title"><?php echo the_title(); ?></h2>
                <p class="single-news_date"><?php echo the_time('Y.m.d'); ?></p>
                <div class="single-news_content"><?php echo the_content(); ?></div>
            </div>
        </div>
    </main>
    <?php get_footer(); ?>
    <?php get_template_part('_inc/button'); ?>
</body>

</html>