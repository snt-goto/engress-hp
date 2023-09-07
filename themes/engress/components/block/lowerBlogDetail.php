<?php
    $categories = get_categories();
    $category_name = get_the_category()[0] -> name;
    $category_slug = get_the_category()[0] -> slug;
    $cont = get_the_content();
    $date = get_the_date();
    $img = get_the_post_thumbnail_url();
    $tit = get_the_title();
?>

<div class="eng-lowerBlogDetail">
    <div class="eng-maxWidth">
        <div class="eng-wrap__70">
            <div class="eng-lowerBlogDetail__flex">
                <div class="eng-lowerBlogDetail__left">
                    <p class="category"><?php echo $category_name ?></p>
                    <h1><?php echo $tit ?></h1>
                    <div class="eng-lowerBlogDetail__info">
                        <?php echo do_shortcode('[addtoany]'); ?>
                        <p class="date"><?php echo $date ?></p>
                    </div>
                    <div class="eng-lowerBlogDetail__img">
                        <img src="<?php echo $img; ?>" alt="" />
                    </div>
                    <div class="eng-lowerBlogDetail__cont"><?php echo $cont ?></div>
                    <div class="eng-lowerBlogDetail__recommendedArticles">
                        <h2>おすすめの記事</h2>
                        <ul>
                            <?php
                                $args = array(
                                    'posts_per_page' => 3,
                                    'post_type' => 'blog',
                                    'tag' => 'pickup'
                                );
                                $blog_posts = get_posts($args);
                            ?>
                                <?php foreach ($blog_posts as $post): setup_postdata($post);?>
                                    <?php
                                        $category = get_the_category()[0] -> name;
                                        $date = get_the_date();
                                        $href = get_permalink();
                                        $img = get_the_post_thumbnail_url();
                                        $tit = get_the_title();
                                    ?>
                                    <li class="eng-lowerBlogDetail__recommendedArticlesItem">
                                        <a href="<?php echo $href ?>">
                                            <div class="eng-lowerBlogDetail__recommendedArticlesImg">
                                                <p><?php echo $category; ?></p>
                                                <img src="<?php echo $img; ?>" alt="" />
                                            </div>
                                            <div class="eng-lowerBlogDetail__recommendedArticlesTit">
                                                <p><?php echo $date ?></p>
                                                <h3><?php echo wp_trim_words($tit, 40, '…'); ?></h3>
                                            </div>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </div>
                <div class="eng-lowerBlogDetail__right">
                    <h2>関連記事</h2>
                    <ul class="eng-lowerBlogDetail__relatedArticles">
                        <?php
                            $args = array(
                                'posts_per_page' => 3,
                                'post_type' => 'blog',
                                'category_name' => $category_slug
                            );
                            $blog_posts = get_posts($args);
                        ?>
                            <?php foreach ($blog_posts as $post) : setup_postdata($post);?>
                                <?php
                                    $href = get_permalink();
                                    $img = get_the_post_thumbnail_url();
                                    $tit = get_the_title();
                                ?>
                                <li>
                                    <a class="eng-lowerBlogDetail__relatedArticlesLink" href="<?php echo $href ?>">
                                        <div class="eng-lowerBlogDetail__relatedArticlesImg">
                                            <img src="<?php echo $img; ?>" alt="" />
                                        </div>
                                        <h3><?php echo wp_trim_words($tit, 40, '…'); ?></h3>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                    <h2>カテゴリー</h2>
                    <ul class="eng-lowerBlogDetail__categories">
                        <?php foreach ($categories as $cat) : ;?>
                            <?php
                                $href = $cat -> term_id;
                                $name = $cat -> name;
                            ?>
                            <li>
                                <a href="<?php echo get_category_link($href) ;?>?post_type=blog">・<?php echo $name ;?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
