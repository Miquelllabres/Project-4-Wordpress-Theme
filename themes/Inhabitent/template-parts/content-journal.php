journal
<?php
/**
 * Template part for displaying journals.
 *
 * @package Inhabitent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php 
			    global $post; 
	    		 $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 
	    		 	array( 5600,1000 ), false, '' ); ?>
			<div id="journa" style=" background: url(<?php echo $src[0]; ?> )center bottom !important ;background-size:cover !important;" >

				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		
		<?php endif; ?>
		

			</div>
			
		<?php endif; ?>

		
	</header><!-- .entry-header -->

	<div class="journal-content">
		<?php the_excerpt(); ?>
		<a href="<?php echo get_permalink( $post->ID ); ?>"><input type="text" value="READ MORE &rarr;"></a>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
