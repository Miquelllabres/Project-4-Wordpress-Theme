<?php

if(!function_exists('starter_setup')):

    function starter_setup()
    {
        //Textdomain
        load_theme_textdomain( 'starter', get_template_directory() . '/languages' );
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'starterpro-large', 1170, 750, true ); // Used Top Celebrities
        add_image_size( 'starterpro-medium', 570, 400, true ); // Used Top Celebrities
        add_image_size( 'starterpro-portfo', 480, 350, true ); // Used Top Celebrities
        add_theme_support( 'post-formats', array( 'audio','gallery','image','link','quote','video' ) );
        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );
        add_theme_support( 'automatic-feed-links' );

        if ( ! isset( $content_width ) )
        $content_width = 660;
    }

    add_action('after_setup_theme','starter_setup');

endif;

if(!function_exists('starterpro_pagination')):

    function starterpro_pagination( $page_numb , $max_page )
    {
        $big = 999999999; // need an unlikely integer
        echo '<div class="themeum-pagination">';
        echo paginate_links( array(
            'base'          => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format'        => '?paged=%#%',
            'current'       => $page_numb,
            'prev_text'     => __('<i class="fa fa-long-arrow-left" aria-hidden="true"></i>'),
            'next_text'     => __('<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'),
            'total'         => $max_page,
            'type'          => 'list',
        ) );
        echo '</div>';
    }
endif;


/*-------------------------------------------------------
 *              Themeum Comment
 *-------------------------------------------------------*/

if(!function_exists('starterpro_comment')):

    function starterpro_comment($comment, $args, $depth)
    {
        $GLOBALS['comment'] = $comment;
        switch ( $comment->comment_type ) :
            case 'pingback' :
            case 'trackback' :
            // Display trackbacks differently than normal comments.
        ?>
        <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">

        <?php
            break;
            default :
            global $post;
        ?>
        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
            <div id="comment-<?php comment_ID(); ?>" class="comment-body media">

                    <div class="comment-avartar pull-left">
                        <?php
                            echo get_avatar( $comment, $args['avatar_size'] );
                        ?>
                    </div>
                    <div class="comment-context media-body">
                        <div class="comment-head">
                            <?php
                                printf( '<span class="comment-author">%1$s</span>',
                                    get_comment_author_link());
                            ?>
                            <span class="comment-date"><?php echo get_comment_date('d / m / Y') ?></span>

                            <?php edit_comment_link( esc_html__( 'Edit', 'starter' ), '<span class="edit-link">', '</span>' ); ?>

                        </div>

                        <?php if ( '0' == $comment->comment_approved ) : ?>
                        <p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'starter' ); ?></p>
                        <?php endif; ?>

                        <div class="comment-content">
                            <?php comment_text(); ?>
                        </div>

                        <span class="comment-reply">
                            <?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'starter' ), 'after' => '', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                        </span>
                    </div>

            </div>
        <?php
            break;
        endswitch;
    }

endif;


/*-------------------------------------------------------
*           Themeum Breadcrumb
*-------------------------------------------------------*/
if(!function_exists('starterpro_breadcrumbs')):
function starterpro_breadcrumbs(){ ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo esc_url(site_url()); ?>" class="breadcrumb_home"><?php esc_html_e('Home', 'starter') ?></a></li>
        <?php
            if(function_exists('is_product')){
                $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
                if(is_product()){
                    echo "<li><a href='".$shop_page_url."'>shop</a></li>";
                }
            }
        ?>
        <li class="active">

                    <?php if(function_exists('is_shop')){ if(is_shop()){ esc_html_e('shop','starter'); } } ?>

                    <?php if( is_tag() ) { ?>
                    <?php esc_html_e('Posts Tagged ', 'starter') ?><span class="raquo">/</span><?php single_tag_title(); echo('/'); ?>
                    <?php } elseif (is_day()) { ?>
                    <?php esc_html_e('Posts made in', 'starter') ?> <?php the_time('F jS, Y'); ?>
                    <?php } elseif (is_month()) { ?>
                    <?php esc_html_e('Posts made in', 'starter') ?> <?php the_time('F, Y'); ?>
                    <?php } elseif (is_year()) { ?>
                    <?php esc_html_e('Posts made in', 'starter') ?> <?php the_time('Y'); ?>
                    <?php } elseif (is_search()) { ?>
                    <?php esc_html_e('Search results for', 'starter') ?> <?php the_search_query() ?>
                    <?php } elseif (is_single()) { ?>
                    <?php $category = get_the_category();
                    if ( $category ) {
                        $catlink = get_category_link( $category[0]->cat_ID );
                        echo ('<a href="'.esc_url($catlink).'">'.esc_html($category[0]->cat_name).'</a> '.'<span class="raquo"></span> ');
                    }
                    //echo get_the_title(); ?>
                    <?php } elseif (is_category()) { ?>
                    <?php single_cat_title(); ?>
                    <?php } elseif (is_tax()) { ?>
                    <?php
                    $themeum_taxonomy_links = array();
                    $themeum_term = get_queried_object();
                    $themeum_term_parent_id = $themeum_term->parent;
                    $themeum_term_taxonomy = $themeum_term->taxonomy;

                    while ( $themeum_term_parent_id ) {
                        $themeum_current_term = get_term( $themeum_term_parent_id, $themeum_term_taxonomy );
                        $themeum_taxonomy_links[] = '<a href="' . esc_url( get_term_link( $themeum_current_term, $themeum_term_taxonomy ) ) . '" title="' . esc_attr( $themeum_current_term->name ) . '">' . esc_html( $themeum_current_term->name ) . '</a>';
                        $themeum_term_parent_id = $themeum_current_term->parent;
                    }

                    if ( !empty( $themeum_taxonomy_links ) ) echo implode( ' <span class="raquo">/</span> ', array_reverse( $themeum_taxonomy_links ) ) . ' <span class="raquo">/</span> ';

                    echo esc_html( $themeum_term->name );
                } elseif (is_author()) {
                    global $wp_query;
                    $curauth = $wp_query->get_queried_object();

                    esc_html_e('Posts by ', 'starter'); echo ' ',$curauth->nickname;
                } elseif (is_page()) {
                    echo get_the_title();
                } elseif (is_home()) {
                    esc_html_e('Blog', 'starter');
                } ?>
            </li>
    </ol>

<?php
}
endif;


