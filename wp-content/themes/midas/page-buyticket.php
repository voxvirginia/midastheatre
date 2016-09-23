<?php
/*
	Template Name: Buy Ticket
*/
?>
<?php get_header(); ?>
    
	<section class="herounit hero-pages"></section><!-- Hero -->

	<div class="wrapper">

    	<section class="clearfix header-pages">

			<h1><?php the_title(); ?></h1>
			<hr class="header-line">
			<script type="text/javascript" defer="defer" charset="UTF-8" data-timepad-customized="19811" data-timepad-widget-v2="event_list3" src="https://timepad.ru/js/tpwf/loader/min/loader.js"></script>
			<p><?php the_field('header_line_1'); ?></p>
			<p><?php the_field('header_line_2'); ?></p>
			
		</section><!-- Promo -->

		<section class="contact-info clearfix">

			<div class="c-icon">
				<p><i class="fa fa-envelope-o"></i></p>
				<p>hey@themidastheatre.com</p>
			</div>

			<div class="c-icon">
				<p><i class="fa fa-phone"></i></p>
				<p>+ 7 916 746 2449</p>
			</div>

		</section>


	</div>
    	

<?php get_footer(); ?>