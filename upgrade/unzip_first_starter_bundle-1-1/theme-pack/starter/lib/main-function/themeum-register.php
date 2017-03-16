<?php 
/*-------------------------------------------*
 *      Themeum Widget Registration
 *------------------------------------------*/

if(!function_exists('starterpro_widdget_init')):

    function starterpro_widdget_init()
    {

        register_sidebar(
            array( 
                'name'          => esc_html__( 'Sidebar', 'starter' ),
                'id'            => 'sidebar',
                'description'   => esc_html__( 'Widgets in this area will be shown on Sidebar.', 'starter' ),
                'before_title'  => '<h3 class="widget_title">',
                'after_title'   => '</h3>',
                'before_widget' => '<div id="%1$s" class="widget %2$s" >',
                'after_widget'  => '</div>'
            )
        );


        register_sidebar(
            array( 
                'name'          => esc_html__( 'Bottom', 'starter' ),
                'id'            => 'bottom',
                'description'   => esc_html__( 'Widgets in this area will be shown before Bottom.' , 'starter'),
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
                'before_widget' => '<div id="%1$s" class="widget %2$s" >',
                'after_widget'  => '</div>'
            )
        );

    }
    
    add_action('widgets_init','starterpro_widdget_init');

endif;

if ( ! function_exists( 'starterpro_fonts_url' ) ) :
    function starterpro_fonts_url() {
    $fonts_url = '';

    $open_sans = _x( 'on', 'Poppins font: on or off', 'starter' );
     
    if ( 'off' !== $open_sans ) {
    $font_families = array();
     
    if ( 'off' !== $open_sans ) {
    $font_families[] = 'Poppins:300,400,500,600,700';
    }
     
    $query_args = array(
    'family'  => urlencode( implode( '|', $font_families ) ),
    'subset'  => urlencode( 'latin,latin-ext' ),
    );
     
    $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
     
    return esc_url_raw( $fonts_url );
    }
endif;


/*-------------------------------------------*
 *      Themeum Style
 *------------------------------------------*/
if(!function_exists('starterpro_style')):

    function starterpro_style(){

        wp_enqueue_style( 'starterpro-font', starterpro_fonts_url(), array(), null );

        wp_enqueue_media();
        wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css',false,'all');
        wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css',false,'all');
        wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css',false,'all');
        wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css',false,'all');
        wp_enqueue_style( 'starterpro-starter-legacy', get_template_directory_uri() . '/css/starter-legacy.css',false,'all');
        wp_enqueue_style( 'starterpro-custom-css', get_template_directory_uri() . '/css/custom-css.css',false,'all');
        wp_enqueue_style( 'starterpro-main', get_template_directory_uri() . '/css/main.css',false,'all');
        wp_enqueue_style( 'starterpro-blog-detaills', get_template_directory_uri() . '/css/blog-details.css',false,'all');
        wp_enqueue_style( 'starterpro-responsive', get_template_directory_uri() . '/css/responsive.css',false,'all');
        
        wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css',false,'all');
        wp_enqueue_style( 'animate.min', get_template_directory_uri() . '/css/animate.min.css',false,'all');

        wp_enqueue_style('starterpro-style',get_stylesheet_uri());
        wp_add_inline_style( 'starterpro-style', starterpro_css_generator() );
        wp_enqueue_script('bootstrap',STARTER_JS.'bootstrap.min.js',array(),false,true);
        wp_enqueue_script('loopcounter',STARTER_JS.'loopcounter.js',array(),false,true);
        wp_enqueue_script('owl.carousel.min',STARTER_JS.'owl.carousel.min.js',array(),false,true);
        wp_enqueue_script('jquery.prettySocial',STARTER_JS.'jquery.prettySocial.min.js',array(),false,true);
        wp_enqueue_script('jquery.isotope.min',STARTER_JS.'jquery.isotope.min.js',array(),false,true);
        wp_enqueue_script('jquery.prettyPhoto',STARTER_JS.'jquery.prettyPhoto.js',array(),false,true);
        wp_enqueue_script('jquery.magnific-popup.min',STARTER_JS.'jquery.magnific-popup.min.js',array(),false,true);
        wp_enqueue_script('jquery.nav',STARTER_JS.'jquery.nav.js',array(),false,true);
        wp_enqueue_script('main-onepage',STARTER_JS.'main-onepage.js',array(),false,true);

        if ( is_singular() ) {wp_enqueue_script( 'comment-reply' );}

        wp_enqueue_script('unique-style',STARTER_JS.'main.js',array(),false,true);

    }

    add_action('wp_enqueue_scripts','starterpro_style');

endif;




if(!function_exists('starterpro_admin_style')):

    function starterpro_admin_style(){
        wp_enqueue_media();
        wp_register_script('thmpostmeta', get_template_directory_uri() .'/js/admin/post-meta.js');
        wp_enqueue_script('themeum-widget-js', get_template_directory_uri().'/js/widget-js.js', array('jquery'));
        wp_enqueue_script('thmpostmeta');
    }
    add_action('admin_enqueue_scripts','starterpro_admin_style');

endif;


/*-------------------------------------------------------
*           Include the TGM Plugin Activation class
*-------------------------------------------------------*/
add_action( 'tgmpa_register', 'starterpro_plugins_include');

if(!function_exists('starterpro_plugins_include')):

    function starterpro_plugins_include()
    {
        $plugins = array(
                array(
                    'name'                  => esc_html__( 'Kingcomposer', 'starter' ),
                    'slug'                  => 'kingcomposer',
                    'required'              => true,
                    'version'               => '',
                    'force_activation'      => false,
                    'force_deactivation'    => false,
                    'external_url'          => esc_url('https://downloads.wordpress.org/plugin/kingcomposer.zip'),
                ),
                array(
                    'name'                  => esc_html__( 'Themeum Project', 'starter' ),
                    'slug'                  => 'themeum-project',
                    'source'                => esc_url('http://demo.themeum.com/wordpress/plugins/starterpro/themeum-project.zip'),
                    'required'              => true,
                    'version'               => '',
                    'force_activation'      => false,
                    'force_deactivation'    => false,
                    'external_url'          => '',
                ),                                                        
                array(
                    'name'                  => esc_html__( 'Widget Settings Importer/Exporter', 'starter' ),
                    'slug'                  => 'widget-settings-importexport',
                    'required'              => false,
                    'version'               => '',
                    'force_activation'      => false,
                    'force_deactivation'    => false,
                    'external_url'          => esc_url('https://downloads.wordpress.org/plugin/widget-settings-importexport.1.5.0.zip'),
                ),
            );
    $config = array(
            'domain'            => 'starter',           
            'default_path'      => '',                           
            'parent_menu_slug'  => 'themes.php',                 
            'parent_url_slug'   => 'themes.php',                
            'menu'              => 'install-required-plugins',   
            'has_notices'       => true,                         
            'is_automatic'      => false,                      
            'message'           => '',                     
            'strings'           => array(
                        'page_title'                                => esc_html__( 'Install Required Plugins', 'starter' ),
                        'menu_title'                                => esc_html__( 'Install Plugins', 'starter' ),
                        'installing'                                => esc_html__( 'Installing Plugin: %s', 'starter' ), 
                        'oops'                                      => esc_html__( 'Something went wrong with the plugin API.', 'starter'),
                        'return'                                    => esc_html__( 'Return to Required Plugins Installer', 'starter'),
                        'plugin_activated'                          => esc_html__( 'Plugin activated successfully.','starter'),
                        'complete'                                  => esc_html__( 'All plugins installed and activated successfully. %s', 'starter' ) 
                )
    );

    tgmpa( $plugins, $config );

    }

endif;