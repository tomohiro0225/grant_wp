<?php
// メインクエリの表示数を変更するカスタム関数
function custom_posts_per_type($query) {
    if (is_admin() || ! $query->is_main_query()) {
        return;
    }

    if ($query->is_post_type_archive('news')) {
        $query->set('posts_per_page', 6); // 6件表示
    }

    if ($query->is_post_type_archive('resolution')) {
        $query->set('posts_per_page', -1); // 無制限に表示
    }
}
add_action('pre_get_posts', 'custom_posts_per_type');
