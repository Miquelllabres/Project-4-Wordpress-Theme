<?php

//REGISTER NEW SIDEBAR//
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Contact Sidebar', 'theme-slug' ),
        'id' => 'sidebar-2',
        'description' => __( 'Contact Sidebar.', 'theme-slug' ),
        'before_widget' => '<p id="%1$s" class="widget %2$s">',
        'after_widget'  => '</p>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}


function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//Archive Function//


add_action("pre_get_posts", "change_posts_per_page_archive");
function change_posts_per_page_archive($query) {
   if ($query->is_main_query() && !is_admin() ) {
       if ( $query->is_archive('products')) {
           $query->set( 'posts_per_page', 16 );
       }
       elseif ( $query->is_archive('adventures')  ) {
           $query->set( 'posts_per_page', 4);
       }
       elseif ( $query->is_archive('post') ) {
           $query->set( 'posts_per_page', 5);
       };
   }    
}
//taxonomies function for archive//

function display_taxonomies($query) {
   if (is_post_type_archive('products')){
              $class = "products";
                $post_type = 'products';

              $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );
                
                $terms = get_terms( $taxonomies );?>
                  <div class="head uppercase">  <h1>shop stuff</h1> </div>
                  <div id="archiveP">
                  <div class="flexP width">
             <?php foreach( $terms as $term ) : ?>
           
                  
                  <div class="teal marginxs uppercase">
                    <a href="<?php echo get_term_link( $term ); ?>"><p><?php echo $term->name; ?></p></a>
                  </div>  
                 
        <?php   endforeach;?>
        </div>
        </div>
      <?php } elseif(is_post_type_archive('adventures')){
             ?>
        <div class="head uppercase">  <h1>latest adventures</h1>  </div>
    <?php } elseif(is_post_type_archive('post')){
     
      }   
}

//LOCATION/
function my_acf_google_map_api( $api ){
  
  $api['key'] = 'AIzaSyC-QpYlY2ZJ2ncB_LekyYbnvxIu9O1-AoQ';
  
  return $api;
  
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

add_action( 'wp_enqueue_scripts', 'wpb_animate_styles' ); 
function wpb_animate_styles() {
 wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri() . '/animate.min.css', '3.5.0', 'all');
}


?>