<?php
    /*
        Template Name: Contact
    */

    get_header();

    get_template_part('components/layout/head');
    get_template_part('components/layout/header');
    $args = [
        'page' => 'contact',
        'tit' => 'お問い合わせ・資料請求'
    ];
    get_template_part('components/block/lowerVisual', null, $args );
    get_template_part('components/block/lowerBreadcrumbNav');
    get_template_part('components/block/lowerContact');
    get_template_part('components/layout/footer');

    get_footer();
?>
