<?php
add_action('init', 'themeum_latest_post', 99);

function themeum_latest_post(){
    global $kc;
    if (function_exists('kc_add_map')) 
    { 
        kc_add_map(
            array(

        'themeum_latest_p' => array(
                'name'        => 'Latest Post',
                'description' => esc_html__('Add themeum latest post', 'starter'),
                'icon'        => 'fa-pencil-square-o',
                'category'    => 'Starter',
                'params'        => array(
                'general'   => array(
                    array(
                        'type'          => 'radio_image',
                        'label'         => esc_html__( 'Select layout', 'starter' ),
                        'name'          => 'layout',
                        'admin_label'   => true,
                        'options'       => array(
                            '1' => get_template_directory_uri()  . '/lib/addons/image/latestpost/1.png',
                            '2' => get_template_directory_uri()  . '/lib/addons/image/latestpost/3.png',
                            '3' => get_template_directory_uri()  . '/lib/addons/image/latestpost/2.png',
                        ),
                        'value'         => '1'
                    ),                    
					array(
						'type'			=> 'post_taxonomy',
						'label'			=> esc_html__( 'Content Type', 'starter' ),
						'name'			=> 'post_taxonomy',
						'description'	=> esc_html__( 'Choose supported content type such as post, custom post type, etc.', 'starter' ),
					), 
                    array(
                        'type'      => 'select',
                        'label'     => esc_html__( 'Order By', 'starter' ),
                        'name'      => 'column',
                        'options'   => array(
                            '2'  => esc_html__( 'Column 6', 'starter' ),
                            '4'   => esc_html__( 'Column 3', 'starter' ),
                            '3'   => esc_html__( 'Column 4', 'starter' ),
                            '6'   => esc_html__( 'Column 2', 'starter' ),
                        ),
                        'value'         => '4',
                    ),                    
					array(
						'type'			=> 'number_slider',
						'label'			=> esc_html__( 'Number of posts displayed', 'starter' ),
						'name'			=> 'number',
						'description'	=> esc_html__( 'The number of posts you want to show.', 'starter' ),
						'value'			=> '3',
						'admin_label'	=> true,
						'options' => array(
							'min' => 1,
							'max' => 20
						)
					),  					                  
                    array(
                        'name'    => 'headline',
                        'label'   => esc_html__('Type', 'starter'),
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
						'type'			=> 'dropdown',
						'label'			=> esc_html__( 'Order by', 'starter' ),
						'name'			=> 'orderby',
						'admin_label'	=> true,
						'options' 		=> array(
							'ID'		=> esc_html__('Post ID', 'starter'),
							'author'	=> esc_html__('Author', 'starter'),
							'title'		=> esc_html__('Title', 'starter'),
							'name'		=> esc_html__('Post name (post slug)', 'starter'),
							'type'		=> esc_html__('Post type (available since Version 4.0)', 'starter'),
							'date'		=> esc_html__('Date', 'starter'),
							'modified'	=> esc_html__('Last modified date', 'starter'),
							'rand'		=> esc_html__('Random order', 'starter'),
							'comment_count'	=> esc_html__('Number of comments', 'starter')
						)
					),  
					array(
						'type'			=> 'text',
						'label'			=> esc_html__( 'Limit Words', 'starter' ),
						'name'			=> 'words',
						'value'			=> 20,
						'description'	=> esc_html__( 'Limit words you want show as short description', 'starter' ),
                        'relation'    => array(
                            'parent'    => 'layout',
                            'show_when' => array('1','2'),
                        ),
					),	
					array(
						'type'		=> 'select',
						'label'		=> esc_html__( 'Order By', 'starter' ),
						'name'		=> 'order',
						'options'	=> array(
							'DESC'	=> esc_html__( 'Descending', 'starter' ),
							'ASC'	=> esc_html__( 'Ascending', 'starter' )
						)
					),	
                    array(
                        'type'      => 'select',
                        'label'     => esc_html__( 'Show Author', 'starter' ),
                        'name'      => 'en_author',
                        'value'         => '2',
                        'options'   => array(
                            '1'  => esc_html__( 'Yes', 'starter' ),
                            '2'   => esc_html__( 'No', 'starter' )
                        ),
                        'relation'    => array(
                            'parent'    => 'layout',
                            'show_when' => array('2'),
                        ),

                    ),            
                    array(
                        'type'          => 'text',
                        'label'         => esc_html__( 'Custom class', 'starter' ),
                        'name'          => 'extra_class',
                        'description'   => esc_html__( 'Enter extra custom class', 'starter' )
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
                                    array('property' => 'color', 'label' => esc_html__('Color', 'starter'), 'selector' => '.latest-post-title,.latest-post-title a,.post-author .author-avatar a'),
                                    array('property' => 'color', 'label' => esc_html__('Hover Color', 'starter'), 'selector' => '.latest-blog-content-wrapper:hover .latest-post-title a,.latest-blog-content-wrapper:hover .post-author .author-avatar a,.latest-review-single-layout3:hover .latest-post-title a'),
                                    array('property' => 'font-family', 'label' => esc_html__('Font Family', 'starter'), 'selector' => '.latest-post-title'),
                                    array('property' => 'font-size', 'label' => esc_html__('Font Size', 'starter'), 'selector' => '.latest-post-title'),
                                    array('property' => 'line-height', 'label' => esc_html__('Line Height', 'starter'), 'selector' => '.latest-post-title'),
                                    array('property' => 'font-weight', 'label' => esc_html__('Font Weight', 'starter'), 'selector' => '.latest-post-title'),
                                    array('property' => 'text-transform', 'label' => esc_html__('Text Transform', 'starter'), 'selector' => '.latest-post-title'),
                                    array('property' => 'text-align', 'label' => esc_html__('Text Align', 'starter'), 'selector' => '.latest-post-title'),
                                    array('property' => 'margin', 'label' => esc_html__('Margin', 'starter'), 'selector' => '.latest-post-title'),
                                    array('property' => 'padding', 'label' => esc_html__('Padding', 'starter'), 'selector' => '.latest-post-title'),
                                ),
                                'Date'  => array(
                                    array('property' => 'color', 'label' => esc_html__('Color', 'starter'), 'selector' => '.latest-blog-date'),
                                    array('property' => 'color', 'label' => esc_html__('Hover Color', 'starter'), 'selector' => '.latest-blog-content-wrapper:hover .latest-blog-date,.latest-review-single-layout3:hover .latest-blog-date'),
                                    array('property' => 'font-family', 'label' => esc_html__('Font Family', 'starter'), 'selector' => '.latest-blog-date'),
                                    array('property' => 'font-size', 'label' => esc_html__('Font Size', 'starter'), 'selector' => '.latest-blog-date'),
                                    array('property' => 'line-height', 'label' => esc_html__('Line Height', 'starter'), 'selector' => '.latest-blog-date'),
                                    array('property' => 'font-weight', 'label' => esc_html__('Font Weight', 'starter'), 'selector' => '.latest-blog-date'),
                                    array('property' => 'text-transform', 'label' => esc_html__('Text Transform', 'starter'), 'selector' => '.latest-blog-date'),
                                    array('property' => 'text-align', 'label' => esc_html__('Text Align', 'starter'), 'selector' => '.latest-blog-date'),
                                    array('property' => 'margin', 'label' => esc_html__('Margin', 'starter'), 'selector' => '.latest-blog-date'),
                                    array('property' => 'padding', 'label' => esc_html__('Padding', 'starter'), 'selector' => '.latest-blog-date'),
                                ),
  
                            )
                        )
                    )
                ),

                )//params
            ),//themeum_latest_p

            )//array
        ); // End add map

    } // End if
}



