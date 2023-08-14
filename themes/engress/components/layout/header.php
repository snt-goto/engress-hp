<?php
    $headerNavItems = [
        ['href' => '/', 'menu' => 'ホーム'],
        ['href' => '/news', 'menu' => 'お知らせ'],
        ['href' => '/blog', 'menu' => 'ブログ'],
        ['href' => '/service', 'menu' => 'コース・料金']
    ];
?>

<header id="eng-header" class="eng-header">
    <div class="eng-maxWidth">
        <div class="eng-header__flex">
            <div class="eng-header__left">
                <a class="eng-header__logo" href="/">
                    <img src="<?php echo_img('logo.png') ?>" alt="Engress"/>
                </a>
                <ul class="eng-header__list">
                    <?php
                        foreach($headerNavItems as $value) {
                            $args = [
                                'href' => $value['href'],
                                'menu' => $value['menu']
                            ];
                            get_template_part('components/item/headerNav', null, $args );
                        }
                    ?>
                </ul>
            </div>
            <div class="eng-header__right">
                <div>
                    <p><?php global $BUSINESS_HOURS; echo $BUSINESS_HOURS; ?></p>
                    <div class="eng-header__tel">
                        <img src="<?php echo_img('tel_navy.svg') ?>" alt=""/>
                        <p><?php global $TEL; echo $TEL; ?></p>
                    </div>
                </div>
                <a class="request" href="/contact">資料請求</a>
                <a class="contact" href="/contact">お問い合わせ</a>
            </div>
        </div>
    </div>
</header>
