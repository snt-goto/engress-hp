<?php
    $flowItems = [
        [
            'tit' => 'お問い合わせ',
            'txt' => 'まずはフォームまたはお電話からお申し込みください。'
        ],
        [
            'tit' => 'ヒアリング',
            'txt' => '現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。'
        ],
        [
            'tit' => '学習プランのご提供',
            'txt' => '目標達成のために最適な学習プランをご提案致します。'
        ],
        [
            'tit' => 'ご入会',
            'txt' => 'お申込み完了後、レッスンがスタートします。'
        ]
    ];
?>

<div class="eng-mainFlow">
    <?php
        $args = [
            'color' => 'navy',
            'tit' => 'ご利用の流れ'
        ];
        get_template_part('components/tit/mainTit', null, $args );
    ?>
    <div class="eng-maxWidth">
        <div class="eng-wrap__70">
            <ul class="eng-mainFlow__list">
                <?php
                    foreach($flowItems as $index => $value) {
                        $args = [
                            'index' => $index + 1,
                            'tit' => $value['tit'],
                            'txt' => $value['txt']
                        ];
                        get_template_part('components/item/flow', null, $args );
                    }
                ?>
            </ul>
        </div>
    </div>
</div>
