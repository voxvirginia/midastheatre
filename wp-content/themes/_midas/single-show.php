<?php get_header(); ?>

	<!--Get thumbnail photo-->
	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
	$url = $thumb['0']; ?>
	<!--Use Thumbnail Photo for Hero at top of page.-->
	<section class="herounit hero-pages" style="background-image: url('<?php echo $url; ?>');">
		<h1 class='show-title'><?php the_title(); ?></h1>
	</section>
	<div class="wrapper">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>
				<hr class="header-line">
				<p><?php the_field('header_line_1'); ?></p>
				<p><?php the_field('header_line_2'); ?></p>
			</section><!-- Promo -->

			<section class="single-text clearfix">
				<p><?php the_content(); ?></p>
			</section>

			<?php
				$value = get_field( "show_cast_on" );
				if( $value == true ) { ?>

				<section class="cast-play clearfix">

					<h2>Cast and Crew</h2>
					<hr class="header-line">

					<ul>
						<?php if(get_field('show_cast')): ?>

						<?php while(has_sub_field('show_cast')): ?>

							<li><?php the_sub_field('show_cast_role'); ?><?php the_sub_field('show_cast_name'); ?></li>

						<?php endwhile; ?>

						<?php endif; ?>
					</ul>

				</section>

			<?php } else {} ?>

		<section class="s-s-photo clearfix" style="background-image: url('<?php the_field('show_image'); ?>')"></section>


		<section class="single-text clearfix">

			<p>
				<?php the_field('show_text'); ?>
			</p>

		</section>

		<section class="s-s-photo clearfix" style="background-image: url('<?php the_field('show_image_2'); ?>')"></section>


		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no pages found.', 'midas' ); ?></p>
		<?php endif; ?>

	</div>

<?php get_footer(); ?>
