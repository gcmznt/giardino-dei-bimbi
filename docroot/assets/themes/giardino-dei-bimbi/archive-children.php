<?php

// $args = array(
// 	'numberposts'	=> -1,
// 	'post_type'		=> 'children',
// 	'meta_query'	=> array(
// 			array(
// 				'key'     => 'genitore',
// 				'value'   => '"' . get_current_user_id() . '"',
// 				'compare' => 'LIKE'
// 			),
// 		)
// );


// // query
// $the_query = new WP_Query( $args );

?>



<?php get_header(); ?>
	<section class="nido">
		<?php get_template_part('loop-children'); ?>
	</section>
	<?php get_template_part('loop-news'); ?>
<?php get_footer(); ?>

<?php wp_reset_query();