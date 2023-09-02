<?php
    $category = get_queried_object();
    $category_name = $category -> name;
    $category_slug = $category -> slug;
?>

<div class="eng-lowerBlog">
    <?php
        if (is_category()) {
            $cat_tit = $category_name . "一覧";

            $args = [
                'tit' => $cat_tit
            ];
            get_template_part('components/tit/lowerTit', null, $args );
        } else {
            $args = [
                'tit' => '新着一覧'
            ];
            get_template_part('components/tit/lowerTit', null, $args );
        }
    ?>
    <?php
        $args = array(
            'posts_per_page' => 10,
            'post_type' => 'blog',
            'category_name' => $category_slug
        );
        $blog_posts = get_posts($args);
    ?>
    <div class="eng-maxWidth">
        <div class="eng-wrap__70">
            <ul class="eng-lowerBlog__list">
                <?php foreach ($blog_posts as $post) : setup_postdata($post);?>
                    <?php
                        $category = get_the_category()[0] -> name;
                        $cont = get_the_content();
                        $date = get_the_date();
                        $href = get_permalink();
                        $img = get_the_post_thumbnail_url();
                        $tit = get_the_title();
                    ?>
                    <li>
                        <a class="eng-lowerBlog__link" href="<?php echo $href ?>">
                            <div class="eng-lowerBlog__img">
                                <p><?php echo $category; ?></p>
                                <img src="<?php echo $img; ?>" alt="" />
                            </div>
                            <div class="eng-lowerBlog__txt">
                                <p><?php echo $date ;?></p>
                                <h3><?php echo wp_trim_words($tit, 40, '…'); ?></h3>
                                <p><?php echo wp_trim_words($cont, 60, '…'); ?></p>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php
                the_posts_pagination(
                    array(
                        'end_size'  => '1',
                        'mid_size'  => '2',
                        'prev_next' => false,
                    )
                );
            ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</div>

