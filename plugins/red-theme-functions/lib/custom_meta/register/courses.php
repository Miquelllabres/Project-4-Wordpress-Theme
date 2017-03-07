<?php

add_action( 'cmb2_admin_init', 'custom_meta_courses' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function custom_meta_courses() {
	$prefix = 'course_meta';

	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'course_info',
		'title'        => __( 'Course Info', 'cmb2' ),
		'object_types' => array( 'courses'),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_course_length',
		'type'        => 'select',
		'options'     => array('24 Weeks'=>'24 Weeks','12 Weeks'=>'12 Weeks'),
		'description' => __( 'Course Length', 'cmb2' ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_location',
		'type'        => 'select',
		'options'     => array('Toronto'=>'Toronto','Vancouver'=>'Vancouver'),
		'description' => __( 'Location', 'cmb2' ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_archive_image',
		'type'        => 'file',
		'description' => __( 'upload a card image to use on the archive pages', 'cmb2' ),
	) );

	//////////////////////////////////////////////////////////

	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'course_overview',
		'title'        => __( 'Course Overview', 'cmb2' ),
		'object_types' => array( 'courses'),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_course_overview_title',
		'type'        => 'text',
		'description' => __( 'Overview Title', 'cmb2' ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_course_overview_content',
		'type'        => 'wysiwyg',
		'description' => __( 'Overview Content', 'cmb2' ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_course_overview_items',
		'type'        => 'group',
		'description' => __( 'Course Overview Items', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'overview item {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Another item', 'cmb2' ),
			'remove_button' => __( 'Remove item', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Item Title', 'cmb2' ),
		'id'         => 'title',
		'type'       => 'text',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Item Content', 'cmb2' ),
		'id'         => 'content',
		'type'       => 'text',
	) );

	//////////////////////////////////////////////////////////

	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'course_cirrculum',
		'title'        => __( 'Course Cirrculum', 'cmb2' ),
		'object_types' => array( 'courses'),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_course_cirrculum_title',
		'type'        => 'text',
		'description' => __( 'Cirrculum Title', 'cmb2' ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_course_cirrculum_overview',
		'type'        => 'group',
		'description' => __( 'Circulumn Overview', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'Circulumn item {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Another item', 'cmb2' ),
			'remove_button' => __( 'Remove item', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Item Title', 'cmb2' ),
		'id'         => 'title',
		'type'       => 'text',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Item Content', 'cmb2' ),
		'id'         => 'content',
		'type'       => 'textarea',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Item Icon', 'cmb2' ),
		'id'         => 'icon',
		'type'       => 'select',
		'options'    => array(
			'fa-html5'  => 'html5'
		)
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Enter a custom icon (i.e: fa-address-book)', 'cmb2' ),
		'id'         => 'custom-icon',
		'type'       => 'text',
	) );

	//////////////////////////////////////////////////////////

	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . '_daily_schedule',
		'title'        => __( 'Daily Schedule', 'cmb2' ),
		'object_types' => array( 'courses'),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_schedule_title',
		'type'        => 'text',
		'description' => __( 'Daily Schedule Title', 'cmb2' ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_schedule_content',
		'type'        => 'textarea',
		'description' => __( 'Daily Schedule Content', 'cmb2' ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_daily_schedule',
		'type'        => 'group',
		'description' => __( 'Daily Schedule', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'Daily item {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Another item', 'cmb2' ),
			'remove_button' => __( 'Remove item', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Item Title', 'cmb2' ),
		'id'         => 'title',
		'type'       => 'text',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Item Content', 'cmb2' ),
		'id'         => 'content',
		'type'       => 'text',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Item picture', 'cmb2' ),
		'id'         => 'picture',
		'type'       => 'file',
	) );



}
