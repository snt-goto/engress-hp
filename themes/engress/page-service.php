<?php
    /*
        Template Name: Service
    */

    get_header();

    get_template_part('components/layout/head');
    get_template_part('components/layout/header');
    $args = [
        'page' => 'service',
        'tit' => 'コース・料金'
    ];
    get_template_part('components/block/lowerVisual', null, $args );
    get_template_part('components/block/lowerServiceSystem');
    get_template_part('components/block/lowerServiceTable');
    get_template_part('components/layout/footer');

    get_footer();
?>
