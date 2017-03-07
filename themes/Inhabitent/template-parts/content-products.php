<?php
/**
 * Template part for displaying single products.
 *
 * @package Inhabitent
 */

?>

<article class="SingleProduct" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="single">

	<?php if ( has_post_thumbnail() ) : ?>
			<?php 
			    global $post; 
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 
					array( 5600,1000 ), false, '' ); 
			?>
	<?php endif; ?>

	<div class="singleP" style=" background:url(<?php echo $src[0]; ?> )center !important ;background-size:cover !important;">
		
	</div>
		

		
<div class="entry-content">
		<div class="entry-meta">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<h2><?php	setlocale(LC_MONETARY, 'en_US');
					echo money_format('%.2n', get_field( 'price') ) ;  ?> </h2>
		</div><!-- .entry-meta -->
	<!-- .entry-header -->

	<div >
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<div class="social">
	<button style="font-size:16px"><i class="fa fa-facebook"></i>LIKE</button>
	<button style="font-size:16px"><i class="fa fa-twitter"></i>TWEET</button>
	<button style="font-size:16px"><i class="fa fa-pinterest"></i>PIN</button>


	</div>
<div>
</header>
	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
