<?php

add_action( 'admin_notices', 'starter_ads' );
function starter_ads()
{
	$output = '<a href="https://www.themeum.com/wordpress/themes/starter-pro-responsive-onepage-wordpress-theme/"><img style="max-width:100%;" src="http://demo.themeum.com/demo-image/starter-ads-large.jpg"></a>';

	add_settings_error('starter_ads', esc_attr( 'settings_updated' ), $output, 'notice-warning');

	settings_errors( 'starter_ads' );
}

function starter_ads_customize_register( $wp_customize ) {
	require_once(get_template_directory() . '/lib/customizer/libs/starterads-section.php' );


   $wp_customize->add_section( new Starter_Pro_Ads_Section( $wp_customize, 'pro_ads', array(
		'title'      => 'Starter Pro',
		'priority'   => 9999,
	) ) );

   $wp_customize->add_setting( new WP_Customize_Filter_Setting( $wp_customize, 'pro_ads_setting', array() ) );

   $wp_customize->add_control( 'pro_ads_id', array(
		'theme'    => 'Starter Pro',
		'section'  => 'pro_ads',
		'settings' => 'pro_ads_setting',
	) );
}
add_action( 'customize_register', 'starter_ads_customize_register' );