// Make sure that you've registered your theme to valid this license
define('KC_LICENSE', 'l483kg4m-jxbv-ju7k-or7h-yhgd-q3jl1ec3fqyi');

/*-----------------------------------------------------
 *              starterpro_hex2rgb
 *----------------------------------------------------*/
if(!function_exists('starterpro_hex2rgb')):
    function starterpro_hex2rgb($hex) {
       $hex = str_replace("#", "", $hex);

       if(strlen($hex) == 3) {
          $r = hexdec(substr($hex,0,1).substr($hex,0,1));
          $g = hexdec(substr($hex,1,1).substr($hex,1,1));
          $b = hexdec(substr($hex,2,1).substr($hex,2,1));
       } else {
          $r = hexdec(substr($hex,0,2));
          $g = hexdec(substr($hex,2,2));
          $b = hexdec(substr($hex,4,2));
       }
       $rgb = array($r, $g, $b);

       return $rgb[0].','.$rgb[1].','.$rgb[2];
    }
endif;
/*-----------------------------------------------------
 *              Coming Soon Page Settings
 *----------------------------------------------------*/
if ( get_theme_mod( 'comingsoon_en', false ) ) {
    if(!function_exists('starterpro_my_page_template_redirect')):
        function starterpro_my_page_template_redirect()
        {
            if( is_page() || is_home() || is_category() || is_single() )
            {
                if( !is_super_admin( get_current_user_id() ) ){
                    get_template_part( 'coming','soon');
                    exit();
                }
            }
        }
        add_action( 'template_redirect', 'starterpro_my_page_template_redirect' );
    endif;

    if(!function_exists('starterpro_cooming_soon_wp_title')):
        function starterpro_cooming_soon_wp_title(){
            return 'Coming Soon';
        }
        add_filter( 'wp_title', 'starterpro_cooming_soon_wp_title' );
    endif;
}



