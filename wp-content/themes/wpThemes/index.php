<?php
    /**
     * The main template file
     *
     *
     * @package WordPress
     * @subpackage wpThemes
     * @since wpThemes 1.0
     */
 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/wpThemes.css">
        <?php wp_head(); ?>
    </head>
    
    
    <body <?php body_class(); ?> >
        
        <header>
            <div class="container">
                <h1>
                    <a href="index.html"><?php bloginfo('name'); ?></a>
                    <small><?php bloginfo('description'); ?></small>
                </h1>
                <div class="h_right">
                    <form method="get" action="<?php esc_url(home_url('/')); ?>">
                        <input type="text" name="s" placeholder="Search...">
                    </form>
                </div>
            </div>
        </header>


        <nav class="nav main-nav">
            <div class="container">
                <?php
                    $args = array(
                    'theme_location' => 'primary'
                    );
                ?>
                <?php wp_nav_menu($args); ?>
            </div>
        </nav>

        <div class="container content">
            <div class="main block">
                <article class="post">
                    <h2>Lorem Ipsum</h2>
                    <p class="meta">Posted at <?php the_time('F j, Y g:i a'); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                    
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    
                    <a class="button" href="#">Read More</a>
                </article>
            </div>

            <div class="side">
                <div class="block">
                    <h3>Sidebar Head</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nam vel diam hendrerit erat fermentum aliquet sed eget arcu.</p>
                    <a class="button">More</a>
                </div>
            </div>
        </div>

        <footer class="main-footer">
            <div class="container">
                <div class="f_left">
                    <p>&amp;copy; 2017 - Advanced WP Theme</p>
                </div>
                    <div class="f_right">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>