<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package Inhabitent
 */

?>

<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="search">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>


		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<div>
	<a href="<?php echo get_permalink( $post->ID ); ?>">
		<button>READ MORE &rarr;</button></a>
	</div>
</article><!-- #post-## -->
