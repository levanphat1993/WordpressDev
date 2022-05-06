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

        <?php if(is_active_sidebar('showcase')) : ?>
            <?php dynamic_sidebar('showcase'); ?>
        <?php endif; ?>

        <div class="main block">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('content', get_post_format()); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop('Sorry, no posts were found'); ?>
            <?php endif; ?>
        </div>
        <?php if(is_active_sidebar('box1')) : ?>
		<?php dynamic_sidebar('box1'); ?>
	<?php endif; ?>
	
	<?php if(is_active_sidebar('box2')) : ?>
		<?php dynamic_sidebar('box2'); ?>
	<?php endif; ?>
	
	<?php if(is_active_sidebar('box3')) : ?>
		<?php dynamic_sidebar('box3'); ?>
	<?php endif; ?>
	

    </div>




</div>

<div class="clr"></div>

<?php get_footer(); ?>