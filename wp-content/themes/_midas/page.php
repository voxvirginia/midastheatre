<?php get_header(); ?>
    
	<section class="herounit hero-pages"></section><!-- Hero -->

	<div class="wrapper">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

	    	<section class="clearfix header-pages">
				<h1><span>The midas</span> <?php the_title(); ?></h1>
				<p>we are waiting you,</p>
				<p>only need a choose a date</p>	
			</section><!-- Promo -->

			<section class="single-text clearfix">
				<p><?php the_content(); ?></p>
			</section>
		
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no pages found.', 'midas' ); ?></p>
		<?php endif; ?>

	</div>

<?php get_footer(); ?>