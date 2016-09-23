<?php
/*
	Template Name: Contact
*/
?>
<?php get_header(); ?>

    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
			$url = $thumb['0']; ?>

	    	<section class="clearfix header-pages header-contact" style="background-image: url('<?php echo $url; ?>'); ">
			</section><!-- Promo -->
		<?php endwhile; endif; ?>

    	<div class="site-content">

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

		<section class="single-text clearfix">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<h3><?php the_title(); ?></h3>
							<hr class="header-line">
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</section>




	</div>

<?php get_footer(); ?>
