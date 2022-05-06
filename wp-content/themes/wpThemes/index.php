<?php
    /**
     * The main template file
     *
     *
     * @package WordPress
     * @subpackage wpThemes
     * @since wpThemes 1.0
     */
    get_header(); ?>

<div class="container">
	<div class="content">
        <div class="main block">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('content', get_post_format()); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop('Sorry, no posts were found'); ?>
            <?php endif; ?>
        </div>
        <div class="side">
            <?php if(is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="clr"></div>

<?php get_footer(); ?>