<?php
  $today = date("Y-m-d");
  
  $query = new WP_Query(array(
    "post_type" => 'post',
    "posts_per_page" => 3,
    "post_status" => "publish",
  ));
  
  if ($query->have_posts()) {
?>
    <section class="news-wrapper">
      <h1>Bacheca avvisi</h1>
<?php
    while ( $query->have_posts() ) {
      $query->the_post();
      ?>
        <article class="news">
          <h2><?php the_title(); ?></h2>
          <h4><?php echo get_the_date(); ?></h4>
          <?php the_content(); ?>
        </article>
      <?php
    }
    wp_reset_postdata();
?>
    </section>
<?php
  }
?>
