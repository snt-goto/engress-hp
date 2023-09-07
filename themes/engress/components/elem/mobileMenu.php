<?php
    $mobileNavItems = [
        ['href' => '/', 'menu' => 'ホーム'],
        ['href' => '/news', 'menu' => 'お知らせ'],
        ['href' => '/blog', 'menu' => 'ブログ'],
        ['href' => '/service', 'menu' => 'コース・料金'],
        ['href' => '/contact', 'menu' => '資料請求'],
        ['href' => '/contact', 'menu' => 'お問い合わせ'],
    ];
?>

<div class="eng-mobileMenu">
    <div class="eng-mobileMenu__btn" id="eng-mobileMenu__btn">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="eng-mobileMenu__list" id="eng-mobileMenu__list">
        <ul>
            <?php foreach ($mobileNavItems as $value): ?>
                <li class="eng-mobileMenu__item">
                    <a href="<?php echo $value['href']; ?>"><?php echo $value['menu']; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