// Register Hover Shortcode
function themeum_latest_post_shortcodes($atts, $content = null){
    $output = $post_taxonomy = $column = $headline = $number = $class = $orderby = $order = $show_date = $extra_class = $en_author = '';$layout = 1;
    extract( shortcode_atts( array(
		'post_taxonomy' 				=> '',
		'layout' 						=> '',
		'headline' 						=> '',
		'column' 						=> '4',
		'number' 						=> '3',
		'class' 						=> '',
        'orderby'                       => 'date',          
        'en_author'  					=> '2',          
        'order'   						=> 'DESC',   
        'words'                         => 'yes',  
        'extra_class'   				=> '',  
    ), $atts ));

    if( empty( $headline ) ) {
        $headline = 'h3';
    }

    $wrap_class  = apply_filters( 'kc-el-class', $atts );

    $class_title = array( 'themeum_latest_p' );
    $wrap_class[] = 'themeum-post-wrap-' . $layout;

    $wrap_class[] = 'themeum-post-wrap';

    if ( !empty( $extra_class ) ) {
        $wrap_class[] = esc_attr($extra_class);
    }

	$post_taxonomy_data = explode( ',', $post_taxonomy );
	$taxonomy_term = array();
	$post_type = 'post';

	if( isset($post_taxonomy_data) ){
		foreach( $post_taxonomy_data as $post_taxonomy ){
			$post_taxonomy_tmp = explode( ':', $post_taxonomy );
			$post_type = $post_taxonomy_tmp[0];

			if( isset($post_taxonomy_tmp[1]) ){
				$taxonomy_term[] = $post_taxonomy_tmp[1];
			}
		}
	}

	$taxonomy_objects = get_object_taxonomies( $post_type, 'objects' );
	$taxonomy = key( $taxonomy_objects );

	$args = array(
		'post_type' 		=> $post_type,
		'posts_per_page' 	=> esc_attr($number),
		'orderby'        	=> esc_attr($orderby),
		'order' 			=> esc_attr($order),
	);

	if( count($taxonomy_term) )
	{
		$tax_query = array(
			'relation' => 'OR'
		);

		foreach( $taxonomy_term as $term ){
			$tax_query[] = array(
				'taxonomy' => $taxonomy,
				'field'    => 'slug',
				'terms'    => $term,
			);
		}

		$args['tax_query'] = $tax_query;
	}

	$the_query = new WP_Query( $args );


	if ( $layout == 3 ) {
        $output .= '';
	}else if ( $layout == 2 ) {
        $output .= '';
    } else {
        if ( $the_query->have_posts() ) {
           global $post;
            $output .= '<div class="latest-review row '.esc_attr( implode( ' ', $wrap_class ) ).'">';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                $output .= '<div class="latest-review-single-item col-sm-'.esc_attr($column).'">';
                    $output .= '<div class="latest-review-single-layout1">';
                        $output .= '<a class="latest-blog-image"  href="'.get_permalink().'">'.get_the_post_thumbnail($post->ID, 'starterpro-medium', array('class' => 'img-responsive')).'</a>';
                        $output .= '<span class="latest-blog-date"><i class="fa fa-clock-o"></i> '.get_the_date('d M Y').'</span>';
                        $output .= '<'.esc_attr($headline).' class="latest-post-title"><a href="'.get_permalink().'">'. get_the_title() .'</a></'.esc_attr($headline).'>';
                        if ( $words > 0 ){
                            $output .= '<div class="latest-blog-content">'.wp_trim_words( $post->post_content, $words ).'</div>';
                        }
                        $output .= '<a class="latest-post-button" href="'.get_permalink().'">'. esc_html__('Read More', 'starter') .'</a>';
                    $output .= '</div>';
                $output .= '</div>';
            } 
            $output .= '</div>';  
        }  
    }

	wp_reset_postdata();
	return $output;
}
add_shortcode('themeum_latest_p', 'themeum_latest_post_shortcodes');


