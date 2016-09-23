<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <title><?php wp_title(''); ?></title>

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!--[if lte IE 8]>
		<p style="text-align: center; padding: 70px 20px; background:#e52534; color:#fffff5;">Please, update yor browser! Our site need Internet Explorer 9+!<br/> Thank you!</p>
	<![endif]-->

	<?php wp_head(); ?>
</head>
<body>

    	<header class="clearfix" role="banner" itemscope itemtype="https://schema.org/WPHeader">
		<div class="logo_title">
			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/images/logo.png, <?php echo get_template_directory_uri(); ?>/images/logo.png 2x">
				<a href="<?php echo esc_url( home_url() ); ?>"><img class="logo" srcset="<?php echo get_template_directory_uri(); ?>/images/logo.png, <?php echo get_template_directory_uri(); ?>/images/logo.png 2x"   alt="The MIDAS Theatre"></a>
			</picture>
			<h1 class="title hidden"><?php bloginfo( 'name' ) ?></h1>
		</div>
		<nav role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
			<h1 class="hidden">Main Navigation</h1>
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
			<h1 class="hidden">Flag Navigation</h1>
				<?php
					$defaults = array(
						'container' 		=> false,
						'theme_location'	=> 'flag-menu'
					);
					wp_nav_menu( $defaults );
				?>
		</nav>
	</header>
