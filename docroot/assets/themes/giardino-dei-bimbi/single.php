<?php get_header(); ?>
	<section class="nido">

		<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1><?php the_title(); ?></h1>
			</article>
		<?php endwhile; ?>

	</section>
<?php get_footer(); ?>
