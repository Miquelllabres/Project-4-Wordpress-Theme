<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */
if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

/**
 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
 *
 * @param  CMB2 object $cmb CMB2 object
 *
 * @return bool             True if metabox should show
 */






add_action( 'cmb2_admin_init', 'custom_meta_courses' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function custom_meta_courses() {
	$prefix = 'course_meta';

	/**
	 * Repeatable Field Groups
	 */
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Course Meta', 'cmb2' ),
		'object_types' => array( 'events'),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_settings_question_correct',
		'type'        => 'text',
		'description' => __( 'correct question response', 'cmb2' ),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_settings_question_incorrect',
		'type'        => 'text',
		'description' => __( 'incorrect question response', 'cmb2' ),
	) );


	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'demo',
		'type'        => 'group',
		'description' => __( 'Generates a quiz', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'Slide {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Another Slide', 'cmb2' ),
			'remove_button' => __( 'Remove Slide', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */



	 $cmb_group->add_group_field( $group_field_id, array(
 		'name'       => __( 'slide Type', 'cmb2' ),
 		'id'         => 'slide-type',
 		'type'       => 'select',
		'options'    => array (
			'video'=>'video',
			'content'=>'content',
			'question'=>'question'
		)
 	) );
	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'slide Title', 'cmb2' ),
		'id'         => 'title',
		'type'       => 'text',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'        => __( 'Description', 'cmb2' ),
		'description' => __( 'Write a short description for this slide', 'cmb2' ),
		'id'          => 'description',
		'type'        => 'wysiwyg',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Upload Asset', 'cmb2' ),
		'description' => __( 'Upload an image of video for this slide', 'cmb2' ),
		'id'   => 'image',
		'type' => 'file',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Image Caption', 'cmb2' ),
		'id'   => 'image_caption',
		'type' => 'text',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Question', 'cmb2' ),
		'id'   => 'question',
		'type' => 'wysiwyg',
	) );
	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Possible Anwsers', 'cmb2' ),
		'id'   => 'questionAnwsers',
		'type' => 'text',
		'repeatable' => true
	) );
	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Anwser', 'cmb2' ),
		'id'   => 'anwser',
		'type' => 'text',
	) );
}


add_action( 'cmb2_admin_init', 'yourprefix_register_theme_options_metabox' );
/**
 * Hook in and register a metabox to handle a theme options page
 */
function yourprefix_register_theme_options_metabox() {

	$option_key = 'yourprefix_theme_options';

	/**
	 * Metabox for an options page. Will not be added automatically, but needs to be called with
	 * the `cmb2_metabox_form` helper function. See wiki for more info.
	 */
	$cmb_options = new_cmb2_box( array(
		'id'      => $option_key . 'page',
		'title'   => __( 'Theme Options Metabox', 'cmb2' ),
		'hookup'  => false, // Do not need the normal user/post hookup
		'show_on' => array(
			// These are important, don't remove
			'key'   => 'options-page',
			'value' => array( $option_key )
		),
	) );

	/**
	 * Options fields ids only need
	 * to be unique within this option group.
	 * Prefix is not needed.
	 */
	$cmb_options->add_field( array(
		'name'    => __( 'Site Background Color', 'cmb2' ),
		'desc'    => __( 'field description (optional)', 'cmb2' ),
		'id'      => 'bg_color',
		'type'    => 'colorpicker',
		'default' => '#ffffff',
	) );

}
