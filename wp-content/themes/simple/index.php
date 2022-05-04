    <?php
    /**
     * The main template file
     *
     *
     * @package WordPress
     * @subpackage Simple
     * @since Simple 1.0
     */
    get_header(); ?>
    <div class="container">
    <div class="main">

    

        <div class="container">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()): the_post(); ?>
                    <article class="post">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="meta">
                            Created By <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                        </div> <!-- .meta -->
                        <?php if(has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div> <!--.post-thumbnail -->
                        <?php endif; ?>
                        <?php the_excerpt(); ?>
                        <br>
                        <a class="button" href="<?php the_permalink(); ?>">Read More</a>
                    </article> <!-- .post -->
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop('Sorry, No posts were found'); ?>
            <?php endif; ?>
        </div> <!-- .container -->


    </div> <!-- .main -->


    <?php get_footer(); ?>