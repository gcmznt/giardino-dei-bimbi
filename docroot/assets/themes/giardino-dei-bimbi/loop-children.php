<?php while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2>
			<?php the_title(); ?>
		</h2>

		<div class="report-wrapper">

		<?php
			$today = date("Y-m-d");

			$query = new WP_Query(array(
				"post_type" => POST_TYPE_ACTIVITY,
				"posts_per_page" => 3,
				"post_status" => "publish",
				"meta_query" => array(
					'relation' => 'AND',
					array(
            "key"     => "bambino",
            "value"   => get_the_ID(),
            "compare" => "="
          ),
					array(
						"key" => "data",
						"value" => $today,
						"type" => "DATE",
						"compare" => "<="
					)
				),
				"meta_key" => "data",
				"order_by" => "meta_value_num",
				"order" => "DESC",
			));

			if ($query->have_posts()) {
				while ( $query->have_posts() ) {
					$query->the_post();
					$menu = get_field('menu', get_the_ID());
?>
	<div class="report">
		<div class="date"><?php the_field('data', get_the_ID()); ?></div>
		<div class="info">
			<img src="<?php echo get_bloginfo('template_directory'); ?>/images/orari.png" class="icon" alt="" />
			<ul class="description">
				<?php foreach (array('primo', 'secondo', 'contorno', 'frutta') as $piatto) { ?>
					<li><?php
						if ($menu[$piatto]['piatto']) {
							echo $menu[$piatto]['piatto'];
							if ($menu[$piatto]['mangiato']) {
								echo ' - ' . $menu[$piatto]['mangiato'];
							}
						}
					?></li>
				<?php } ?>
			</ul>
			<?php if (get_field('nanna', get_the_ID())) { ?>
				<img src="<?php echo get_bloginfo('template_directory'); ?>/images/orari.png" class="icon" alt="" />
				<ul class="description">
					<?php
						foreach (array('nanna', 'secondo_pisolino', 'terzo_pisolino') as $s) {
							$sleep = get_field($s, get_the_ID());
							if ($sleep['dalle']) {
								echo "<li>Dalle " . substr($sleep['dalle'], 0, -3);
								if ($sleep['alle']) {
									echo " alle " . substr($sleep['alle'], 0, -3);
								}
								echo "</li>";
							}
						}
					?>
				</ul>
			<?php } ?>
			<?php if (get_field('scarica_1', get_the_ID())) { ?>
				<img src="<?php echo get_bloginfo('template_directory'); ?>/images/orari.png" class="icon" alt="" />
				<ul class="description">
					<?php
						foreach (array('scarica_1', 'scarica_2', 'scarica_3') as $s) {
							$scarica = get_field($s, get_the_ID());
							if ($scarica['ora']) {
								echo "<li>" . substr($scarica['ora'], 0, -3);
								echo " " . $scarica['come'] . "</li>";
							}
						}
					?>
				</ul>
			<?php } ?>
			<?php if (get_field('merenda', get_the_ID())) { ?>
				<img src="<?php echo get_bloginfo('template_directory'); ?>/images/orari.png" class="icon" alt="" />
				<ul class="description">
					<li><?php the_field('merenda', get_the_ID()); ?></li>
				</ul>
			<?php } ?>
			<?php if (get_field('attivita', get_the_ID())) { ?>
				<img src="<?php echo get_bloginfo('template_directory'); ?>/images/orari.png" class="icon" alt="" />
				<ul class="description">
					<li><?php the_field('attivita', get_the_ID()); ?></li>
				</ul>
			<?php } ?>
			<?php if (is_array(get_field('salute', get_the_ID())) && in_array('Febbre', get_field('salute', get_the_ID()))) { ?>
				<img src="<?php echo get_bloginfo('template_directory'); ?>/images/orari.png" class="icon" alt="" />
				<ul class="description">
					<?php
						$febbre = get_field('febbre', get_the_ID());
						if ($febbre['temperatura']) {
							echo "<li>" . substr($febbre['ora'], 0, -3);
							echo " " . $febbre['temperatura'] . "</li>";
						}
						if ($febbre['temperatura_2']) {
							echo "<li>" . substr($febbre['ora_2'], 0, -3);
							echo " " . $febbre['temperatura_2'] . "</li>";
						}
					?>
				</ul>
			<?php } ?>
			<?php if (get_field('patelli', get_the_ID())) { ?>
				<img src="<?php echo get_bloginfo('template_directory'); ?>/images/orari.png" class="icon" alt="" />
				<ul class="description">
					<li><?php echo (get_field('patelli', get_the_ID()) ? "Patelli finiti" : '') ?></li>
				</ul>
			<?php } ?>
			<?php if (is_array(get_field('salute', get_the_ID())) && count(get_field('salute', get_the_ID()))) { ?>
				<img src="<?php echo get_bloginfo('template_directory'); ?>/images/orari.png" class="icon" alt="" />
				<ul class="description">
					<li><?php
						if (get_field('salute', get_the_ID())) {
							foreach (get_field('salute', get_the_ID()) as $item) {
								print_r($item . '<br>');
							}
						}
					?></li>
				</ul>
			<?php } ?>
			<div class="note">
				<?php the_field('note', get_the_ID()); ?>
			</div>
		</div>
	</div>
<?php
				}
				wp_reset_postdata();
			}
		?>
		</div>
	</article>
<?php endwhile; ?>