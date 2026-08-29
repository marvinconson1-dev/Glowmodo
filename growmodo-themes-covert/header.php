<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <main class="home-page-desktop">
		<header class="header">
			<aside class="banner" aria-label="Promotion">
				<!-- <img class="abstract-design" src="<?php echo get_template_directory_uri(); ?>/img/abstract-design-5.svg" alt="" aria-hidden="true"> -->
				<p class="text">✨Discover Your Dream Property with Estatein</p>
				<a class="text-button" href="#featured-properties">Learn More</a>
				<button class="button" type="button" aria-label="Dismiss promotion">
					<span class="icon">
						<img class="vector" src="<?php echo get_template_directory_uri(); ?>/img/vector-5.svg" alt="">
					</span>
				</button>
			</aside>
			<nav class="navigation-bar" aria-label="Primary navigation">
				<a href="#home" aria-label="Estatein home">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/Logo.png	" alt="Estatein">
				</a>
				<div class="buttons-container">
					<a class="div-wrapper" href="#home" aria-current="page"><span class="div">Home</span></a>
					<a class="text-button-2" href="#about-us">About Us</a>
					<a class="text-button-2" href="#featured-properties">Properties</a>
					<a class="text-button-2" href="#services">Services</a>
				</div>
				<a class="text-wrapper" href="#contact-us"><span class="div">Contact Us</span></a>
			</nav>
		</header>