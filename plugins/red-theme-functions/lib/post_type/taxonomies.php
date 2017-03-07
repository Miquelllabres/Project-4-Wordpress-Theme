<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

function return_tax_args ($t,$safe_name) {
  $return = array(
    'label' => __( $t ),
    'rewrite' => array( 'slug' => $safe_name ),
    'hierarchical' => true,
  );
  return $return;
}
function tax_args($taxes) {
  foreach ($taxes as $k => $t) {
    if (is_array($t)) {
      foreach ($t as $ta) {
        $safe_name = str_replace(' ','_',$ta);
        register_taxonomy($ta,$k,return_tax_args($ta,$safe_name));
      }
    }else {
      $safe_name = str_replace(' ','_',$t);
      register_taxonomy($t,$k,return_tax_args($t,$safe_name));
    }
  }
}

function create_custom_tax() {
  $taxes = array(
    'courses' => array('discipline','duration','courses-location'),
    'instructors' => array('instructors-location'),
    'students' => array('students-location'),
  );
  tax_args($taxes);
}

add_action( 'init', 'create_custom_tax' );


if (is_admin()){
  /*
   * prefix of meta keys, optional
   */
  $prefix = 'ba_';
  /*
   * configure your meta box
   */
  $config = array(
    'id' => 'demo_meta_box',          // meta box id, unique per meta box
    'title' => 'Demo Meta Box',          // meta box title
    'pages' => array('Type'),        // taxonomy name, accept categories, post_tag and custom taxonomies
    'context' => 'normal',            // where the meta box appear: normal (default), advanced, side; optional
    'fields' => array(),            // list of meta fields (can be added by field arrays)
    'local_images' => false,          // Use local or hosted images (meta box images for add/remove)
    'use_with_theme' => false          //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );


  /*
   * Initiate your meta box
   */
  $my_meta =  new Tax_Meta_Class($config);

  /*
   * Add fields to your meta box
   */

  $my_meta->addImage($prefix.'image_field_id',array('name'=> __('My Image ','tax-meta')));

  //Finish Meta Box Decleration
  $my_meta->Finish();
}
