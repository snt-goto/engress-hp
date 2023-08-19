<?php
    get_header();

    get_template_part('components/layout/head');
    get_template_part('components/layout/header');
    $args = [
        'page' => 'blog',
        'tit' => 'ブログ'
    ];
    get_template_part('components/block/lowerVisual', null, $args );
    get_template_part('components/block/lowerBreadcrumbNav');
    get_template_part('components/block/lowerBlog');
    get_template_part('components/layout/footer');

    get_footer();
?>
