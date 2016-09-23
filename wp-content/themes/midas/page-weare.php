<?php
/*
	Template Name: We Are
*/
?>
<?php get_header(); ?>
    
	<section class="herounit hero-pages"></section><!-- Hero -->

	<div class="wrapper">

    	<section class="clearfix header-pages">
			<h1><span>The midas</span> <?php echo get_the_title(); ?></h1>
			<p><?php the_field('header_line_1'); ?></p>
			<p><?php the_field('header_line_2'); ?></p>
		</section><!-- Promo -->

		<section class="single-text clearfix">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</section>

		<section class="team-list clearfix">

			<h2>Our Team</h2>
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

		<!-- <section class="single-text clearfix">
			
			 <p>
				We find new forms of interactive performances very exciting and mutually beneficial. The rehearsal period is a great opportunity for participants to develop their acting abilities and to raise their command of English to a higher level. We want our audiences to get acquainted with authentic literature in the English language and works of Russian literature.
			</p> 

		</section> -->

		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
		$url = $thumb['0']; ?>
		
		<section class="s-s-photo clearfix" style="background-image: url('<?php echo $url; ?>')"></section>

	</div>

<?php get_footer(); ?>