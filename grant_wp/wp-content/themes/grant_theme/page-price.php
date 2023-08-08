<?php get_header(); ?>

<body>
    <header>
        <?php get_template_part('_inc/header-top'); ?>
        <div class="main_images">
            <div class="main_img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/menu_main.png" alt="グレーの四角">
            </div>
            <div class="title_bottom_wrap">
                <h1 class="main_title_bottom">メニュー/料金</h1>
                <p class="main_title_bottom_accesary">PRICE</p>
            </div>
        </div>
        <?php get_template_part('_inc/header-menu'); ?>
    </header>
    <main>
        <div class="menus">
            <div class="menu">
                <div class="menu_square menu_cut"></div>
                <div class="menu_items">
                    <p class="menu_title">カット</p>
                    <div>
                        <div class="menu_one">
                            <div class="menu_item">
                                <p class="menu_name">カット</p>
                                <p class="menu_price">¥4,500 -</p>
                            </div>
                            <p class="menu_exprain">一人一人の髪質、骨格を考慮してカット</p>
                        </div>
                        <div class="menu_one">
                            <div class="menu_item">
                                <p class="menu_name">スクールカット</p>
                                <p class="menu_price">¥3,800 -</p>
                            </div>
                            <p class="menu_exprain">前高校生まで</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu">
                <div class="menu_square menu_color"></div>
                <div class="menu_items">
                    <div class="menu_one">
                        <p class="menu_title">カラー</p>
                        <div class="menu_item">
                            <p class="menu_name">リタッチカラー
                            </p>
                            <p class="menu_price">¥6,000 -</p>
                        </div>
                        <p class="menu_exprain">根本5cmまでのリタッチのカラー</p>
                    </div>
                    <div class="menu_one">
                        <div class="menu_item">
                            <p class="menu_name">全体カラー
                            </p>
                            <p class="menu_price">¥7,000 -</p>
                        </div>
                        <p class="menu_exprain">根本から毛先までカラーリング</p>
                    </div>
                    <div class="menu_one">
                        <div class="menu_item">
                            <p class="menu_name">イルミナカラー　リタッチ
                            </p>
                            <p class="menu_price">¥7,000 -</p>
                        </div>
                    </div>
                    <div class="menu_one">
                        <div class="menu_item">
                            <p class="menu_name">イルミナカラー　全体カラー
                            </p>
                            <p class="menu_price">¥8,000 -</p>
                        </div>
                    </div>
                    <div class="menu_one">
                        <div class="menu_item">
                            <p class="menu_name">オーガニックカラー　リタッチ
                            </p>
                            <p class="menu_price">¥7,000 -</p>
                        </div>
                    </div>
                    <div class="menu_one">
                        <div class="menu_item">
                            <p class="menu_name">オーガニックカラー　全体
                            </p>
                            <p class="menu_price">¥8,000 -</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu">
                <div class="menu_square menu_parm"></div>
                <div class="menu_one">
                    <div class="menu_items">
                        <p class="menu_title">パーマ</p>
                        <div class="menu_item">
                            <p class="menu_name">デザインパーマ（カット別）
                            </p>
                            <p class="menu_price">¥8,000〜 -</p>
                        </div>
                        <p class="menu_exprain">通常のパーマ</p>
                    </div>
                    <div class="menu_one">
                        <div class="menu_item">
                            <p class="menu_name">デジタルパーマ（カット別）

                            </p>
                            <p class="menu_price">¥3,800 -</p>
                        </div>
                        <p class="menu_exprain">形状記憶のパーマ</p>
                    </div>
                </div>
            </div>
            <div class="menu">
                <div class="menu_square menu_straight"></div>
                <div class="menu_items">
                    <p class="menu_title">縮毛矯正</p>
                    <div class="menu_one">
                        <div class="menu_item">
                            <p class="menu_name">縮毛矯正（カット別）
                            </p>
                            <p class="menu_price">¥16,400 -</p>
                        </div>
                        <p class="menu_exprain">癖があって広がってしまう、髪がまとまらないお悩みの方に。<br>
                            髪の癖を改善しストレートヘアーに。</p>
                    </div>
                    <div class="menu_one">
                        <div class="menu_item">
                            <p class="menu_name">ダメージ予防トリートメント + 縮毛矯正（カット別）
                            </p>
                            <p class="menu_price">¥18,000 -</p>
                        </div>
                        <p class="menu_exprain">髪質に合わせた優しい薬剤と髪のダメージを補修しながら艶と柔らかさのあるストレートに。</p>
                    </div>
                    <div class="menu_one">
                        <div class="menu_item">
                            <p class="menu_name">髪質改善ヘアエステストレート（カット別）

                            </p>
                            <p class="menu_price">¥23,000 -</p>
                        </div>
                        <p class="menu_exprain">
                            髪質と髪のダメージに合わせた薬剤を使用し、
                            髪質改善ヘアエステと髪にしっかり栄養補給しながら縮毛矯正をしていきます。
                            質感調整しながら髪の癖をとり艶と柔らかさのある最高の手触りに。</p>
                    </div>
                </div>
            </div>
            <div class="menu">
                <div class="menu_square menu_treat"></div>
                <div class="menu_items">
                    <p class="menu_title">トリートメント</p>
                    <div class="menu_one">
                        <div class="menu_item">
                            <p class="menu_name">リンケージトリートメント
                            </p>
                            <p class="menu_price">¥3,800 -</p>
                        </div>
                        <p class="menu_exprain">三段階補修で髪の内部をほしゅうし手触りを柔らかい質感にします。<br>
                            ダメージが気になる方におすすめです。</p>
                    </div>
                    <div class="menu_one">
                        <div class="menu_item">
                            <p class="menu_name">ハホニコフルコーストリートメント
                            </p>
                            <p class="menu_price">¥4,800 -</p>
                        </div>
                        <p class="menu_exprain">ダメージが気になる方におすすめです。6種類の薬剤を使用し
                            11工程で髪の内部をしっかり補修し髪に艶を戻し
                            健康な状態に戻してくれます。</p>
                    </div>
                    <div class="menu_one">
                        <div class="menu_item">
                            <p class="menu_name">プレミアムハホニコトリートメント
                            </p>
                            <p class="menu_price">¥6,000 -</p>
                        </div>
                        <p class="menu_exprain">髪をツヤツヤにしたい方に特ににおすすめです。<br>
                            8種類の薬剤を使用し髪の内部をしっかり補修します。<br>
                            ハホニコトリートメントの艶がさらにパワーアップしました。</p>
                    </div>
                </div>
            </div>
            <div class="menu">
                <div class="menu_square menu_ethetic"></div>
                <div class="menu_items">
                    <p class="menu_title">髪質改善ヘアエステ</p>
                    <div class="menu_one">
                        <div class="menu_item">
                            <p class="menu_name">髪質改善ヘアエステ
                            </p>
                            <p class="menu_price">¥11,000 -</p>
                        </div>
                        <p class="menu_exprain">特別な薬剤を使用し髪の内部からしっかり補修しながら髪質改善していきます。
                            しなやかで艶のある最高の手触りに。</p>
                    </div>
                    <div class="menu_one">
                        <div class="menu_item">
                            <p class="menu_name">髪質改善ヘアエステ+カット</p>
                            <p class="menu_price">¥13,800 -
                            </p>
                        </div>
                    </div>
                    <div class="menu_one">
                        <div class="menu_item">
                            <p class="menu_name">髪質改善ヘアエステカラ
                            </p>
                            <p class="menu_price">¥15,400 -
                            </p>
                        </div>
                        <p class="menu_exprain">特別な薬剤を使用し髪内部からしっかり補修しながらカラーリングをしていきます。カラーリング後のダメージ繋がる要因も
                            しっかり除去しながら髪質改善していきますので
                            継続してもらうことによって美髪を維持できます。</p>
                    </div>
                    <div class="menu_one">
                        <div class="menu_item">
                            <p class="menu_name">髪質改善ヘアエステカラー+カット
                            </p>
                            <p class="menu_price">¥17,900 -</p>
                        </div>
                    </div>
                    <div class="menu_one">
                        <div class="menu_item">
                            <p class="menu_name">髪質改善ヘアエステストレート+カット
                            </p>
                            <p class="menu_price">¥24,800 -
                            </p>
                        </div>
                        <p class="menu_exprain">髪質と髪のダメージに合わせた薬剤を使用し、髪質改善ヘアエステと
                            髪にしっかり栄養補給しながら縮毛矯正をしていきます。<br>
                            質感調整しながら髪の癖をとり艶と柔らかさのある最高の手触りに。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu_point">
            <p class="menu_point_text">指名料金¥500<br>
                <br>
                価格は全て税込価格になります。<br>
                ロング料金はございません。<br>
                リタッチカラーの場合表示価格より¥1000オフ<br>
                イルミナカラー、オーガニックカラーにご変更の場合表示価格よりプラス￥1000
            </p>
        </div>
        <p class="menu_caution">「メニュー表のご料金は令和5年４月時点の価格になります。<br>
            今後消費税、仕入れ価格の変動などの影響で料金を変更させて頂く場合がございますのでご了承ください。<br>
            ご不明な点がございましたらお気軽にお問い合わせください。」</p>

    </main>
    <?php get_footer(); ?>
</body>

</html>