<?php get_header(); ?>

	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
	$url = $thumb['0']; ?>
    
	<section class="herounit hero-pages" style="background-image: url('<?php echo $url; ?>');"></section><!-- Hero -->

	<div class="wrapper">


		<section class="single-text clearfix">
		
			<h1><?php echo get_the_title(); ?></h1>
			<p class="post-meta"><?php the_time( 'j F Y' ); ?></p>
			<hr class="header-line" style="width: 100%;">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</section>

		<section class="post-nav clearfix">

			<?php next_post_link('<div class="post-list float-left"><h3>Next post</h3> <h5>%link</h5></div>', '%title'); ?>
			<?php previous_post_link('<div class="post-list float-right"><h3>Previous post</h3> <h5>%link</h5></div>', '%title'); ?>
	
		</section>


	</div>

<?php get_footer(); ?>