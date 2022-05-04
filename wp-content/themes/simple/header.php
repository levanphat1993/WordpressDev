
<?php
/**
 * The template for displaying the header
 *
 * @package WordPress
 * @subpackage Simple
 * @since Simple 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/simple.css">
    <?php wp_head(); ?>
</head>

<body>

<header class="header">
    <h1><?php bloginfo('name'); ?></h1>
    <small><?php bloginfo('description'); ?></small>
</header> <!-- .header -->

<nav class="main-nav">
    <div class="container">
        <?php
            $args = array(
                'theme_location' => 'primary'
            );
        ?>
        <?php wp_nav_menu($args); ?>
    </div>
</nav> <!-- .main-nav -->