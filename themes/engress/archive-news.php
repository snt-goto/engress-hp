<?php
    /*
        Template Name: Service
    */

    get_header();

    get_template_part('components/layout/head');
    get_template_part('components/layout/header');
    $args = [
        'page' => 'news',
        'tit' => 'お知らせ'
    ];
    get_template_part('components/block/lowerVisual', null, $args );
    get_template_part('components/block/lowerNews');
    get_template_part('components/layout/footer');

    get_footer();
?>
