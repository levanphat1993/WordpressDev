<?php
    /**
     * The page template file
     *
     *
     * @package WordPress
     * @subpackage wpThemes
     * @since wpThemes 1.0
     */
    get_header(); ?>


<div class="container ">

	<div class="content">

		<div class="main block">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<article class="page">
					
					<?php if(page_is_parent() || $post->post_parent > 0) : ?>
					<na class="nav sub-nav">
						<ul>
							<span class="parent-link">
								<a href="<?php echo get_the_permalink(get_top_parent()); ?>">
									<?php echo get_the_title(get_top_parent()); ?>
								</a>
							</span>
					
					<?php
						$args = array(
							'child_of' => get_top_parent(),
							'title_li' => ''
						);
					?>
					
							<?php wp_list_pages($args); ?>
						</ul>
					</na
					v>
					<div class="clr"></div>
					<?php endif; ?>
					
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<?php echo wpautop('Sorry, no posts were found'); ?>
			<?php endif; ?>
		</div>

		<div class="clr"></div>

		<div class="side">
			<?php if(is_active_sidebar('sidebar')) : ?>
				<?php dynamic_sidebar('sidebar'); ?>
			<?php endif; ?>
		</div> <!-- .side -->
	</div>
</div>
<?php get_footer(); ?>