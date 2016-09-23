<?php
/*
	Template Name: Shows
*/
?>
<?php get_header(); ?>
    
	<section class="herounit hero-pages"></section><!-- Hero -->

	<div class="wrapper">

    	<!-- <section class="clearfix header-pages">
			<h1><span>The midas</span> <?php the_title(); ?></h1>
			<p><?php the_field('header_line_1'); ?></p>
			<p><?php the_field('header_line_2'); ?></p>	
		</section><!-- Promo --> 

		<section class="calendar clearfix"> 

			<ul class="clearfix">
				<li>
					<ul class="cal-head sub-li clearfix">
						<li>Show</li>
						<li>Date</li>
						<li>Time</li>
						<li>Location</li>
					</ul>
				</li>
				<?php if(get_field('show_calendar')): ?>

				<?php while(has_sub_field('show_calendar')): ?>
					<li>
						<ul class="cal-body sub-li clearfix">
							<li><!-- <a href="<?php the_sub_field('show_name_link'); ?>"> --><?php the_sub_field('show_name'); ?><!-- </a> --></li>
							<li><?php the_sub_field('show_date'); ?></li>
							<li><?php the_sub_field('show_time'); ?></li>
							<li><a href="<?php the_sub_field('show_loc_link'); ?>" target="_blank"><?php the_sub_field('show_loc'); ?></a></li>
						</ul>
					</li>
				<?php endwhile; ?>

				<?php endif; ?>
			</ul>

			<a href="https://midas.timepad.ru">buy tickets</a>

		</section>




		<section class="shows-list clearfix">

			<?php
				$args = array (
				'post_type' => 'show',
				'orderby'	=> 'menu_order',
				'order'		=> 'ASC'
				);
			
				$query = new WP_Query( $args );
			?>

			<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
			
			<div class="sl-item">

			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
			$url = $thumb['0']; ?>
				
				<a href="<?php the_permalink(); ?>" style="background-image: url('<?php echo $url; ?>');">
					<article>
						<p class="a-tag"><?php the_field('show_estado'); ?></p>
						<h1 class="a-title"><?php the_title(); ?></h1>
					</article>
				</a>
				
			</div>

			<?php endwhile; endif; wp_reset_postdata(); ?>

		</section>
		

	</div>

<?php get_footer(); ?>