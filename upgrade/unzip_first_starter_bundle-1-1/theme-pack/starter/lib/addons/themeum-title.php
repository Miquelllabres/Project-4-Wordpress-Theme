<?php
add_action('init', 'themeum_title_data', 99);
function themeum_title_data(){
    global $kc;
    if (function_exists('kc_add_map')) 
    {
    kc_add_map(
        array(
            'themeum_title' => array(
                'name'        => 'Themeum Title',
                'description' => esc_html__('Title shortcode of the theme', 'starter'),
                'icon'        => 'fa-header',
                'category'    => 'Starter',
                'params'      => array(

                    'General' => array(

                            array(
                                'type'          => 'radio_image',
                                'label'         => esc_html__( 'Select layout', 'starter' ),
                                'description'   => esc_html__('Select title layout style.', 'starter'),
                                'name'          => 'title_layout',
                                'admin_label'   => true,
                                'options'       => array(
                                    'default' => get_template_directory_uri()  . '/lib/addons/image/title/1.png',
                                    'classic' => get_template_directory_uri()  . '/lib/addons/image/title/3.png',
                                    'titlenumber' => get_template_directory_uri()  . '/lib/addons/image/title/2.png',
                                ),
                                'value'         => 'classic'
                            ),                                 
                            array(
                                'name'          => 'title',
                                'type'          => 'textarea',
                                'label'         => esc_html__('Title text', 'starter'),
                                'description'   => esc_html__('Title of the heading.', 'starter'),
                                'admin_label'   => true,
                            ),
                            array(
                                'name'    => 'headline',
                                'label'   => esc_html__('Title Type', 'starter'),
                                'type'    => 'select',
                                'admin_label' => true,
                                'options' => array(
                                    'h1'  => 'H1',
                                    'h2'  => 'H2',
                                    'h3'  => 'H3',
                                    'h4'  => 'H4',
                                    'h5'  => 'H5',
                                    'h6'  => 'H6',
                                    'div'  => 'div',
                                    'span'  => 'Span',
                                    'p'  => 'P'
                                ),
                                'value'         => 'h2',
                            ),                            
                            array(
                                'name'          => 'subtitle',
                                'type'          => 'textarea',
                                'label'         => esc_html__('Sub Title text', 'starter'),
                                'description'   => esc_html__('Sub title of the heading.', 'starter'),
                                'admin_label'   => true,
                                'relation'    => array(
                                    'parent'    => 'title_layout',
                                    'show_when' => array('classic','titlenumber'),
                                ),
                            ),
                            array(
                                'name'    => 'subheadline',
                                'label'   => esc_html__('Sub Title Type', 'starter'),
                                'type'    => 'select',
                                'admin_label' => true,
                                'options' => array(
                                    'h1'  => 'H1',
                                    'h2'  => 'H2',
                                    'h3'  => 'H3',
                                    'h4'  => 'H4',
                                    'h5'  => 'H5',
                                    'h6'  => 'H6',
                                    'div'  => 'div',
                                    'span'  => 'Span',
                                    'p'  => 'P'
                                ),
                                'value'         => 'h3',
                                'relation'    => array(
                                    'parent'    => 'title_layout',
                                    'show_when' => array('classic','titlenumber'),
                                ),
                            ), 
                            array(
                                'name'          => 'desc',
                                'type'          => 'textarea',
                                'label'         => esc_html__('Description text', 'starter'),
                                'description'   => esc_html__('Description of the heading.', 'starter'),
                                'relation'    => array(
                                    'parent'    => 'title_layout',
                                    'show_when' => array('classic','titlenumber'),
                                ),
                            ),
                            array(
                                'name'          => 'border_align',
                                'type'          => 'dropdown',
                                'label'         => esc_html__('Title wrap align', 'starter'),
                                'options'       => array(
                                        'left'     => esc_html__('Left', 'starter'),
                                        'center'   => esc_html__('Center', 'starter'),
                                        'right'    => esc_html__('Right', 'starter'),
                                  ),
                                'value'         => 'center',
                                'description'   => esc_html__('Select the title wrap align', 'starter'),

                            ),                                                                                      
                            array(
                                'name'  => 'extra_class',
                                'label' => esc_html__('Extra class', 'starter'),
                                'description'   => esc_html__('Custom class for wrapper of the shortcode', 'starter'),
                                'type'  => 'text'
                            ),
                        ),//general

                        'styling' => array(
                            array(
                                'name'    => 'css_custom',
                                'type'    => 'css',
                                'options'       => array(
                                    array(
                                        "screens" => "any,1024,999,767,479",
                                        'Title Style' => array(
                                            array('property' => 'color', 'label' => esc_html__('Color', 'starter'), 'selector' => '.themeum_title'),                                            
                                            array('property' => 'font-family', 'label' => esc_html__('Font Family', 'starter'), 'selector' => '.themeum_title'),
                                            array('property' => 'font-size', 'label' => esc_html__('Font Size', 'starter'), 'selector' => '.themeum_title'),
                                            array('property' => 'display', 'label' => esc_html__('Display', 'starter'), 'selector' => '.themeum_title'),
                                            array('property' => 'font-weight', 'label' => esc_html__('Font weight', 'starter'), 'selector' => '.themeum_title'),
                                            array('property' => 'line-height', 'label' => esc_html__('Line height', 'starter'), 'selector' => '.themeum_title'),
                                            array('property' => 'letter-spacing', 'label' => esc_html__('Letter Spacing', 'starter'), 'selector' => '.themeum_title'),
                                            array('property' => 'text-transform', 'label' => esc_html__('Text Transform', 'starter'), 'selector' => '.themeum_title'),
                                            array('property' => 'text-align', 'label' => esc_html__('Alignment', 'starter'), 'selector' => '.themeum_title'),
                                            array('property' => 'padding', 'label' => esc_html__('Padding', 'starter'), 'selector' => '.themeum_title'),
                                            array('property' => 'margin', 'label' => esc_html__('Margin', 'starter'), 'selector' => '.themeum_title')
                                        ),
                                        'Subtitle'  => array(
                                            array('property' => 'color', 'label' => esc_html__('Color', 'starter'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'font-family', 'label' => esc_html__('Font Family', 'starter'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'font-size', 'label' => esc_html__('Font Size', 'starter'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'line-height', 'label' => esc_html__('Line height', 'starter'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'font-weight', 'label' => esc_html__('Font weight', 'starter'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'letter-spacing', 'label' => esc_html__('Letter Spacing', 'starter'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'text-transform', 'label' => esc_html__('Text Transform', 'starter'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'text-align', 'label' => esc_html__('Alignment', 'starter'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'margin', 'label' => esc_html__('Margin', 'starter'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'padding', 'label' => esc_html__('Padding', 'starter'), 'selector' => '.themeum-subtitle'),
                                        ),                                                                        
                                        'Desc'  => array(
                                            array('property' => 'color', 'label' => esc_html__('Color', 'starter'), 'selector' => '.themeum-title-desc'),
                                            array('property' => 'font-family', 'label' => esc_html__('Font Family', 'starter'), 'selector' => '.themeum-title-desc'),
                                            array('property' => 'font-size', 'label' => esc_html__('Font Size', 'starter'), 'selector' => '.themeum-title-desc'),
                                            array('property' => 'line-height', 'label' => esc_html__('Line height', 'starter'), 'selector' => '.themeum-title-desc'),
                                            array('property' => 'font-weight', 'label' => esc_html__('Font weight', 'starter'), 'selector' => '.themeum-title-desc'),
                                            array('property' => 'text-transform', 'label' => esc_html__('Text Transform', 'starter'), 'selector' => '.themeum-title-desc'),
                                            array('property' => 'text-align', 'label' => esc_html__('Alignment', 'starter'), 'selector' => '.themeum-title-desc'),
                                            array('property' => 'padding', 'label' => esc_html__('Padding', 'starter'), 'selector' => '.themeum-title-desc'),
                                            array('property' => 'margin', 'label' => esc_html__('Margin', 'starter'), 'selector' => '.themeum-title-desc'),
                                        ), 
                                        'Box' => array(
                                            array('property' => 'margin', 'label' => esc_html__('Margin', 'starter'), 'selector' => '.title-number-wrap,.title-default-wrap,.title-classic-wrap'),
                                            array('property' => 'padding', 'label' => esc_html__('Padding', 'starter'), 'selector' => '.title-number-wrap,.title-default-wrap,.title-classic-wrap'),
                                        ),
                                    )
                                )
                            )
                        ),//styling
                    ) //params
                )//themeum_title
        ));
    }
  }

// Register Hover Shortcode
function themeum_title_data_shortcodes($atts, $content = null){
    $output = $headline = $subtitle = $number = $title = $border_position = $headline = $extra_class = $align = $title_style = $desc = $style = $borderclass = $number_position_left = $number_position_top = $numstyle =  '';
    extract( shortcode_atts( array(

        'number'                => '',
        'number_position_left'  => '',
        'number_position_top'   => '',
        'title'                 => '',
        'title_layout'          => 'classic',
        'headline'              => 'h2',
        'subtitle'              => '',
        'subheadline'           => 'h3',
        'desc'                  => '',
        'border_position'       => 'bottom',
        'border_width'          => '70',
        'border_height'         => '1',
        'border_bg'             => '',
        'border_align'          => 'center',
        'extra_class'           => ''
    ), $atts ));
    

    if( empty( $headline ) ) {
        $headline = 'h2';
    }    

    if( empty( $subheadline ) ) {
        $subheadline = 'h3';
    }

    $wrap_class  = apply_filters( 'kc-el-class', $atts );

    $class_title = array( 'themeum_title' );

    $wrap_class[] = 'themeum-title-wrap';

    if ( !empty( $extra_class ) ) {
        $wrap_class[] = esc_attr($extra_class);
    } 

    //border layout
    if( $border_align ){ 
        if( $border_align == 'left' ){ $align = 'text-left'; }
        if( $border_align == 'right' ){ $align = 'text-right'; }
        if( $border_align == 'center' ){ $align = 'text-center'; }
    }else{
        $align = 'text-center';
    }
    

    if ( $title_layout == 'classic' ) {
        $output .= '<div class="'.esc_attr( implode( ' ', $wrap_class ) ).' '.esc_attr($title_layout).' '.$align.'">';
            $output .= '<div class="title-classic-wrap">';
                if ( !empty($title) ) {
                    $output .= '<'.esc_attr($headline).' class="'. implode( ' ', $class_title ) . '">'.wp_kses_post($title).'</'.esc_attr($headline).'>';
                }
                if ( !empty($subtitle) ) {
                    $output .= '<'.esc_attr($subheadline).' class="themeum-subtitle">'.wp_kses_post($subtitle).'</'.esc_attr($subheadline).'>';
                }
                if ( !empty($desc) ) {
                    $output .= '<div class="themeum-title-desc">'.wp_kses_post($desc).'</div>';
                }
            $output .= '</div>';
        $output .= '</div>';
    } elseif ( $title_layout == 'default' ) {
        $output .= '';
    }elseif ( $title_layout == 'titlenumber' ) {
        $output .= '';
    } else {
        $output .= esc_html__('Select your desire title layout', 'starter');
    }



    return $output;
  }
add_shortcode('themeum_title', 'themeum_title_data_shortcodes');