<?php
    $cont = get_the_content();
    $date = get_the_date();
    $tit = get_the_title();
?>

<div class="eng-lowerNewsDetail">
    <div class="eng-maxWidth">
        <div class="eng-wrap__70">
            <h1 class="eng-lowerNewsDetail__tit"><?php echo $tit ?></h1>
            <p class='eng-lowerNewsDetail__date'><?php echo $date ?></p>
            <div><?php echo $cont ?></div>
        </div>
    </div>
</div>
