<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body>

    <header class="header">
        <h1><?php bloginfo('name'); ?></h1>
        <small><?php bloginfo('description'); ?></small>
    </header><!-- .header -->

    <div class="main">

            <?php if (have_posts()) { ?>
                post found
            <?php } else { ?>
                <?php echo wpautop('Sorry, No posts were found'); ?>
            <?php } ?>
    </div> <!-- .main -->
</body>
</html>