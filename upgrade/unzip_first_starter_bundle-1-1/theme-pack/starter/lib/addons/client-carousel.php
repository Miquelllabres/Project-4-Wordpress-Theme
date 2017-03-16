<?php
add_action('init', 'themeum_clinet_carousel_addons', 99);

function themeum_clinet_carousel_addons(){
    global $kc;
    if (function_exists('kc_add_map')) 
    { 
        kc_add_map(
            array(

                'thm_client_carousel'    => array(
                    'name'          => esc_html__( 'Client Carousel', 'starter' ),
                    'icon'          => 'fa-sliders',
                    'category'      => 'Starter',
                    'description' => 'Only for Pro Version',
                    'nested'        => true,
                    'accept_child'  => 'kc_single_image',
                    'params' => array(
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
            )
        ); // End add map

    } // End if
}





