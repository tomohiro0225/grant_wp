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
        <div class="news_contents">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="news_content">
                <p class="news_content_date"><?php echo the_time('Y.m.d'); ?></p>
                <p class="news_content_text"><?php echo the_content(); ?></p>
                <a class="news_content_more" href="<?php the_permalink(); ?>">詳細</a>
            </div>
            <?php endwhile; endif; ?>
        </div>
        <?php get_template_part('_inc/pager'); ?>
    </main>
    <?php get_footer(); ?>
</body>

</html>