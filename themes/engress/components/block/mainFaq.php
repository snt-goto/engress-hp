<?php
    $faqItems = [
        [
            'answer' => 'Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。',
            'question' => 'Engressはサラリーマンでも学習を続けられるでしょうか？'
        ],
        [
            'answer' => 'Engressオリジナルの教材を使用しております。',
            'question' => '教材はオリジナルのものを使用しているのでしょうか？'
        ],
        [
            'answer' => '日本人講師も在籍しております。',
            'question' => '講師に日本人はいますか？'
        ],
        [
            'answer' => 'TOEFL対策に特化しておりますが、それ以外のサポートは行っておりません。',
            'question' => 'TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？'
        ]
    ];
?>

<div class="eng-mainFaq">
    <?php
        $args = [
            'color' => 'navy',
            'tit' => 'よくある質問'
        ];
        get_template_part('components/tit/mainTit', null, $args );
    ?>
    <div class="eng-maxWidth">
        <div class="eng-wrap__70">
            <ul class="eng-mainFaq__list">
                <?php
                    foreach($faqItems as $value) {
                        $args = [
                            'answer' => $value['answer'],
                            'question' => $value['question']
                        ];
                        get_template_part('components/item/faq', null, $args );
                    }
                ?>
            </ul>
        </div>
    </div>
</div>
