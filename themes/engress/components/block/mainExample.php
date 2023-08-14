<div class="eng-mainExample">
    <?php
        $args = [
            'color' => 'white',
            'tit' => 'TOEFL成功事例'
        ];
        get_template_part('components/tit/mainTit', null, $args );
    ?>
    <div class="eng-maxWidth">
        <div class="eng-wrap__70">
            <ul class="eng-mainExample__list">
                <?php
                    $args = array(
                        'posts_per_page' => 3,
                        'post_type' => 'example'
                    );
                    $example_posts = get_posts($args);
                ?>
                <?php foreach ($example_posts as $post) : setup_postdata($post); ?>
                    <li class="eng-mainExample__item">
                        <p class="tit"><?php the_title(); ?></p>
                        <div class="eng-mainExample__img">
                            <img src="<?php the_field('img'); ?>" alt="" />
                        </div>
                        <div class="eng-mainExample__info">
                            <p class="job"><?php the_field('job'); ?></p>
                            <p class="name"><?php the_field('name'); ?>さん</p>
                        </div>
                        <p class="result"><?php the_field('result'); ?></p>
                    </li>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</div>
