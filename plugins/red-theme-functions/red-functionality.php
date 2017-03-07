<?php
/**
  * @package   Red Academy CPT function
  * @author    Cody Collicott
  * @license   GPL-2.0+
  * @copyright 2016 Red Academy
  *
  * @wordpress-plugin
  * Plugin Name: Red Academy CPT function
  * Description: Register custom post types, taxonomies and meta for use in the theme
  * Version:     1.0.0
  * Author:      Cody Collicott
  * License:     GPL-2.0+
  * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

// If this file is called directly, abort.

if ( ! defined( 'WPINC' ) ) {
  die;
}

/**
  * Define plugin directory
  *
  * @since 1.0.0
*/

define( 'RF_DIR', dirname( __FILE__ ) );

/**
  * Custom meta
  *
  * @since 1.0.0
*/

include_once( RF_DIR . '/lib/custom_meta/init.php' );
include_once( RF_DIR . '/lib/custom_meta/ready-lib.php' );

/**
  * Custom post types
  *
  * @since 1.0.0
*/

// include_once( RF_DIR . '/lib/post_type/post-types.php' );
include_once( RF_DIR . '/lib/Tax-meta-class/Tax-meta-class.php' );
include_once( RF_DIR . '/lib/post_type/taxonomies.php' );

/**
  * Geo Code
  *
  * @since 1.0.0
*/

// include_once( RF_DIR . '/lib/geo/geo-function.php' );
