<?php
    /**
     * The search template file
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
			<h1 class="page-header">Search Results</h1>
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<?php get_template_part('content', get_post_format()); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php echo wpautop('Sorry, no posts were found'); ?>
			<?php endif; ?>
		</div> <!-- .block -->

		<div class="side">
			<?php if(is_active_sidebar('sidebar')) : ?>
				<?php dynamic_sidebar('sidebar'); ?>
			<?php endif; ?>
		</div> <!-- .side -->
	</div> <!-- .content -->

</div> <!-- .container -->

<?php get_footer(); ?>