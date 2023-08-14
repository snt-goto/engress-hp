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
                        <li>
                            <a class="eng-mainPost__link blog" href="<?php the_permalink(); ?>">
                                <div class="eng-mainPost__img">
                                    <p><?php the_field('category'); ?></p>
                                    <img src="<?php the_field('img'); ?>" alt="" />
                                </div>
                                <div class="eng-mainPost__txt">
                                    <p><?php echo wp_trim_words( get_the_title(), 20, '…' ); ?></p>
                                    <p><?php echo get_the_date(); ?></p>
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
                        <li>
                            <a class="eng-mainPost__link" href="<?php the_permalink(); ?>">
                                <p><?php echo get_the_date(); ?></p>
                                <p><?php echo wp_trim_words( get_the_title(), 20, '…' ); ?></p>
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
