<div class="eng-lowerVisual">
    <div class="eng-lowerVisual__tit <?php echo $args['page']; ?>">
        <h1><?php echo $args['tit']; ?></h1>
    </div>
    <div class="eng-lowerVisual__nav">
        <div class="eng-maxWidth">
            <div class="eng-wrap__70">
                <div class="breadcrumbs eng-lowerVisual__breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php
                        if(function_exists('bcn_display')) {
                            bcn_display();
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
