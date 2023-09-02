<?php
    // 画像URL取得
    function echo_img($path) {
        echo get_stylesheet_directory_uri() . '/assets/img/' . $path;
    }

    // 現在のURL取得
    function get_current_link() {
        return (is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    }

    // リセットCSS読み込み
    function add_reset_style() {
        wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
        wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
    }
    add_action('wp_enqueue_scripts', 'add_reset_style');

    // CSS, JS読み込み
    function add_link_files() {
        wp_enqueue_style( 'eng-style', get_stylesheet_directory_uri().'/assets/css/style.css', array(), false, 'all');
        wp_enqueue_script( 'eng-script', get_template_directory_uri().'/assets/js/script.js', array(), false, true );
    }
    add_action( 'wp_enqueue_scripts', 'add_link_files' );

    // 投稿非表示
    function remove_menus() {
        remove_menu_page( 'edit.php' );
    }
    add_action( 'admin_menu', 'remove_menus' );

    // 管理バー非表示
    add_filter( 'show_admin_bar', '__return_false' );

    // グローバル変数
    $BUSINESS_HOURS = '平日08:00〜20:00';
    $TEL = '0123-456-7890';
?>
