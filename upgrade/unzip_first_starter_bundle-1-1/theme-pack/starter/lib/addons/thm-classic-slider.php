<?php
add_action('init', 'themeum_classic_slider', 99);

function themeum_classic_slider(){
    global $kc;
    if (function_exists('kc_add_map')) 
    { 
        kc_add_map(
            array(

            'classic_slider' => array(
                'name'        => 'Classic Slider',
                'description' => esc_html__('Add themeum classic slider', 'starter'),
                'icon'        => 'kc-icon-icarousel',
                'category'    => 'Starter',
                'params'      => array(
                    
                    'general' => array(

                        array(
                            'type'          => 'group',
                            'label'         => esc_html__('Add slide', 'starter'),
                            'name'          => 'classic_slider_opt',
                            'description'   => esc_html__( 'Repeat this fields with each item created, Each item corresponding slide.', 'starter' ),
                            'options'       => array('add_text' => esc_html__('Add new slide', 'starter')),

                            'params' => array( 
                                array(
                                    'name'          => 'slide_align',
                                    'type'          => 'dropdown',
                                    'label'         => 'Slide align',
                                    'options'       => array(
                                        'left'     => esc_html__('Left', 'starter'),
                                        'center'   => esc_html__('Center', 'starter'),
                                        'right'    => esc_html__('Right', 'starter'),
                                      ),
                                    'value'         => 'left',
                                    'description'   => esc_html__('Select the slide align', 'starter'),

                                ),
                                array(
                                    'type' => 'textarea',
                                    'label' => esc_html__( 'Title', 'starter' ),
                                    'name' => 'title',
                                    'description' => esc_html__( 'Enter text used as title of the slide.', 'starter' ),
                                    'admin_label' => true,
                                ), 
                                array(
                                    'name'    => 'headline',
                                    'label'   => esc_html__('Title headline', 'starter'),
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
                                    'type' => 'textarea',
                                    'label' => esc_html__( 'Sub Title', 'starter' ),
                                    'name' => 'subtitle',
                                    'description' => esc_html__( 'Enter text used as sub title of the slide.', 'starter' ),
                                    'admin_label' => false,
                                ),  
                                array(
                                    'name'    => 'subheadline',
                                    'label'   => esc_html__('Sub title headline', 'starter'),
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
                                ),                                                                                                
                                array(
                                    'type'          => 'attach_image',
                                    'label'         => esc_html__( 'Background image', 'starter' ),
                                    'name'          => 'bg_image',
                                    'description'   => esc_html__( 'Upload image used as background of the slide.', 'starter' ),
                                    'admin_label'   => false,
                                    'value'         => '',
                                ),                                
                                array(
                                    'type' => 'color_picker',
                                    'label' => esc_html__( 'Background Color', 'starter' ),
                                    'name' => 'bg_color',
                                    'description' => esc_html__( 'Enter color used as background of the slide.', 'starter' ),
                                ),
                                array(
                                    'name'          => 'slide_height',
                                    'type'          => 'number_slider',
                                    'label'         => esc_html__('Slide Height', 'starter'),
                                    'options'       => array(
                                        'min'           => 300,
                                        'max'           => 900,
                                        'unit'          => 'px',
                                        'show_input'    => true
                                    ),
                                    'value'         => '730px',
                                    'description'   => esc_html__('Choose slide height', 'starter'),
                                ),  
                            ),
                        ),
                        array(
                            'name'    => 'sliderpagination',
                            'label'   => esc_html__('Show Pagination', 'starter'),
                            'type'    => 'select',
                            'options' => array(
                                'true'  => esc_html__('Yes', 'starter'),  
                                'false'  => esc_html__('No', 'starter'),
                            ),
                            'value'         => 'true',
                        ),                         
                        array(
                            'name'    => 'sliderautoplay',
                            'label'   => esc_html__('Auto play', 'starter'),
                            'type'    => 'select',
                            'options' => array(
                                'true'  => esc_html__('Yes', 'starter'),  
                                'false'  => esc_html__('No', 'starter'),
                            ),
                            'value'         => 'true',
                        ),

                        array(
                            'type'          => 'text',
                            'label'         => esc_html__( 'Wrapper class name', 'starter' ),
                            'name'          => 'extra_class',
                            'description'   => esc_html__( 'Custom class for wrapper of the shortcode', 'starter' ),
                        )
                    ),//general
                    'styling'   => array(
                        array(
                            'name'      => 'css_custom',
                            'type'      => 'css',
                            'options'   => array(
                                array(
                                    "screens" => "any,1024,999,767,479",
                                    'Title' => array(
                                        array('property' => 'color', 'label' => esc_html__('Color', 'starter'), 'selector' => '.classic-slider-title'),
                                        array('property' => 'font-family', 'label' => esc_html__('Font Family', 'starter'), 'selector' => '.classic-slider-title'),
                                        array('property' => 'font-size', 'label' => esc_html__('Font Size', 'starter'), 'selector' => '.classic-slider-title'),
                                        array('property' => 'line-height', 'label' => esc_html__('Line Height', 'starter'), 'selector' => '.classic-slider-title'),
                                        array('property' => 'font-weight', 'label' => esc_html__('Font Weight', 'starter'), 'selector' => '.classic-slider-title'),
                                        array('property' => 'text-transform', 'label' => esc_html__('Text Transform', 'starter'), 'selector' => '.classic-slider-title'),
                                        array('property' => 'letter-spacing', 'label' => esc_html__('Letter Spacing', 'starter'), 'selector' => '.classic-slider-title'),
                                        array('property' => 'margin', 'label' => esc_html__('Margin', 'starter'), 'selector' => '.classic-slider-title'),
                                        array('property' => 'padding', 'label' => esc_html__('Padding', 'starter'), 'selector' => '.classic-slider-title'),
                                    ),
                                    'Subtitle'  => array(
                                        array('property' => 'color', 'label' => esc_html__('Color', 'starter'), 'selector' => '.classic-slider-subtitle'),
                                        array('property' => 'font-family', 'label' => esc_html__('Font Family', 'starter'), 'selector' => '.classic-slider-subtitle'),
                                        array('property' => 'font-size', 'label' => esc_html__('Font Size', 'starter'), 'selector' => '.classic-slider-subtitle'),
                                        array('property' => 'line-height', 'label' => esc_html__('Line Height', 'starter'), 'selector' => '.classic-slider-subtitle'),
                                        array('property' => 'font-weight', 'label' => esc_html__('Font Weight', 'starter'), 'selector' => '.classic-slider-subtitle'),
                                        array('property' => 'text-transform', 'label' => esc_html__('Text Transform', 'starter'), 'selector' => '.classic-slider-subtitle'),
                                        array('property' => 'letter-spacing', 'label' => esc_html__('Letter Spacing', 'starter'), 'selector' => '.classic-slider-subtitle'),
                                        array('property' => 'margin', 'label' => esc_html__('Margin', 'starter'), 'selector' => '.classic-slider-subtitle'),
                                        array('property' => 'padding', 'label' => esc_html__('Padding', 'starter'), 'selector' => '.classic-slider-subtitle'),
                                    ),                               

                                )
                            )
                        )
                    ),//styling
                )//params
            ),//classic_slider

            )//array
        ); // End add map
    } // End if
}

