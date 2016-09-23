<?php get_header(); ?>
    
	<section class="herounit hero-home">
		<div class="herounit-content">
			<h1><?php the_field('main_hero'); ?></h1>
		</div>
	</section><!-- Hero -->

	<div class="wrapper">

		<section class="clearfix sellpoints">
			<h1 class="hidden">Why you need to buy tickets?</h1>
			
			<div class="point-container">				

				<?php if(get_field('selling_points')): ?>

				<?php while(has_sub_field('selling_points')): ?>

				<div class="point">
					<div class="point-body">
						<h2><?php the_sub_field('selling_name'); ?></h2>
						<p><?php the_sub_field('selling_body'); ?></p>
					</div>
				</div>

				<?php endwhile; ?>

				<?php endif; ?>

			</div>
		</section><!-- end of sellpoints -->

		 <section class="welcome clearfix">
			<h3><?php the_field('banner_name'); ?><br> –<br></h3> <h5><?php the_field('banner_first_line'); ?><br><?php the_field('banner_second_line'); ?></h5>
			<p><?php the_field('banner_text'); ?></p>

			<!-- <div class="infovid" style="background-image: url('<?php the_field('video_screenshot'); ?>');">
				<div class="infoid-play">
					<a title="The MIDAS Theatre Teaser" target="_blank" href="http://www.youtube.com/watch?v=<?php the_field('video_link'); ?>"><i class="fa fa-youtube-play"></i></a>
				</div>
			</div>

			<div class="infotext">
				<h1><?php the_field('video_title'); ?></h1>
				<p><?php the_field('video_text'); ?></p>
			</div> -->
		</section> 
		

		

		<section class="recent-article clearfix">
			<?php

			$the_query = new WP_Query( 'posts_per_page=1' ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
			<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.', 'midas' ); ?></p>
			<?php endif; ?>
		</section>

		<section class="feedback clearfix">	
			<h1>What People Are Saying</h1>			    

			<?php if(get_field('testimonial')): ?>

			<?php while(has_sub_field('testimonial')): ?>

				<div class="testimonial">

					<div class="testimonial-body">
						<div class="says"><p>&ldquo;<?php the_sub_field('testimonial_text'); ?>&rdquo;</p></div>
						<div class="source">- <?php the_sub_field('testimonial_author'); ?></div>
					</div>

				</div>

			<?php endwhile; ?>

			<?php endif; ?>

		</section>

		<section class="newsletter clearfix">

			<h1>Newsletter</h1>

			<p>Sign up for our monthly updates to make sure you don’t miss our upcoming shows!</p>

			<?php the_content(); ?>

		</section>

<section class="ad-friends clearfix">
	<img src="/wp-content/themes/midas/images/flying_banana.png">
	<h3>Welcome to English drama courses for children and adults!</h3>
	<p>Discover the meaning of “action” with professional native English speaking actors! Drama teaches confidence and self discipline, it improves language skills at all levels, and it is an extremely sociable activity. We use several talented teachers with different skills in order to give our students a well-rounded program. Martin Cooke, Director, Producer - Masters degree in theatre directing from the University of East Anglia; Actor, director and co-founder of the ‘Theatre of Love’.</p>
	<br>
	<p><strong>Natasha Cooke </strong>+7 916 750 59 60 <a href="mailto:natacha.cooke@gmail.com">natacha.cooke@gmail.com</a></p>
	<p><strong>Sergei Bondarenko </strong>+7 925 701 79 28 <a href="mailto:taffsergei@gmail.com">taffsergei@gmail.com</a></p>
</section>



	</div>

<?php get_footer(); ?>