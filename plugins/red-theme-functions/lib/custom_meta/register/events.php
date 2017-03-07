<?php

add_action( 'cmb2_admin_init', 'custom_meta_events' );

function custom_meta_events() {
	$prefix = 'events_meta';
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'event_info',
		'title'        => __( 'Event Info', 'cmb2' ),
		'object_types' => array( 'events'),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_start_date',
		'type'        => 'text',
		'description' => __( 'Start Date', 'cmb2' ),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_end_date',
		'type'        => 'text',
		'description' => __( 'End Date', 'cmb2' ),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_id',
		'type'        => 'text',
		'description' => __( 'Event ID', 'cmb2' ),
	) );
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'ticket_info',
		'title'        => __( 'Ticket Info', 'cmb2' ),
		'object_types' => array( 'events'),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_ticket_price',
		'type'        => 'text',
		'description' => __( 'Ticket Price', 'cmb2' ),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_ticket_sold',
		'type'        => 'text',
		'description' => __( 'Ticket Sold', 'cmb2' ),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_ticket_avail',
		'type'        => 'text',
		'description' => __( 'Ticket available', 'cmb2' ),
	) );
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'venue_info',
		'title'        => __( 'Venue Info', 'cmb2' ),
		'object_types' => array( 'events'),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_venue_city',
		'type'        => 'text',
		'description' => __( 'Venue City', 'cmb2' ),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_venue_name',
		'type'        => 'text',
		'description' => __( 'Venue Name', 'cmb2' ),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_venue_country',
		'type'        => 'text',
		'description' => __( 'Venue Country', 'cmb2' ),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_venue_address',
		'type'        => 'text',
		'description' => __( 'Venue Address', 'cmb2' ),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_venue_lat',
		'type'        => 'text',
		'description' => __( 'Venue Lat', 'cmb2' ),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . '_venue_long',
		'type'        => 'text',
		'description' => __( 'Venue Long', 'cmb2' ),
	) );

}
