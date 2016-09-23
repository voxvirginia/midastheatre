<?php
/*
	Template Name: We Are
*/
?>
<?php get_header(); ?>


		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
			$url = $thumb['0']; ?>

	    	<section class="clearfix header-pages header-about" style="background-image: url('<?php echo $url; ?>'); ">
			</section><!-- Promo -->
		<?php endwhile; endif; ?>

	<div class="site-content">

		<section class="single-text clearfix">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<h3><?php the_title(); ?></h3>
							<hr class="header-line">
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</section>

		<section class="team-list clearfix">

			<h3>Our Team</h3>
			<hr class="header-line">

			<ul>
				<?php if(get_field('team_list')): ?>

				<?php while(has_sub_field('team_list')): ?>





					<li>
						<?php
							if( get_sub_field('team_link') ) { ?>
						   	<p><a href="<?php bloginfo('url'); ?>/team/<?php the_sub_field('team_name_link'); ?>"><?php the_sub_field('team_name'); ?></a></p>
						   	<a href="<?php bloginfo('url'); ?>/team/<?php the_sub_field('team_name_link'); ?>"><img src="<?php the_sub_field('team_photo'); ?>" class="img-responsive"></a>
							<?php } else { ?>
						   	<p><?php the_sub_field('team_name'); ?></p>
						   	<img src="<?php the_sub_field('team_photo'); ?>" class="img-responsive">
						<?php } ?>
					</li>

				<?php endwhile; ?>

				<?php endif; ?>
			</ul>

		</section>

	</div>

<?php get_footer(); ?>
