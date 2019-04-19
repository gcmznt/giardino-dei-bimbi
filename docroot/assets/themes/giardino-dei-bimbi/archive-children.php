<?php get_header(); ?>
	<section class="nido">
		<?php get_template_part('loop-children'); ?>
	</section>
	<?php get_template_part('loop-news'); ?>
<?php get_footer(); ?>

<?php wp_reset_query();