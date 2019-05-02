<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/giardino-dei-bimbi.css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Pacifico" rel="stylesheet" />
	
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <main>
    <section class="intro">
      <h1>Il Giardino dei Bimbi</h1>
      <a href="#" class="burger" onclick="this.classList.toggle('is-open'); return false;"></a>
      <?php main_menu(); ?>
      <img src="<?php echo get_bloginfo('template_directory'); ?>/images/tree.png" class="tree" alt="" />
      <?php if (is_home()) { ?>
        <div class="clouds">
          <svg width="1335" height="220" xmlns="http://www.w3.org/2000/svg"><path d="M.918 227.344h1334.117c-21.917-47.12-57.278-58.9-106.086-35.34-61.738-65.426-131.933-55.867-155.289-47.625C1015.344 65.523 834.21-24.684 686.125 130c-64.191-36.992-101.094-21.816-136.68-13.676-33.777-145.582-267.996-168.758-305.46 20.153-48.372-46.61-203.266-51-243.067 90.867z" fill="currentColor" fillRule="evenodd"/></svg>
        </div>
      <?php } ?>
    </section>
