<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">

	<meta name="author" content="">

	<link rel="icon" href="../../favicon.ico">

	<!-- wp_head -->

	<?php wp_head(); ?>

    <?php include 'le_scripts.php' ?>

	<?php include 'le_styles.php' ?>

</head>

<body <?php body_class(); ?>>

<?php if ( is_front_page() ) { ?>
	
	<div class="header scrollme animateme" data-when="view" data-from="0.5" data-to="0" data-opacity="0" data-easing="easeout">
	    <div class="logo">
	        <a href="<?php echo get_home_url(); ?>">
	            <img src="<?php echo get_bloginfo('template_directory');?>/img/header_png.png" alt="Le Corbeaux">
	        </a>
	    </div>
	</div>

<?php } else { ?>

	<div class="header">
	    <div class="logo">
	        <a href="<?php echo get_home_url(); ?>">
	            <img src="<?php echo get_bloginfo('template_directory');?>/img/header_png.png" alt="Le Corbeaux">
	        </a>
	    </div>
	</div>

<?php } ?>


