<?php
    $footerNavItems = [
        ['href' => '/', 'menu' => 'ホーム'],
        ['href' => '/news', 'menu' => 'お知らせ'],
        ['href' => '/blog', 'menu' => 'ブログ'],
        ['href' => '/service', 'menu' => 'コース・料金']
    ];
?>

<footer class="eng-footer">
    <?php get_template_part('components/elem/request'); ?>
    <?php get_template_part('components/elem/tel'); ?>
    <div class="eng-footer__cont">
        <div class="eng-maxWidth">
            <div class="eng-wrap__70">
                <div class="eng-footer__flex">
                    <div class="eng-footer__left">
                        <ul>
                            <?php
                                foreach($footerNavItems as $value) {
                                    $args = [
                                        'href' => $value['href'],
                                        'menu' => $value['menu']
                                    ];
                                    get_template_part('components/item/footerNav', null, $args );
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="eng-footer__right">
                        <div class="eng-footer__logo">
                            <img src="<?php echo_img('logo.png') ?>" alt="Engress"/>
                        </div>
                        <div class="eng-footer__tel">
                            <img src="<?php echo_img('tel_white.svg') ?>" alt=""/>
                            <p><?php global $TEL; echo $TEL; ?></p>
                        </div>
                        <p><?php global $BUSINESS_HOURS; echo $BUSINESS_HOURS; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="eng-footer__copyright">
        <div class="eng-maxWidth">
            <div class="eng-wrap__70">
                <p>© 2020 Engress.</p>
            </div>
        </div>
    </div>
</footer>
