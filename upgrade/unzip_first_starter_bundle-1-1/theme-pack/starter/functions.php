<?php

define('STARTER_NAME', wp_get_theme()->get( 'Name' ));
define('STARTER_CSS', get_template_directory_uri().'/css/');
define('STARTER_JS', get_template_directory_uri().'/js/');


/*-------------------------------------------
*          Include MetaBox
*--------------------------------------------*/
if((!class_exists('RWMB_Loader'))&&(!defined('RWMB_VER'))){
require_once (get_template_directory().'/lib/meta-box/meta-box.php');
}
require_once (get_template_directory().'/lib/meta_box.php');


/*-------------------------------------------
*           Include TGM Plugins
*--------------------------------------------*/
require_once( get_template_directory()  . '/lib/class-tgm-plugin-activation.php');

/*-------------------------------------------
*           Customizer
*--------------------------------------------*/
require_once( get_template_directory()  . '/lib/customizer/libs/googlefonts.php');
require_once( get_template_directory()  . '/lib/customizer/customizer.php');


/*-------------------------------------------
*           KingComposer Shortcode
*--------------------------------------------*/
require_once( get_template_directory()  . '/lib/addons/thm-classic-slider.php' );
require_once( get_template_directory()  . '/lib/addons/team-carousel.php' );
require_once( get_template_directory()  . '/lib/addons/themeum-title.php' );
require_once( get_template_directory()  . '/lib/addons/themeum-team.php' );
require_once( get_template_directory()  . '/lib/addons/themeum-testimonial.php' );
require_once( get_template_directory()  . '/lib/addons/testimonal-carousel.php' );
require_once( get_template_directory()  . '/lib/addons/themeum-latest-post.php' );
require_once( get_template_directory()  . '/lib/addons/thm-contact-form7.php' );
require_once( get_template_directory()  . '/lib/addons/thm-google-map.php' );
require_once( get_template_directory()  . '/lib/addons/client-carousel.php' );
require_once( get_template_directory()  . '/lib/addons/themeum-video-popup.php' );
require_once( get_template_directory()  . '/lib/addons/themeum-project-addons.php' );

/*-------------------------------------------
*          Widget
*--------------------------------------------*/
require_once( get_template_directory()  . '/lib/widgets/image_widget.php' );
require_once( get_template_directory()  . '/lib/widgets/themeum_social_share.php' );


/*-------------------------------------------*
 *				Register Navigation
 *------------------------------------------*/
register_nav_menus( array(
	'primary' => esc_html__( 'Primary Menu', 'starter' ),
) );


/*-------------------------------------------*
 *				title tag
 *------------------------------------------*/

add_action( 'after_setup_theme', 'starterpro_slug_setup' );
if(!function_exists( 'starterpro_slug_setup' )):
    function starterpro_slug_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-formats', array( 'link', 'quote' ) );
    }
endif;


/*-------------------------------------------*
 *				navwalker
 *------------------------------------------*/
require_once( get_template_directory()  . '/lib/menu/admin-megamenu-walker.php');
require_once( get_template_directory()  . '/lib/menu/meagmenu-walker.php');
require_once( get_template_directory()  . '/lib/menu/mobile-navwalker.php');


/*-------------------------------------------*
 *				Startup Register
 *------------------------------------------*/
require_once( get_template_directory()  . '/lib/main-function/themeum-register.php');


/*-------------------------------------------------------
 *			Themeum Core
 *-------------------------------------------------------*/
require_once( get_template_directory()  . '/lib/main-function/themeum-core.php');

/*-------------------------------------------------------
 *			starter legacy
 *-------------------------------------------------------*/
require_once( get_template_directory()  . '/lib/main-function/starter-legacy.php');


/*-----------------------------------------------------
 * 				Custom Excerpt Length
 *----------------------------------------------------*/
if(!function_exists('starterpro_excerpt_max_charlength')):
	function starterpro_excerpt_max_charlength($charlength) {
		$excerpt = get_the_excerpt();
		$charlength++;

		if ( mb_strlen( $excerpt ) > $charlength ) {
			$subex = mb_substr( $excerpt, 0, $charlength - 5 );
			$exwords = explode( ' ', $subex );
			$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
			if ( $excut < 0 ) {
				return mb_substr( $subex, 0, $excut );
			} else {
				return $subex;
			}

		} else {
			return $excerpt;
		}
	}
endif;


