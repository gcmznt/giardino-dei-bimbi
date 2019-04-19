<?php get_header(); ?>
	<section class="nido">
		<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

		<?php get_template_part('loop'); ?>
		<?php get_template_part('pagination'); ?>
	</section>
<?php get_footer(); ?>
