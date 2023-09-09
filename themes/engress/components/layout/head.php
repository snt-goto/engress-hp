<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo_ico('apple-touch-icon.png') ?>" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo_ico('favicon-32x32.png') ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo_ico('favicon-16x16.png') ?>" />
    <link rel="manifest" href="<?php echo_ico('site.webmanifest') ?>" />
    <link rel="mask-icon" href="<?php echo_ico('safari-pinned-tab.svg') ?>" color="#1b224c" />
    <meta name="msapplication-TileColor" content="#1b224c" />
    <meta name="theme-color" content="#ffffff" />

    <!-- ScrollHint -->
    <link rel="stylesheet" href="https://unpkg.com/scroll-hint@1.1.10/css/scroll-hint.css">
    <script src="https://unpkg.com/scroll-hint@1.1.10/js/scroll-hint.js"></script>

    <?php wp_head(); ?>
</head>
<body>
