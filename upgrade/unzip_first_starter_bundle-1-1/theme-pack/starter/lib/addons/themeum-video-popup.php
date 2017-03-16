<?php
add_action('init', 'themeum_video_popup_function', 99);

function themeum_video_popup_function(){
    global $kc;
    if (function_exists('kc_add_map')) 
    { 
        kc_add_map(
            array(

        'themeum_video_popup' => array(
                'name'        => 'Video Popup',
                'description' => esc_html__('Add Video Popup', 'starter'),
                'icon'        => 'sl-control-play',
                'category'    => 'Starter',
                'description'   => esc_html__('Only for Pro Version', 'starter'),
                'params'        => array(
                    array(
                        'type'          => 'checkbox',
                        'description'   => esc_html__('Only for Pro Version', 'starter'),
                        //'name'          => 'title_layout',
                        'options'       => array(
                            //'classic' => get_template_directory_uri()  . '/lib/addons/image/title/3.png',
                        ),
                        'value'         => 'classic'
                    ), 
                )//params
            ),//themeum_video_popup

            )//array
        ); // End add map

    } // End if
}