function themeum_classic_slider_shortcode( $atts, $content = null ){
    $extra_class = $output = $sliderpagination = $sliderautoplay = '';
    extract( shortcode_atts( array(
        'classic_slider_opt'    => '',
        'sliderpagination'      => 'true',
        'sliderautoplay'        => 'true',
        'extra_class'           => '',
    ), $atts ));

    

    $class_title = array( 'classic_slider' );

    $wrap_class  = apply_filters( 'kc-el-class', $atts );
    $wrap_class[] = 'themeum-classic-slider';

    if ( !empty( $extra_class ) ) {
        $wrap_class[] = esc_attr($extra_class);
    }
    if( isset( $classic_slider_opt ) ){
        $output .= '<div id="classic-slider" data-pagi="'.esc_attr($sliderpagination).'" data-aplay="'.esc_attr($sliderautoplay).'" class="classic-slider owl-carousel owl-theme '.esc_attr( implode( ' ', $wrap_class ) ).'">';
        foreach( $classic_slider_opt as $option ){

            $bg = $data_subtitle = $data_title = $data_btn = $wrap = $align = $borderstyle = '';

            $title_border = !empty($option->title_border) ? $option->title_border : '1';
            $title = !empty($option->title) ? $option->title : '';
            $slide_align = !empty($option->slide_align) ? $option->slide_align : 'left';
            $headline = !empty($option->headline) ? $option->headline : 'h2';
            $subtitle = !empty($option->subtitle) ? $option->subtitle : '';
            $subheadline = !empty($option->subheadline) ? $option->subheadline : 'h3';
            $bg_image = !empty($option->bg_image) ? $option->bg_image : '';
            $bg_color = !empty($option->bg_color) ? $option->bg_color : '';
            $slide_height = !empty($option->slide_height) ? $option->slide_height : '730px';
            $wrap_class = 'themeum-classic-slider-' . $title_border;
            //border layout
            if( $slide_align ){ 
                if( $slide_align == 'left' ){ $align = 'text-left'; }
                if( $slide_align == 'right' ){ $align = 'text-right'; }
                if( $slide_align == 'center' ){ $align = 'text-center'; }
            }else{
                $align = 'text-left';
            }

            //title  
            if ( !empty( $title ) ) {
                $data_title .= '<'.$headline.' class="classic-slider-title">'.wp_kses_post($title).'</'.$headline.'>';
            }  
            //subtitle          
            if ( !empty( $subtitle ) ) {
                $data_subtitle .= '<'.$subheadline.' class="classic-slider-subtitle">'.wp_kses_post($subtitle).'</'.$subheadline.'>';
            }

            if ( $bg_image > 0 ) {
                $img = wp_get_attachment_image_src( $bg_image, 'full' );
                $bg = 'style="background: url('.esc_url( $img[0] ).');background-size: cover;background-position: 50% 50%;height:'.(int)$slide_height.'px;"';
            } else {
                $bg = 'style="background-color:'.esc_attr($bg_color).';height:'.(int)$slide_height.'px;"'; 
            }

            $output .= '<div class="item '.$wrap_class.'" '.$bg.'>';
                $output .= '<div class="classic-slider-content">';
                    $output .= '<div class="classic-slider-content-in">';
                        $output .= '<div class="container">';
                            $output .= '<div class="'.$align.'">';
                                $output .= $data_title;
                                $output .= $data_subtitle;
                            $output .= '</div>';//container
                        $output .= '</div>';//container
                    $output .= '</div>';//classic-slider-content-in
                $output .= '</div>';//classic-slider-content
            $output .= '</div>';//item
        }
        $output .= '</div>';//classic-slider
    }

    return $output;

}
add_shortcode('classic_slider', 'themeum_classic_slider_shortcode');



