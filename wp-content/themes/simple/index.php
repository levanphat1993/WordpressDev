<?php 
/**
 * 
 * Description: Builds up a set of HTML attributes containing the text direction and language information for the page.
 * language_attributes();
 * 
 * Description: Displays information about the current site.
 * bloginfo();
 * 
 * Description: Prints scripts or data in the head tag on the front end.
 * wp_head();
 * 
 * Description: Replaces double line-breaks with paragraph elements.
 * wpautop();
 * 
 * Description: Determines whether current WordPress query has posts to loop over.
 * have_posts();
 * 
 * Description: Iterate the post index in the loop.
 * the_post();
 * 
 * Description: Display or retrieve the current post title with optional markup.
 * the_title();
 * 
 * Description: Display the post content.
 * the_content();
 * 
 * Description: Display the name of the author of the current post.
 * the_author();
 * 
 * Description: Display or Retrieve the date the current post was written (once per date).
 * the_date();
 * 
 * Description: Display the time at which the post was written.
 * the_time();
 */
?>



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
                <?php while (have_posts()) { ?>
                    <h3><?php the_post(); the_title(); the_content(); ?></h3>
                    <div class="meta">
                        Created By <?php the_author(); ?> on <?php the_time('F j, Y g:i a'); //the_date('l jS  F Y h:i:s A'); ?> 
                    </div>
                <?php } ?>
            <?php } else { ?>
                <?php echo wpautop('Sorry, No posts were found'); ?>
            <?php } ?>
    </div> <!-- .main -->

    <footer class="footer">
        <p>&copy; <?php the_date('Y'); ?> - <?php bloginfo('name'); ?></p>
    </footer><!-- .footer -->
</body>
</html>