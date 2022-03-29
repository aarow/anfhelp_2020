<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-100">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://use.typekit.net/fhm8nhw.css">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class("d-flex flex-column h-100"); ?>>
		<?php wp_body_open(); ?>

		<header class="site-header fixed-top">
			<?php get_template_part( 'template-parts/site_nav' ); ?>
		</header>

		<main id="primary" class="site-main flex-fill" role="main">
