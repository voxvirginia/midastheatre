<?php
/*
	Template Name: Tania
*/
?>
<?php get_header(); ?>

	<div class="site-content">

		<section class="single-text clearfix">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<h1><?php the_title(); ?></h1>
				<hr class="header-line" style="width: 100%;">
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</section>

		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
		$url = $thumb['0']; ?>
		<section class="s-s-photo clearfix" style="background: url('<?php echo $url; ?>')"></section>

	</div>

<?php get_footer(); ?>
