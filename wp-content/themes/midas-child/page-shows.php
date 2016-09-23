<?php
/*
	Template Name: Shows
*/
?>
<?php get_header(); ?>

	<div class="site-content">


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