if(!function_exists('starterpro_css_generator')){
    function starterpro_css_generator(){

        $output = '';

        /* *******************************
        **********      Theme Options   **********
        ********************************** */
            $major_color = get_theme_mod( 'major_color', '#00aeef' );
            if($major_color){
                $output .= 'a,.bottom-widget .contact-info i,.bottom-widget .widget ul li a:hover, .latest-blog-content .latest-post-button:hover,.meta-category a:hover { color: '. esc_attr($major_color) .'; }';
            }

            if($major_color){
                $output .= 'input:focus, textarea:focus, keygen:focus, select:focus{ border-color: '. esc_attr($major_color) .'; }';
            }

            if($major_color){
                $output .= '.themeum-latest-post-content .entry-title a:hover,.common-menu-wrap .nav>li.current>a,
                .header-solid .common-menu-wrap .nav>li.current>a,.portfolio-filter .btn-link.active,.portfolio-filter li a:hover,.latest-review-single-layout2 .latest-post-title a:hover, .blog-arrows a:hover{ color: '. esc_attr($major_color) .'; }';
            }

            if($major_color){
                $output .= '.team-content4,.portfolio-filter li a:before, .classic-slider .owl-dots .active>span{ background: '. esc_attr($major_color) .'; }';
            }


            if($major_color){
                $output .= '.btn.btn-slider:hover, .btn.btn-slider:focus,.portfolio-thumb-wrapper-layout3 .portfolio-item-content .portfolio-item-content-in{ background-color: '. esc_attr($major_color) .'; border-color: '. esc_attr($major_color) .'; }';
            }

            // .select2-container .select2-dropdown .select2-results ul li


            $hover_color = get_theme_mod( 'hover_color', '#0088e2' );
            if( $hover_color ){
                $output .= 'a:hover, .widget.widget_rss ul li a,.social-share a:hover{ color: '.esc_attr( $hover_color ) .'; }';
                $output .= '.error-page-inner a.btn.btn-primary.btn-lg:hover,.btn.btn-primary:hover,input[type=button]:hover,
                .widget.widget_search #searchform .btn-search:hover,.team-content2{ background-color: '.esc_attr( $hover_color ) .'; }';
                $output .= '.woocommerce a.button:hover{ border-color: '.esc_attr( $hover_color ) .'; }';
            }


   


        /* *******************************
        **********  Quick Style **********
        ********************************** */

        $bstyle = $mstyle = $h1style = $h2style = $h3style = $h4style = $h5style = '';
        //body
        if ( get_theme_mod( 'body_font_size', '14' ) ) {
            $bstyle .= 'font-size:'.get_theme_mod( 'body_font_size', '14' ).'px;';
        }
        if ( get_theme_mod( 'body_google_font', 'Raleway' ) ) {
            $bstyle .= 'font-family:'.get_theme_mod( 'body_google_font', 'Raleway' ).';';
        }

        //menu
        $mstyle = '';
        if ( get_theme_mod( 'menu_font_size', '14' ) ) {
            $mstyle .= 'font-size:'.get_theme_mod( 'menu_font_size', '14' ).'px;';
        }
        if ( get_theme_mod( 'menu_google_font', 'Lato' ) ) {
            $mstyle .= 'font-family:'.get_theme_mod( 'menu_google_font', 'Lato' ).';';
        }
        if ( get_theme_mod( 'menu_font_weight', '400' ) ) {
            $mstyle .= 'font-weight: '.get_theme_mod( 'menu_font_weight', '400' ).';';
        }
        if ( get_theme_mod('menu_font_height', '24') ) {
            $mstyle .= 'line-height: '.get_theme_mod('menu_font_height', '24').'px;';
        }
        if ( get_theme_mod('menu_font_color', '#777777') ) {
            $mstyle .= 'color: '.get_theme_mod('menu_font_color', '#777777').';';
        }

        //heading1
        $h1style = '';
        if ( get_theme_mod( 'h1_font_size', '14' ) ) {
            $h1style .= 'font-size:'.get_theme_mod( 'h1_font_size', '46' ).'px;';
        }
        if ( get_theme_mod( 'h1_google_font', 'Lato' ) ) {
            $h1style .= 'font-family:'.get_theme_mod( 'h1_google_font', 'Lato' ).';';
        }

        # heading2
        $h2style = '';
        if ( get_theme_mod( 'h2_font_size', '14' ) ) {
            $h2style .= 'font-size:'.get_theme_mod( 'h2_font_size', '36' ).'px;';
        }
        if ( get_theme_mod( 'h2_google_font', 'Lato' ) ) {
            $h2style .= 'font-family:'.get_theme_mod( 'h2_google_font', 'Lato' ).';';
        }


        //heading3
        $h3style = '';
        if ( get_theme_mod( 'h3_font_size', '14' ) ) {
            $h3style .= 'font-size:'.get_theme_mod( 'h3_font_size', '26' ).'px;';
        }
        if ( get_theme_mod( 'h3_google_font', 'Lato' ) ) {
            $h3style .= 'font-family:'.get_theme_mod( 'h3_google_font', 'Lato' ).';';
        }

        //heading4
        $h4style = '';
        if ( get_theme_mod( 'h4_font_size', '14' ) ) {
            $h4style .= 'font-size:'.get_theme_mod( 'h4_font_size', '18' ).'px;';
        }
        if ( get_theme_mod( 'h4_google_font', 'Lato' ) ) {
            $h4style .= 'font-family:'.get_theme_mod( 'h4_google_font', 'Lato' ).';';
        }

        //heading5
        $h5style = '';
        if ( get_theme_mod( 'h5_font_size', '14' ) ) {
            $h5style .= 'font-size:'.get_theme_mod( 'h5_font_size', '14' ).'px;';
        }
        if ( get_theme_mod( 'h5_google_font', 'Lato' ) ) {
            $h5style .= 'font-family:'.get_theme_mod( 'h5_google_font', 'Lato' ).';';
        }


        $output .= 'body{'.$bstyle.'}';
        $output .= '.common-menu-wrap .nav>li>a{'.$mstyle.'}';
        $output .= '.main-menu-wrap .navbar-toggle{color:'.get_theme_mod('menu_font_color', '#777777').';}';
        $output .= 'h1{'.$h1style.'}';
        $output .= 'h2{'.$h2style.'}';
        $output .= 'h3{'.$h3style.'}';
        $output .= 'h4{'.$h4style.'}';
        $output .= 'h5{'.$h5style.'}';

        if ( get_theme_mod( 'header_fixed', false ) ){
            $output .= '.site-header.sticky{ position:fixed;top:0;left:auto; z-index:99999;margin:0 auto 30px; width:100%;}';
            $output .= '.site-header.sticky.header-transparent .main-menu-wrap{ margin-top: 0;}';
            $output .= '.site-header.sticky{ background-color: #fff;}';
        }

        $output .= '.site-header{ padding-top: 10px; }';

        $output .= '.site-header{ padding-bottom: 10px; }';
        $output .= 'body{ background-color: '.esc_attr( get_theme_mod( 'body_bg_color', '#fff' ) ) .'; }';

        $output .= '.site-header{ background-color: #fff; }';


        // Button color setting...

        $output .= '.mc4wp-form-fields input[type=submit], .demo-four .mc4wp-form-fields input[type=submit], .common-menu-wrap .nav>li.online-booking-button a, .error-page-inner a.btn.btn-primary.btn-lg,.btn.btn-primary, .package-list-button, .contact-submit input[type=submit],.form-submit input[type=submit]{ background-color: '.esc_attr( get_theme_mod( 'button_bg_color', '#32aad6' ) ) .'; border-color: '.esc_attr( get_theme_mod( 'button_bg_color', '#32aad6' ) ) .'; color: '.esc_attr( get_theme_mod( 'button_text_color', '#fff' ) ) .' !important; border-radius: 4px; }';
        

        if ( get_theme_mod( 'button_hover_bg_color', '#00aeef' ) ) {
            $output .= '.mc4wp-form-fields input[type=submit]:hover, .demo-four .mc4wp-form-fields input[type=submit]:hover, .common-menu-wrap .nav>li.online-booking-button a:hover, .error-page-inner a.btn.btn-primary.btn-lg:hover,.btn.btn-primary:hover, .package-list-button:hover, .contact-submit input[type=submit]:hover,.form-submit input[type=submit]:hover{ background-color: '.esc_attr( get_theme_mod( 'button_hover_bg_color', '#00aeef' ) ) .'; border-color: '.esc_attr( get_theme_mod( 'button_hover_bg_color', '#00aeef' ) ) .'; color: '.esc_attr( get_theme_mod( 'button_hover_text_color', '#fff' ) ) .' !important; }';
        }

        $output .= '.header-solid .common-menu-wrap .nav>li.menu-item-has-children:after, .header-borderimage .common-menu-wrap .nav>li.menu-item-has-children:after, .header-solid .common-menu-wrap .nav>li>a, .header-borderimage .common-menu-wrap .nav>li>a{ color: #808080; }';


        $output .= 'header.header-transparent .common-menu-wrap .nav>li>a:after,header.header-transparent .common-menu-wrap .nav>li>a:before,header.header-solid .common-menu-wrap .nav>li>a:before, header.header-solid .common-menu-wrap .nav>li>a:after, header.header-borderimage .common-menu-wrap .nav>li>a:before, header.header-borderimage .common-menu-wrap .nav>li>a:after{ color: #808080; }';

        $output .= '.common-menu-wrap .nav>li ul{ background-color: #fff; }';
        $output .= '.common-menu-wrap .nav>li>ul li a{ color: #808080; border-color: #f5f5f5; }';
        $output .= '.common-menu-wrap .nav>li>ul li a:hover{ color: #000; background-color:#fbfbfc; }';
        $output .= '.common-menu-wrap .nav>li > ul::after{ border-color: transparent transparent '.esc_attr( get_theme_mod( 'sub_menu_bg', '#fff' ) ) .' transparent; }';

        $output .= '.subtitle-cover:before{background:'.get_theme_mod( 'sub_header_overlayer_color', 'rgba(0, 0, 0, 0.5)' ).';}';

        $output .= '.subtitle-cover{padding:100px 0; margin-bottom: 100px;}';

        $output .= "body.error404,body.page-template-404{
            width: 100%;
            height: 100%;
            min-height: 100%;
        }";

        return $output;
    }
}
