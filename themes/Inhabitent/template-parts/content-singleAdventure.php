
<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent
 */

?>

<article class="singleadventure" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
			<header class="entry-header">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
			</header>	
			<div class="box">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="entry-meta uppercase">
				 <?php red_starter_posted_by(); ?>
				</div><!-- .entry-meta -->
			<!-- .entry-header -->


			<div class="entry-content">
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
			<footer class="entry-footer">
				<?php red_starter_entry_footer(); ?>
			</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
