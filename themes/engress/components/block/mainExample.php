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
                    <?php
                        $img = get_field('img');
                        $job = get_field('job');
                        $name = get_field('name');
                        $result = get_field('result');
                        $tit = get_the_title();
                    ?>
                    <li class="eng-mainExample__item">
                        <p class="tit"><?php echo $tit; ?></p>
                        <div class="eng-mainExample__img">
                            <img src="<?php echo $img ?>" alt="" />
                        </div>
                        <div class="eng-mainExample__info">
                            <p class="job"><?php echo $job; ?></p>
                            <p class="name"><?php echo $name; ?>さん</p>
                        </div>
                        <p class="result"><?php echo $result; ?></p>
                    </li>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</div>
