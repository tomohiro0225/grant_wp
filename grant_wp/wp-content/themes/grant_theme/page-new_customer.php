<?php get_header(); ?>

<body>
    <header>
        <?php get_template_part('_inc/header-top'); ?>
        <div class="main_images">
            <div class="main_img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/new_main.png" alt="施術写真">
            </div>
            <div class="title_bottom_wrap">
                <h1 class="main_title_bottom">初めての方</h1>
                <p class="main_title_bottom_accesary">NEW CUSTOMER</p>
            </div>
        </div>
        <?php get_template_part('_inc/header-menu'); ?>
    </header>
    <main>
        <section id="new">
            <h2 class="new_img"><img src="<?php echo get_template_directory_uri(); ?>/images/before_after.png" alt="施術前後の写真"></h2>
            <p class="new_text">髪質改善サロンGRANT(グラント)川崎店のホームページを<br class="sp-off">ご覧頂きありがとうございます。<br>
                当店は髪をキレイにしたいと思っている方のための特別なサロンです。</p>
            <p class="new_title">この様な髪のお悩みございませんか？</p>
            <div class="new_img"><img src="<?php echo get_template_directory_uri(); ?>/images/problem.png" alt="髪のお悩み写真"></div>
            <p class="new_text">髪をキレイな艶髪にしたいが自分の髪質には、<br><br>
                「なにをするのが一番良いのかわからない」<br><br>
                「クセが強くて広がってしまい毎日のスタイリングが大変」<br><br>
                「髪のパサつき、広がり、ツヤがなくなってきた」<br><br>
                「毎日のスタイリングでアイロンやコテを使っていて熱のダメージで髪の質感が固くなってきた」<br><br>
                「トリートメントしてもあまり効果を感じられない」<br><br>
                「クセはそんなに強くないけどうねりがあって髪がまとまらない」<br><br>
                「髪にツヤがなくて老けて見えてしまう」<br><br>
                　など…髪のダメージの原因や髪質のお悩みは人によって様々です。
            </p>
            <div class="new_img"><img src="<?php echo get_template_directory_uri(); ?>/images/hearing2.png" alt="カウンセリング写真"></div>
            <p class="new_text">カウンセリングで現状の髪のお悩み、施術履歴、<br class="sp-off">普段の髪のお手入れの仕方などしっかりヒアリングさせて頂き<br class="sp-off">お客様1人ひとりに最適な髪質改善メニューを<br class="sp-off">施術させてもらいます。<br>
                <br>
                お客様にお伝えしたいことは正しいサロン施術と<br class="sp-off">正しいホームケアを継続することによって、<br>
                どんな髪のお悩みがあっても必ず解決できて、<br>
                「艶のあるしなやかな美髪」目指せるということです。
            </p>
        </section>
    </main>
<?php get_footer(); ?>
</body>

</html>