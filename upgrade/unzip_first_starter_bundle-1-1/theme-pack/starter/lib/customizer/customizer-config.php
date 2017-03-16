<?php

$panel_to_section = array(
	'id'           => 'starterpro_panel_options',
	'title'        => esc_html( 'Starter Options', 'starter' ),
	'description'  => esc_html__( 'Starter Theme Options', 'starter' ),
	'priority'     => 10,
	'sections'     => array(

		array(
			'id'              => 'header_setting',
			'title'           => esc_html__( 'Header Settings', 'starter' ),
			'description'     => esc_html__( 'Header Settings', 'starter' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(
				array(
					'settings' => 'head_style',
					'label'    => esc_html__( 'Select Header Style', 'starter' ),
					'type'     => 'select',
					'priority' => 10,
					'default'  => 'solid',
					'choices'  => array(
						'solid' => esc_html( 'Solid Header', 'starter' ),
					)
				),

				array(
					'settings' => 'header_fixed',
					'label'    => esc_html__( 'Sticky Header', 'starter' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => false,
				),				
			)//fields
		),//header_setting

		array(
			'id'              => 'logo_setting',
			'title'           => esc_html__( 'All Logo & favicon', 'starter' ),
			'description'     => esc_html__( 'All Logo & favicon', 'starter' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(
				array(
					'settings' => 'logo_style',
					'label'    => esc_html__( 'Select Header Style', 'starter' ),
					'type'     => 'select',
					'priority' => 10,
					'default'  => 'logoimg',
					'choices'  => array(
						'logoimg' => esc_html( 'Logo image', 'starter' ),
						'logotext' => esc_html( 'Logo text', 'starter' ),
					)
				),
				array(
					'settings' => 'logo',
					'label'    => esc_html__( 'Upload Logo', 'starter' ),
					'type'     => 'upload',
					'priority' => 10,
					'default' => get_template_directory_uri().'/images/logo.png',
				),
				array(
					'settings' => 'logo_text',
					'label'    => esc_html__( 'Use your Custom logo text', 'starter' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => 'Starter',
				),				
			)//fields
		),//logo_setting
		
		array(
			'id'              => 'sub_header_banner',
			'title'           => esc_html__( 'Sub Header Banner', 'starter' ),
			'description'     => esc_html__( 'sub header banner', 'starter' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(
				array(
					'settings' => 'sub_header_banner_img',
					'label'    => esc_html__( 'Sub-Header Background Image', 'starter' ),
					'type'     => 'image',
					'priority' => 10,
				),
				array(
					'settings' => 'sub_header_banner_color',
					'label'    => esc_html__( 'Sub-Header Background Color', 'starter' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#333',
				),

			)//fields
		),//sub_header_banner


		array(
			'id'              => 'typo_setting',
			'title'           => esc_html__( 'Typography Setting', 'starter' ),
			'description'     => esc_html__( 'Typography Setting', 'starter' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(

				//body font
				array(
					'settings' => 'body_google_font',
					'label'    => esc_html__( 'Select Google Font', 'starter' ),
					'type'     => 'select',
					'default'  => 'Raleway',
					'choices'  => get_google_fonts(),
					'google_font' => true,
					'google_font_weight' => 'body_font_weight',
					'google_font_weight_default' => '400'
				),
				array(
					'settings' => 'body_font_size',
					'label'    => esc_html__( 'Body Font Size', 'starter' ),
					'type'     => 'number',
					'default'  => '14',
				),

				//Menu font
				array(
					'settings' => 'menu_google_font',
					'label'    => esc_html__( 'Select Google Font', 'starter' ),
					'type'     => 'select',
					'default'  => 'Lato',
					'choices'  => get_google_fonts(),
					'google_font' => true,
					'google_font_weight' => 'menu_font_weight',
					'google_font_weight_default' => '400'
				),
				array(
					'settings' => 'menu_font_size',
					'label'    => esc_html__( 'Menu Font Size', 'starter' ),
					'type'     => 'number',
					'default'  => '14',
				),


				//Heading 1
				array(
					'settings' => 'h1_google_font',
					'label'    => esc_html__( 'Heading1 Google Font', 'starter' ),
					'type'     => 'select',
					'default'  => 'Lato',
					'choices'  => get_google_fonts(),
					'google_font' => true,
					'google_font_weight' => 'menu_font_weight',
					'google_font_weight_default' => '400'
				),
				array(
					'settings' => 'h1_font_size',
					'label'    => esc_html__( 'Heading1 Font Size', 'starter' ),
					'type'     => 'number',
					'default'  => '46',
				),


				//Heading 2
				array(
					'settings' => 'h2_google_font',
					'label'    => esc_html__( 'Heading2 Google Font', 'starter' ),
					'type'     => 'select',
					'default'  => 'Lato',
					'choices'  => get_google_fonts(),
					'google_font' => true,
					'google_font_weight' => 'menu_font_weight',
					'google_font_weight_default' => '400'
				),
				array(
					'settings' => 'h2_font_size',
					'label'    => esc_html__( 'Heading2 Font Size', 'starter' ),
					'type'     => 'number',
					'default'  => '36',
				),

				//Heading 3
				array(
					'settings' => 'h3_google_font',
					'label'    => esc_html__( 'Heading3 Google Font', 'starter' ),
					'type'     => 'select',
					'default'  => 'Lato',
					'choices'  => get_google_fonts(),
					'google_font' => true,
					'google_font_weight' => 'menu_font_weight',
					'google_font_weight_default' => '400'
				),
				array(
					'settings' => 'h3_font_size',
					'label'    => esc_html__( 'Heading3 Font Size', 'starter' ),
					'type'     => 'number',
					'default'  => '26',
				),

				//Heading 4
				array(
					'settings' => 'h4_google_font',
					'label'    => esc_html__( 'Heading4 Google Font', 'starter' ),
					'type'     => 'select',
					'default'  => 'Lato',
					'choices'  => get_google_fonts(),
					'google_font' => true,
					'google_font_weight' => 'menu_font_weight',
					'google_font_weight_default' => '400'
				),
				array(
					'settings' => 'h4_font_size',
					'label'    => esc_html__( 'Heading4 Font Size', 'starter' ),
					'type'     => 'number',
					'default'  => '18',
				),

				//Heading 5
				array(
					'settings' => 'h5_google_font',
					'label'    => esc_html__( 'Heading5 Google Font', 'starter' ),
					'type'     => 'select',
					'default'  => 'Lato',
					'choices'  => get_google_fonts(),
					'google_font' => true,
					'google_font_weight' => 'menu_font_weight',
					'google_font_weight_default' => '400'
				),
				array(
					'settings' => 'h5_font_size',
					'label'    => esc_html__( 'Heading5 Font Size', 'starter' ),
					'type'     => 'number',
					'default'  => '14',
				),

			)//fields
		),//typo_setting


		array(
			'id'              => 'layout_styling',
			'title'           => esc_html__( 'Layout & Styling', 'starter' ),
			'description'     => esc_html__( 'Layout & Styling', 'starter' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(
				array(
					'settings' => 'body_bg_color',
					'label'    => esc_html__( 'Body Background Color', 'starter' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#fff',
				),
				array(
					'settings' => 'major_color',
					'label'    => esc_html__( 'Major Color', 'starter' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#00aeef',
				),
				array(
					'settings' => 'hover_color',
					'label'    => esc_html__( 'Hover Color', 'starter' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#00a2e8',
				),

				array(
                    'settings'  => 'header-bg',
                    'type'      => 'rgba',
                    'label'     => __('Menu Background Color', 'starter'),
                    'default'   => 'rgba(0,0,0,0.8)',
                ),

				array(
					'settings' => 'button_color_title',
					'label'    => esc_html__( 'Button Color Settings', 'starter' ),
					'type'     => 'title',
					'priority' => 10,
				),
				
				array(
					'settings' => 'button_bg_color',
					'label'    => esc_html__( 'Background Color', 'starter' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#32aad6',
				),

				array(
					'settings' => 'button_hover_bg_color',
					'label'    => esc_html__( 'Hover Background Color', 'starter' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#00aeef',
				),
				array(
					'settings' => 'button_text_color',
					'label'    => esc_html__( 'Text Color', 'starter' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#fff',
				),
				array(
					'settings' => 'button_hover_text_color',
					'label'    => esc_html__( 'Hover Text Color', 'starter' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#fff',
				),
				# end button color section.

			)//fields
		),//Layout & Styling

		array(
			'id'              => 'social_media_settings',
			'title'           => esc_html__( 'Social Media', 'starter' ),
			'description'     => esc_html__( 'Social Media', 'starter' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(
				array(
					'settings' => 'wp_facebook',
					'label'    => esc_html__( 'Add Facebook URL', 'starter' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_twitter',
					'label'    => esc_html__( 'Add Twitter URL', 'starter' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_google_plus',
					'label'    => esc_html__( 'Add Goole Plus URL', 'starter' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_pinterest',
					'label'    => esc_html__( 'Add Pinterest URL', 'starter' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_youtube',
					'label'    => esc_html__( 'Add Youtube URL', 'starter' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_linkedin',
					'label'    => esc_html__( 'Add Linkedin URL', 'starter' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_instagram',
					'label'    => esc_html__( 'Add Instagram URL', 'starter' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_dribbble',
					'label'    => esc_html__( 'Add Dribbble URL', 'starter' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_behance',
					'label'    => esc_html__( 'Add Behance URL', 'starter' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_flickr',
					'label'    => esc_html__( 'Add Flickr URL', 'starter' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_vk',
					'label'    => esc_html__( 'Add Vk URL', 'starter' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_skype',
					'label'    => esc_html__( 'Add Skype URL', 'starter' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
			)//fields
		),//social_media

		array(
			'id'              => '404_settings',
			'title'           => esc_html__( '404 Page', 'starter' ),
			'description'     => esc_html__( '404 page background and text settings', 'starter' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(
				array(
					'settings' => 'errorbg',
					'label'    => esc_html__( 'Upload 404 Page Background Image', 'starter' ),
					'type'     => 'image',
					'priority' => 10,
				),
				array(
					'settings' => 'errorlogo',
					'label'    => esc_html__( 'Upload 404 Page logo Image', 'starter' ),
					'type'     => 'image',
					'priority' => 10,
				),
				array(
					'settings' => '404_title',
					'label'    => esc_html__( '404 Page Title', 'starter' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => esc_html__('Page Not Found - Lost Maybe?.', 'starter')
				),
				array(
					'settings' => '404_description',
					'label'    => esc_html__( '404 Page Description', 'starter' ),
					'type'     => 'textarea',
					'priority' => 10,
					'default'  => esc_html__('The page you are looking for was moved, removed, renamed or might never existed..', 'starter')
				),
				array(
					'settings' => '404_btn_text',
					'label'    => esc_html__( '404 Button Text', 'starter' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => esc_html__('Go Back Home', 'starter')
				),
			)
		),
		array(
			'id'              => 'blog_setting',
			'title'           => esc_html__( 'Blog Setting', 'starter' ),
			'description'     => esc_html__( 'Blog Setting', 'starter' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(

				array(
					'settings' => 'blog_intro_en',
					'label'    => esc_html__( 'Enable post content', 'starter' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => true,
				),
				array(
					'settings' => 'blog_post_text_limit',
					'label'    => esc_html__( 'Post character Limit', 'starter' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '150',
				),
				array(
					'settings' => 'blog_continue_en',
					'label'    => esc_html__( 'Enable Blog Readmore', 'starter' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => true,
				),
				array(
					'settings' => 'blog_continue',
					'label'    => esc_html__( 'Continue Reading', 'starter' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => 'Read More',
				),
			)//fields
		),//blog_setting

		array(
			'id'              => 'footer_setting',
			'title'           => esc_html__( 'Footer Setting', 'starter' ),
			'description'     => esc_html__( 'Footer Setting', 'starter' ),
			'priority'        => 10,
			'fields'         => array(
		
				array(
					'settings' => 'footer_share',
					'label'    => esc_html__( 'Enable Footer Share', 'starter' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => true,
				),
				array(
					'settings' => 'copyright_en',
					'label'    => esc_html__( 'Enable Copyright Text', 'starter' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => true,
				),			
				array(
					'settings' => 'copyright_text',
					'label'    => esc_html__( 'Copyright Text', 'starter' ),
					'type'     => 'textarea',
					'priority' => 10,
					'default'  => '',
				),
			)//fields
		),//footer_setting

	),
);//starterpro_panel_options


$framework = new THM_Customize( $panel_to_section );
