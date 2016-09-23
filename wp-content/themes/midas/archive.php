<?php get_header(); ?>
    
	<section class="herounit hero-pages"></section><!-- Hero -->

	<div class="wrapper">

	    	<section class="clearfix header-pages">
				<h1><span><?php wp_title(''); ?></span> Blog Post</h1>
			</section><!-- Promo -->

			<div class="blog-main clearfix">
			
				<section class="recent-article">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="post-list">
						<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
						$url = $thumb['0']; ?>
						<a href="<?php the_permalink(); ?>" style="background-image: url('<?php echo $url; ?>');">
							<article id="post-<?php the_ID(); ?>">
								<p class="a-tag"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></p>
								<p class="a-date"><?php the_date( 'j F Y' ) ?></p>
								<h3><?php the_title(); ?></h3>
							</article>
						</a>
					</div>
					<?php endwhile; else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.', 'midas' ); ?></p>
					<?php endif; ?>

				</section>

				<section class="b-pagination">
				<nav>
					<?php echo custom_pagination(); ?>
				</nav>
			</section>

			<section class="b-p-aside clearfix">
			
				<ul id="sidebar">
					<?php dynamic_sidebar( 'gold-sidebar' ); ?>
				</ul>

			</section>

			</div>

	

	</div>

<?php get_footer(); ?>