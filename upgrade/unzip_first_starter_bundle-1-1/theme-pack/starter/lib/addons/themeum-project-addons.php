<?php
add_action('init', 'themeum_project_shortcode', 99);

function themeum_project_shortcode(){
    global $kc;
    if (function_exists('kc_add_map')) 
    { 
        kc_add_map(
            array(

        'themeum_feature_project' => array(
                'name'        => 'Themeum Porject',
                'description' => esc_html__('Add themeum project', 'starter'),
                'icon'        => 'et-genius',
                'category'    => 'Starter',
                'params'        => array(
                'general'   => array(  

                    array(
                        'type'          => 'radio_image',
                        'label'         => esc_html__( 'Select layout', 'starter' ),
                        'name'          => 'layout',
                        'admin_label'   => true,
                        'options'       => array(
                            'layout1' => get_template_directory_uri()  . '/lib/addons/image/project/1.png',
                            'layout2' => get_template_directory_uri()  . '/lib/addons/image/project/2.png',
                            'layout3' => get_template_directory_uri()  . '/lib/addons/image/project/3.png',
                        ),
                        'value'         => 'layout1'
                    ), 

                    array(
                        'type'          => 'number_slider',
                        'label'         => esc_html__( 'Number of posts displayed', 'starter' ),
                        'name'          => 'number',
                        'description'   => esc_html__( 'The number of posts you want to show.', 'starter' ),
                        'value'         => '6',
                        'admin_label'   => true,
                        'options' => array(
                            'min' => 0,
                            'max' => 20
                        )
                    ), 
                    array(
                        'type'          => 'dropdown',
                        'label'         => esc_html__( 'Select Column', 'starter' ),
                        'name'          => 'column',
                        'options'       => array( 
                            '6' => esc_html__( 'Column 2', 'starter' ),
                            '4' => esc_html__( 'Column 3', 'starter' ),
                            '3' => esc_html__( 'Column 4', 'starter' ),
                            '2' => esc_html__( 'Column 6', 'starter' ),
                        ),
                        'value'         => '3'
                    ), 
                    array(
                        'type'          => 'number_slider',
                        'label'         => esc_html__( 'Space between each item', 'starter' ),
                        'name'          => 'empty_space',
                        'description'   => esc_html__( 'The number of posts you want to show.', 'starter' ),
                        'value'         => '',
                        'admin_label'   => true,
                        'options' => array(
                            'min' => 0,
                            'max' => 40
                        )
                    ), 
                                       
                    array(
                        'name'          => 'show_popup',
                        'type'          => 'dropdown',
                        'label'         =>  esc_html__('Show image Popup', 'starter'),
                        'options'       => array(
                                '1'     => esc_html__('Yes', 'starter'),
                                '2'   => esc_html__('No', 'starter'),

                          ),
                        'value'         => '1',
                    ),                     
  
                    array(
                        'name'          => 'project_order',
                        'type'          => 'dropdown',
                        'label'         => esc_html__('Project order', 'starter'),
                        'options'       => array(
                                    'ASC'     => esc_html__('Left', 'starter'),
                                    'DESC'   => esc_html__('Center', 'starter'),
                          ),
                        'value'         => 'ASC',
                    ),                      
                    array(
                        'name'          => 'project_orderby',
                        'type'          => 'dropdown',
                        'label'         => esc_html__('Project orderby', 'starter'),
                        'options'       => array(
                                    'menu_order'     => esc_html__('Menu order', 'starter'),
                                    'title'   => esc_html__('Title', 'starter'),
                                    'date'   => esc_html__('Date', 'starter'),
                                    'rand'   => esc_html__('Rand', 'starter'),
                          ),
                        'value'         => 'menu_order',
                    ),                                      
                    array(
                        'name'          => 'project_align',
                        'type'          => 'dropdown',
                        'label'         => esc_html__('Project wrap align', 'starter'),
                        'options'       => array(
                                    'left'     => esc_html__('Left', 'starter'),
                                    'center'   => esc_html__('Center', 'starter'),
                                    'right'    => esc_html__('Right', 'starter'),
                          ),
                        'value'         => 'left',
                        'description'   => esc_html__('Select the projet wrap align', 'starter'),
                    ),                                                                                                                                                          
                    array(
                        'type'          => 'text',
                        'label'         => esc_html__( 'Custom class', 'starter' ),
                        'name'          => 'extra_class',
                        'description'   => esc_html__( 'Enter extra custom class', 'starter' ),
                    )
                ),
                'styling'   => array(
                    array(
                        'name'      => 'css_custom',
                        'type'      => 'css',
                        'options'   => array(
                            array(
                                "screens" => "any,1024,999,767,479",
                                'Title' => array(
                                    array('property' => 'color', 'label' => esc_html__('Color', 'starter'), 'selector' => '.portfolio-title, .portfolio-title a'),                                            
                                    array('property' => 'color', 'label' => esc_html__('Hover color', 'starter'), 'selector' => '.portfolio-title, .portfolio-title a:hover'),                                            
                                    array('property' => 'font-family', 'label' => esc_html__('Font Family', 'starter'), 'selector' => '.portfolio-title'),
                                    array('property' => 'font-size', 'label' => esc_html__('Font Size', 'starter'), 'selector' => '.portfolio-title'),
                                    array('property' => 'display', 'label' => esc_html__('Display', 'starter'), 'selector' => '.portfolio-title'),
                                    array('property' => 'font-weight', 'label' => esc_html__('Font weight', 'starter'), 'selector' => '.portfolio-title'),
                                    array('property' => 'line-height', 'label' => esc_html__('Line height', 'starter'), 'selector' => '.portfolio-title'),
                                    array('property' => 'letter-spacing', 'label' => esc_html__('Letter Spacing', 'starter'), 'selector' => '.portfolio-title'),
                                    array('property' => 'text-transform', 'label' => esc_html__('Text Transform', 'starter'), 'selector' => '.portfolio-title'),
                                    array('property' => 'padding', 'label' => esc_html__('Padding', 'starter'), 'selector' => '.portfolio-title'),
                                    array('property' => 'margin', 'label' => esc_html__('Margin', 'starter'), 'selector' => '.portfolio-title')
                                ),                                 
                                'Category' => array(
                                    array('property' => 'color', 'label' => esc_html__('Color', 'starter'), 'selector' => '.portfolio-category, .portfolio-category a'),                                            
                                    array('property' => 'color', 'label' => esc_html__('Hover color', 'starter'), 'selector' => '.portfolio-category, .portfolio-category a:hover'),                                            
                                    array('property' => 'font-family', 'label' => esc_html__('Font Family', 'starter'), 'selector' => '.portfolio-category'),
                                    array('property' => 'font-size', 'label' => esc_html__('Font Size', 'starter'), 'selector' => '.portfolio-category'),
                                    array('property' => 'display', 'label' => esc_html__('Display', 'starter'), 'selector' => '.portfolio-category'),
                                    array('property' => 'font-weight', 'label' => esc_html__('Font weight', 'starter'), 'selector' => '.portfolio-category'),
                                    array('property' => 'line-height', 'label' => esc_html__('Line height', 'starter'), 'selector' => '.portfolio-category'),
                                    array('property' => 'letter-spacing', 'label' => esc_html__('Letter Spacing', 'starter'), 'selector' => '.portfolio-category'),
                                    array('property' => 'text-transform', 'label' => esc_html__('Text Transform', 'starter'), 'selector' => '.portfolio-category'),
                                    array('property' => 'padding', 'label' => esc_html__('Padding', 'starter'), 'selector' => '.portfolio-category'),
                                    array('property' => 'margin', 'label' => esc_html__('Margin', 'starter'), 'selector' => '.portfolio-category')
                                ),  
                                'Popup Icon'  => array(
                                    array('property' => 'color', 'label' => esc_html__('Color', 'starter'), 'selector' => '.plus-icon'),
                                    array('property' => 'color', 'label' => esc_html__('Hover', 'starter'), 'selector' => '.plus-icon:hover'),
                                    array('property' => 'background', 'label' => esc_html__('Background', 'starter'), 'selector' => '.plus-icon'),
                                    array('property' => 'background', 'label' => esc_html__('Hover Background', 'starter'), 'selector' => '.plus-icon:hover'),
                                    array('property' => 'font-size', 'label' => esc_html__('Font Size', 'starter'), 'selector' => '.plus-icon'),
                                    array('property' => 'line-height', 'label' => esc_html__('Line Height', 'starter'), 'selector' => '.plus-icon'),
                                    array('property' => 'font-weight', 'label' => esc_html__('Font Weight', 'starter'), 'selector' => '.plus-icon'),
                                    array('property' => 'width', 'label' => esc_html__('Color', 'starter'), 'selector' => '.plus-icon'),
                                    array('property' => 'height', 'label' => esc_html__('Height', 'starter'), 'selector' => '.plus-icon'),
                                    array('property' => 'border', 'label' => esc_html__('Border', 'starter'), 'selector' => '.plus-icon'),
                                    array('property' => 'border', 'label' => esc_html__('Hover Border', 'starter'), 'selector' => '.plus-icon:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__('Border Radius', 'starter'), 'selector' => '.plus-icon'),
                                    array('property' => 'margin', 'label' => esc_html__('Margin', 'starter'), 'selector' => '.plus-icon'),
                                    array('property' => 'padding', 'label' => esc_html__('Padding', 'starter'), 'selector' => '.plus-icon'),
                                ),  
                                'Box' => array(
                                    array('property' => 'background', 'label' => esc_html__('Background', 'starter'), 'selector' => '.portfolio-thumb:before'),
                                    array('property' => 'border-radius', 'label' => esc_html__('Border Radius', 'starter'), 'selector' => '.portfolio-thumb-wrapper,.portfolio-thumb, .portfolio-thumb img,.portfolio-thumb:before'),
                                    array('property' => 'margin', 'label' => esc_html__('Margin', 'starter'), 'selector' => '.portfolio-thumb-wrapper'),
                                    array('property' => 'padding', 'label' => esc_html__('Padding', 'starter'), 'selector' => '.portfolio-thumb-wrapper'),
                                ),                             
                            )
                        )
                    )
                ),
                'animate' => array(
                    array(
                        'name'    => 'animate',
                        'type'    => 'animate'
                    )
                ),

                )//params
            ),//themeum_video_popup

            )//array
        ); // End add map

    } // End if
}


function themeum_project_register($atts, $content=null)
{
    $output  = $layout = $layoutstyle = $project_order = $project_orderby = $before_title = $extra_class = $empty_space = $number = $show_external_link = $show_popup = $column = $borderclass = $style = $project_align = $show_category = $align = $show_filter = $show_title = '';
    extract(shortcode_atts(array(
        'layout'                => 'layout1',
        'project_align'         => 'left',
        'number'                => '8',
        'column'                => '4',
        'show_filter'           => '1',
        'show_popup'            => '1',
        'show_title'            => '1',
        'show_external_link'    => '2',
        'project_order'         => 'ASC',
        'project_orderby'       => 'menu_order',
        'show_category'         => '1',
        'before_title'          => '',
        'empty_space'           => '',
        'extra_class'           => '',
    ), $atts));


    $wrap_class  = apply_filters( 'kc-el-class', $atts );

    if ( !empty( $extra_class ) ) {
        $wrap_class[] = esc_attr($extra_class);
    }
    
    if ( !empty($layout) ) {
        $layoutstyle = 'portfolio-filter-'.esc_attr($layout);
    }    
    if ( !empty($empty_space) ) {
        $empty_space = esc_attr($empty_space);
    }

    $borderclass = rand(1,100); 

    //border layout
    if( $project_align ){ 
        if( $project_align == 'left' ){ $align = 'text-left'; }
        if( $project_align == 'right' ){ $align = 'text-right'; }
        if( $project_align == 'center' ){ $align = 'text-center'; }
    }else{
        $align = 'text-left';
    }
 
    if( $empty_space ){
        $style .= '.portfolio-items > .portfolio-item-'.$borderclass.'{padding:'.(int)$empty_space.'px; }';
        $style .= '.row.portfolio-items-'.$borderclass.'{margin: -'.(int)$empty_space.'px; }';
    }
    if ( !empty($empty_space) ) {
       $output .= '<style>'.$style.'</style>';
    }
    if ( $layout == 'layout2' ) {
        $output .= '';
    } elseif ($layout == 'layout3') {
        $output .= '';
    }else {
        $output .= '<div class="themeum-project-shortcode '.esc_attr( implode( ' ', $wrap_class ) ).'">';
            $output .= '<div class="themeum-project-wrap themeum-project-wrap-'.esc_attr($layout).'">';

                $args = array(
                    'post_type'         => 'project',
                    'posts_per_page'    => esc_attr($number),
                    'orderby'           => esc_attr($project_orderby),
                    'order'             => esc_attr($project_order)
                );

                $myproject = get_posts($args);

                $output .= '<div id="themeum-area" class="portfolio-items portfolio-items-'.$borderclass.' row '.$align.'">';

                $total = count($myproject);
                $count = 0;
                $index = 0;

                foreach ($myproject as $post)
                {     
                    setup_postdata( $post );
                    $output .= '<div class="themeum-post-item portfolio-item portfolio-item-'.$borderclass.' col-md-'.esc_attr($column).'">';
                    $output .= '<div class="portfolio-thumb-wrapper portfolio-thumb-wrapper-'.esc_attr($layout).'">';
                    $output .= '<div class="portfolio-thumb">';
                        if(has_post_thumbnail($post->ID))
                        {
                            $thumb  = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'starterpro-medium');
                            $output .= '<img class="img-responsive" src="'.esc_url($thumb[0]).'"  alt="">';
                        } else {
                            $output .= '<img class="img-responsive" src="'.get_template_directory_uri().'/images/recipes.jpg" alt="'.__('image','starter').'">';
                        }
                    $output .= '</div>';//portfolio-thumb
                    $output .= '<div class="portfolio-item-content">';
                        if ($show_popup == '1') {
                            if(has_post_thumbnail($post->ID)){
                                $fullthumb  = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
                                $output .= '<a href="' . $fullthumb[0] . '" class="plus-icon"><i class="sl-magnifier"></i></a>';
                            }
                        }
                    $output .= '</div>';//portfolio-item-content    
                    $output .= '</div>';//portfolio-thumb-wrapper    
                    $output .= '</div>';//themeum-post-item
                    $count++;
                    $index++; 
                }
                $output .= '</div>';//portfolio-items 
            $output .= '</div>';//themeum-project-wrap    
        $output .= '</div>';//themeum-project-shortcode  
        wp_reset_postdata();
    }
    return $output;
}

add_shortcode('themeum_feature_project', 'themeum_project_register');

