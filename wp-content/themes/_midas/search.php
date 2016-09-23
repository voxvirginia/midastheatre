<?php get_header(); ?>
    
	<section class="herounit hero-pages"></section><!-- Hero -->

	<div class="wrapper">

		<section class="clearfix header-pages">
			<h1><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</section><!-- Promo -->

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<section class="single-text clearfix">
			<h1><?php the_title(''); ?></h1>
			<p><?php the_content(); ?> <a href="<?php the_permalink(); ?>">more info</a></p>
		</section>

		<?php endwhile; else : ?>
			<section class="single-text clearfix">
				<p><?php _e( 'Sorry, no posts matched your criteria.', 'midas' ); ?></p>
			</section>
		<?php endif; ?>


	</div>

<?php get_footer(); ?>