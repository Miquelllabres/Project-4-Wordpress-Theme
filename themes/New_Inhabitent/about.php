<?php
/**
 * Template Name:About

 * @package Inhabitent
 */

get_header(); ?>
<?php if ( has_post_thumbnail() ) : 	
	    global $post; 
	$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); 
		endif; ?>

<div class="aboutPicture uppercase" style=" background:linear-gradient(rgba(0,0,0,0.4),transparent),  url(<?php echo $src[0]; ?> )center !important ;background-size:cover,cover !important;">
<div><h1><?php the_title(); ?></h1></div>
	
</div>

<div id="ABOUT">
<div  class="wrap">

<h2><?php echo get_field( 'header1') ?></h2>
<div><p><?php echo get_field( 'content1') ?></p></div>
<h2><?php echo get_field( 'header2') ?></h2>
<div><p><?php echo get_field( 'content2') ?></p></div>
	

</div>
</div>

<?php get_footer();?>