
<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Simple
 * @since Simple 1.0
 */
?>
<div class="sidebar">
    <?php if(is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
</div> <!-- .sidebar -->

<div class="clr"></div>
</div> <!-- .container -->

<footer>
	<div class="container">
	<p>&copy; <?php the_date('Y'); ?> - <?php bloginfo('name'); ?></p>
	</div>
</footer>


<?php wp_footer(); ?>
</body>
</html>