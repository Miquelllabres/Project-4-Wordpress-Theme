<?php

add_action( 'cmb2_admin_init', 'custom_meta_teachers' );

function custom_meta_teachers() {
	$prefix = 'student_meta';

	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'teacher_info',
		'title'        => __( 'Teacher Info', 'cmb2' ),
		'object_types' => array( 'instructors'),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_job_title',
		'type'        => 'text',
		'description' => __( 'Instructor Job title', 'cmb2' ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_course_focus',
		'type'        => 'text',
		'description' => __( 'Course Focus', 'cmb2' ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_city',
		'type'        => 'select',
		'description' => __( 'City for the instructor', 'cmb2' ),
		'options'     => array('toronto'=>'toronto','vancouver'=>'vancouver')
	) );

}
