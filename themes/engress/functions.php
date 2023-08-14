<?php
    // 画像URL取得
    function echo_img($path) {
        echo get_stylesheet_directory_uri() . '/assets/img/' . $path;
    }

    // 現在のURL取得
    function get_current_link() {
        return (is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    }

    // 管理バー非表示
    add_filter( 'show_admin_bar', '__return_false' );

    // グローバル変数
    $BUSINESS_HOURS = '平日08:00〜20:00';
    $TEL = '0123-456-7890';
?>
