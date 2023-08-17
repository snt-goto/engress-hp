<div class="eng-lowerServiceTable">
    <?php
        $args = [
            'tit' => '料金表'
        ];
        get_template_part('components/tit/lowerTit', null, $args );
    ?>
    <div class="eng-maxWidth">
        <div class="eng-wrap__70">
            <ul class="eng-lowerServiceTable__list">
                <?php
                    $args = array(
                        'posts_per_page' => 4,
                        'post_type' => 'plan'
                    );
                    $plan_posts = get_posts($args);
                ?>
                <?php foreach ($plan_posts as $post) : setup_postdata($post); ?>
                    <?php
                        $detail_1 = get_field('detail_1');
                        $detail_2 = get_field('detail_2');
                        $detail_3 = get_field('detail_3');
                        $detail_4 = get_field('detail_4');
                        $detail_5 = get_field('detail_5');
                        $price = get_field('price');
                        $tag = get_field('tag');
                        $tit = get_the_title();
                    ?>
                    <li class="eng-lowerServiceTable__item">
                        <?php if($tag == 'おすすめ'): ?>
                            <h3 class="recommendation">
                                <?php echo $tag ?>
                                <br/>
                                <?php echo $tit ?>
                            </h3>
                        <?php else: ?>
                            <h3><?php echo $tit ?></h3>
                        <?php endif; ?>
                        <div class="eng-lowerServiceTable__txt">
                            <div class="eng-lowerServiceTable__price">
                                <p><?php echo $price ?>円〜</p>
                                <p>*月額（税抜価格）</p>
                            </div>
                            <ul class="eng-lowerServiceTable__detailList">
                                <li>
                                    <?php if($tit != 'フレックスプラン'): ?>
                                        <img src="<?php echo_img('check.svg') ?>" alt="" />
                                        <p><?php echo $detail_1 ?></p>
                                    <?php else: ?>
                                        <p>＊<?php echo $detail_1 ?></p>
                                    <?php endif; ?>
                                </li>
                                <?php if($detail_2): ?>
                                    <li>
                                        <img src="<?php echo_img('check.svg') ?>" alt="" />
                                        <p><?php echo $detail_2; ?></p>
                                    </li>
                                <?php endif; ?>
                                <?php if($detail_3): ?>
                                    <li>
                                        <img src="<?php echo_img('check.svg') ?>" alt="" />
                                        <p><?php echo $detail_3; ?></p>
                                    </li>
                                <?php endif; ?>
                                <?php if($detail_4): ?>
                                    <li>
                                        <img src="<?php echo_img('check.svg') ?>" alt="" />
                                        <p><?php echo $detail_4; ?></p>
                                    </li>
                                <?php endif; ?>
                                <?php if($detail_5): ?>
                                    <li>
                                        <img src="<?php echo_img('check.svg') ?>" alt="" />
                                        <p><?php echo $detail_5; ?></p>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </li>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</div>
