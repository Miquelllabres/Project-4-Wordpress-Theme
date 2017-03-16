<?php
/**
 * The template for displaying the footer.
 * Template Name:Footer
 * @package Inhabitent
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
			<div id="footer">
	<div class="box">
		<div class="box1 Margin">		
			<div>
			<p class="uppercase orange ">contact info</p>
			<p><i class="fa fa-envelope-o"></i> info@inhabitent.com</p>
			<p><i class="fa fa-phone"></i>778-456-7891</p>
			<ul class="white">
				<li><i class="fa fa-facebook-square"></i></li>
				<li><i class="fa fa-twitter-square"></i></li>
				<li><i class="fa fa-google-plus-square"></i></li>
			</ul>

			</div>
			<div>
			<p class="uppercase orange">business hours</p>
			<p><span>Monday-Friday:</span> 9am to 5 pm</p>
			<p><span>Saturday:</span> 10am to 2pm</p>
			<p><span>Sunday:</span> Closed</p>
			</div>
		</div>
		
		
		<p class="footerImage MarginImage"></p>
			
	</div>
	<div >
	<div class="copyright uppercase white miniMargin">copyright @ 2016 inhabitent</div>
	
</div>

				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
