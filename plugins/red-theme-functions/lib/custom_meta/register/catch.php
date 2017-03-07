<?php

/*
catch.php
since v1.0.0
this serves as the resgister meta for multiple post_types
*/

add_action( 'cmb2_admin_init', 'custom_banner_catch' );

function custom_banner_catch() {

	/* PRICE ALERT options */
	$prefix = 'price_alert';

	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'info',
		'title'        => __( 'Price Alert', 'cmb2' ),
		'object_types' => array( 'events','page','post','courses'),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_title',
		'type'        => 'text',
		'description' => __( 'Section that will show in red (left-hand side)', 'cmb2' ),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_description',
		'type'        => 'text',
		'description' => __( 'Section that will show to the right of the title', 'cmb2' ),
	) );
	/* END PRICE ALERT OPTIONS */

	/* START BANNER OPTIONS */
	$prefix = 'banner_meta';

	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'banner_info',
		'title'        => __( 'Banner Info', 'cmb2' ),
		'object_types' => array( 'events','page','post','courses'),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_banner_image',
		'type'        => 'file',
		'description' => __( 'Banner Image', 'cmb2' ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_gravity_form',
		'type'        => 'text',
		'description' => __( 'Gravity Form ID', 'cmb2' ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_banner_title',
		'type'        => 'text',
		'description' => __( 'Banner Title', 'cmb2' ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_banner_content',
		'type'        => 'textarea',
		'description' => __( 'Banner Content', 'cmb2' ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_banner_cta_buttons',
		'type'        => 'group',
		'description' => __( 'Banner CTA Buttons', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'Banner Button {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Another button', 'cmb2' ),
			'remove_button' => __( 'Remove button', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Button Title', 'cmb2' ),
		'id'         => 'title',
		'type'       => 'text',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Button Link', 'cmb2' ),
		'id'         => 'link',
		'type'       => 'text',
	) );

}
