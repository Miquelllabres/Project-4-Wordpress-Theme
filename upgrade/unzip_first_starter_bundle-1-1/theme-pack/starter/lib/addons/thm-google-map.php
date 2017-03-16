<?php
add_action('init', 'register_thm_google_map_data', 99);
function register_thm_google_map_data(){
    global $kc;
    if( function_exists('kc_add_map') ){

    $kc->add_map(array(
            'thm_google_map' => array(
                'name'        => 'Google Map',
                'description' => 'Google Map shortcode of the theme',
                'icon'        => 'fa-map',
                'category'    => 'Starter',
                'css_box'     => true,
                'params'      => array(
                    'General' => array(
                            array(
                                'type'          => 'checkbox',
                                'description'   => esc_html__('Only for Pro Version', 'starter'),
                                'name'          => 'title_layout',
                                'options'       => array(
                                    //'classic' => get_template_directory_uri()  . '/lib/addons/image/title/3.png',
                                ),
                                'value'         => 'classic'
                            ), 
                        ),
                    )
                )
        ));
    }
  }

