<?php

add_action( 'cmb2_admin_init', 'custom_meta_students' );

function custom_meta_students() {
	$prefix = 'student_meta';

	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'student_info',
		'title'        => __( 'Student Info', 'cmb2' ),
		'object_types' => array( 'students'),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_graduated_from',
		'type'        => 'text',
		'description' => __( 'Course student graduated from', 'cmb2' ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_working_with',
		'type'        => 'file',
		'description' => __( 'Working with, upload logo', 'cmb2' ),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_working_with_title',
		'type'        => 'text',
		'description' => __( 'name of the company that the student is working with', 'cmb2' ),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_testimonial',
		'type'        => 'wysiwyg',
		'description' => __( 'testimonial from the student', 'cmb2' ),
	) );

}
