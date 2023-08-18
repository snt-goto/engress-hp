<div class="eng-lowerNews">
    <?php
        $args = [
            'tit' => 'お知らせ一覧'
        ];
        get_template_part('components/tit/lowerTit', null, $args );
    ?>
    <?php
        $args = array(
            'posts_per_page' => 10,
            'post_type' => 'news',
        );
        $news_posts = get_posts($args);
    ?>
    <div class="eng-maxWidth">
        <div class="eng-wrap__70">
            <ul class="eng-lowerNews__list">
                <?php foreach ($news_posts as $post) : setup_postdata($post);?>
                    <?php
                        $date = get_the_date();
                        $href = get_permalink();
                        $tit = get_the_title();
                    ?>
                    <li>
                        <a class="eng-lowerNews__link" href="<?php echo $href ?>">
                            <p><?php echo $date ;?></p>
                            <h3><?php echo wp_trim_words($tit, 40, '…'); ?></h3>
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
