<?php
    $problemItems = [
        '勉強の習慣が<br/>身についていない',
        '勉強しているはず<br/>なのに点数が伸びない',
        '正しい勉強方法が<br/>わからない'
    ];
?>

<div class="eng-mainProblem">
    <?php
        $args = [
            'color' => 'white',
            'tit' => 'TOEFL学習でこんな悩みありませんか？'
        ];
        get_template_part('components/tit/mainTit', null, $args );
    ?>
    <ul>
        <?php
            foreach($problemItems as $value) {
                $args = [
                    'tit' => $value
                ];
                get_template_part('components/item/problem', null, $args );
            }
        ?>
    </ul>
    <div class="eng-maxWidth">
        <div class="eng-wrap__70">
            <div class="eng-mainProblem__school">
                <div>
                    <h3>
                        Engressは
                        <br/>
                        <span>TOEFLに特化したスクール</span>です
                    </h3>
                    <p>
                        完全オーダーメイドで、1人1人の悩みに合わせた最適な指導で
                        <br/>
                        TOEFLの苦手分野を克服します。
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

