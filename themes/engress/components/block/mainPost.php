<div class="eng-mainPost">
    <div class="eng-maxWidth">
        <div class="eng-wrap__70">
            <div class="eng-mainPost__flex">
                <div>
                    <?php
                        $args = [
                            'color' => 'navy',
                            'tit' => 'ブログ'
                        ];
                        get_template_part('components/tit/mainTit', null, $args );
                    ?>
                    <ul class="eng-mainPost__list blog">
                        <?php
                            $args = array(
                                'posts_per_page' => 3,
                                'post_type' => 'blog'
                            );
                            $news_posts = get_posts($args);
                        ?>
                        <?php foreach ($news_posts as $post) : setup_postdata($post); ?>
                            <?php
                                $category = get_the_category()[0] -> name;
                                $date = get_the_date();
                                $href = get_permalink();
                                $img = get_the_post_thumbnail_url();
                                $tit = get_the_title();
                            ?>
                            <li>
                                <a class="eng-mainPost__link blog" href="<?php echo $href; ?>">
                                    <div class="eng-mainPost__img">
                                        <p><?php echo $category; ?></p>
                                        <img src="<?php echo $img; ?>" alt="" />
                                    </div>
                                    <div class="eng-mainPost__txt">
                                        <p><?php echo wp_trim_words($tit, 40, '…'); ?></p>
                                        <p><?php echo $date; ?></p>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
                <div>
                    <?php
                        $args = [
                            'color' => 'navy',
                            'tit' => 'お知らせ'
                        ];
                        get_template_part('components/tit/mainTit', null, $args );
                    ?>
                    <ul class="eng-mainPost__list news">
                        <?php
                            $args = array(
                                'posts_per_page' => 3,
                                'post_type' => 'news'
                            );
                            $news_posts = get_posts($args);
                        ?>
                        <?php foreach ($news_posts as $post) : setup_postdata($post); ?>
                            <?php
                                $date = get_the_date();
                                $href = get_permalink();
                                $tit = get_the_title();
                            ?>
                            <li>
                                <a class="eng-mainPost__link" href="<?php echo $href; ?>">
                                    <p><?php echo $date; ?></p>
                                    <p><?php echo wp_trim_words($tit, 40, '…'); ?></p>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
