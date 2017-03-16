<?php
add_action('init', 'register_contact_form7_data', 99);
function register_contact_form7_data(){
    global $kc;
    if( function_exists('kc_add_map') ){

        $cf7 = get_posts( 'post_type="wpcf7_contact_form"&numberposts=-1' );

        $contact_forms = array();
        if ( $cf7 ) {
            foreach ( $cf7 as $cform ) {
                $contact_forms[ $cform->ID ] = $cform->post_title;
            }
        } else {
            $contact_forms[ __( 'No contact forms found', 'starter' ) ] = 0;
        }

    $kc->add_map(array(
            'thm_contact_form7' => array(
                'name'        => 'Contact Form7',
                'description' => 'Contact Form7 shortcode of the theme',
                'icon'        => 'sl-envelope-open',
                'category'    => 'Starter',
                'description'   => esc_html__('Only for Pro Version', 'starter'),
                'css_box'     => true,
                'params'      => array(
                    array(
                        'type'          => 'checkbox',
                        'description'   => esc_html__('Only for Pro Version', 'starter'),
                        //'name'          => 'title_layout',
                        'options'       => array(
                            //'classic' => get_template_directory_uri()  . '/lib/addons/image/title/3.png',
                        ),
                        'value'         => 'classic'
                    ), 
                    )
                )
        ));
    }
  }


