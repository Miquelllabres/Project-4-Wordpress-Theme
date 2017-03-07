
<?php
/**
 * The contact template file.
 * Template Name:Find-us
 * @package Inhabitent
 */

get_header(); ?>

			<div id="find" class="featured-image-wrapper">
				<div class="main">
					<div><h1><?php the_title(); ?><h1></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.683305088019!2d-123.14035698431123!3d49.26344827932921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC+V6H!5e0!3m2!1sen!2sca!4v1488821661123" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					<div>
					<h2><?php echo get_field( 'header1') ?></h2>
					<div class="comments commentsWidth">
						<p><?php echo get_field( 'content') ?></p>
					</div>
					<div class="postC">
							<h2><?php echo get_field( 'header_2') ?></h2>
					</div>
					<div class="postC">
						<?php echo do_shortcode("[wpforms id='".get_field("header_3")."']");?>
					</div>

						
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>



<?php get_footer(); ?>