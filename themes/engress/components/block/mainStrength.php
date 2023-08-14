<?php
    $strengthItems = [
        [
            'src' => 'home_mainStrength_1.jpg',
            'tit' => 'TOEFLに最適化された<br/>無駄のないカリキュラム',
            'txt' => 'TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。'
        ],
        [
            'src' => 'home_mainStrength_2.jpg',
            'tit' => '日本人指導歴10年以上の<br/>経験豊富な講師陣',
            'txt' => 'Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。'
        ],
        [
            'src' => 'home_mainStrength_3.jpg',
            'tit' => '平均3ヶ月でTOEFL iBT20点アップ',
            'txt' => 'Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。'
        ]
    ];
?>

<div class="eng-mainStrength">
    <?php
        $args = [
            'color' => 'navy',
            'tit' => 'TOEFL対策に特化したEngress3つの強み'
        ];
        get_template_part('components/tit/mainTit', null, $args );
    ?>
    <div class="eng-maxWidth">
        <div class="eng-wrap__70">
            <ul class="eng-mainStrength__list">
                <?php
                    foreach($strengthItems as $index => $value) {
                        $args = [
                            'index' => $index + 1,
                            'src' => $value['src'],
                            'tit' => $value['tit'],
                            'txt' => $value['txt']
                        ];
                        get_template_part('components/item/strength', null, $args );
                    }
                ?>
            </ul>
            <div class="eng-mainStrength__bnr">
                <h3>Engressの料金プランはこちら</h3>
                <a href="/service">料金を見てみる</a>
            </div>
        </div>
    </div>
</div>
