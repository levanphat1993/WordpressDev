
<?php
    /**
     * The header template file
     *
     *
     * @package WordPress
     * @subpackage Photo Gallery
     * @since Photo Gallery 1.0
     */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>PhotoGenik</title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/w3.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/photoGallery.css">
</head>
<body <?php body_class(); ?>>
    <header class="w3-container w3-teal">
    <div class="w3-row">
      <div class="w3-col m9 l9">
        <h1><?php bloginfo('name'); ?></h1>
      </div>
      <div class="w3-col m3 l3">
        <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
           <input name="s" class="w3-input" type="text" 
            placeholder="Search...">
        </form>

      </div>
    </div> 
    </header>
    <div class="w3-row">
        <div class="w3-col m3 l3">
          <?php if(is_active_sidebar('sidebar')) : ?>
           <?php dynamic_sidebar('sidebar'); ?>
          <?php endif; ?>
        </div>
        <div class="w3-col m9 l9">
          <div class="w3-row">