<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(''); ?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <?php wp_head(); ?>
</head>

<body>

    <header class="clearfix" role="banner" itemscope itemtype="https://schema.org/WPHeader">
		<div class="logo_title">
			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/images/midas_logo.png, <?php echo get_template_directory_uri(); ?>/images/midas_logo_retina.png 2x">
				<a href="<?php echo esc_url( home_url() ); ?>"><img class="logo" srcset="<?php echo get_template_directory_uri(); ?>/images/midas_logo.png, <?php echo get_template_directory_uri(); ?>/images/midas_logo_retina.png 2x"   alt="The MIDAS Theatre"></a>
			</picture>
		</div>

		<nav role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
			<div class="navicon closed"><i class="fa fa-navicon"></i></div>

			<?php

				$defaults = array(
					'container' 		=> false,
					'theme_location'	=> 'primary-menu',
					'menu_class'		=> 'navmenu',
					'menu_id'		=> 'opennav'
				);

				wp_nav_menu( $defaults );

			?>

		</nav>
		<nav id="flag-menu">
			<?php
				$defaults = array(
					'container' 		=> false,
					'theme_location'	=> 'flag-menu'
				);
				wp_nav_menu( $defaults );
			?>
		</nav>
	</header>
