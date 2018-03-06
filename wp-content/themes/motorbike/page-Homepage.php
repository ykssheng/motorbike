<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();  ?>

<div id="primary">
	<main id="main" class="site-main" role="main">
		<div class="wrap">
			
			<section id="section_new_arrivals">
				<h2>New Arrivals</h2>

				<?php
					$new_arrivals = get_field('new_arrivals');

					if($new_arrivals):
						foreach($new_arrivals as $post): 
							setup_postdata($post); ?>
						
						<div class="new_arrivals_link col-lg-3 col-md-6 col-12">
							<div class="new_arrivals_wrapper">
								<div class="image_wrapper">
									<?php the_post_thumbnail( 'medium' ); ?>
									
									<!-- <img src="<?php the_post_thumbnail_url('medium'); ?>"> -->
								</div>
								<h2><?php the_title(); ?></h2>
								<a href="<?php the_permalink(); ?>" ><div class="custom_button">View Details</div></a>
							</div>
						</div>

				<?php
					endforeach;
					wp_reset_postdata();
					endif; ?>
			</section>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer(); ?>