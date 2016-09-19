<?php 

/**
 * Additional Post Types for this theme.
 *
 *
 * @package westfalen
 */
 
add_action( 'init', 'westfalen_post_type' );
function westfalen_post_type() {
  register_post_type( 'fachgebiete',
    array(
      'labels'        => array(
      'add_new_item'  => __( 'Add New Fachgebiete' ),
      'name'          => __( 'Fachgebiete' ),
      'singular_name' => __( 'Fachgebiet' )

      ),
      'supports' => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),      
      'taxonomies' => array('featured'),      
      'public' => true,
      'rewrite' => array('slug' => 'fachgebiete'),            
      'has_archive' => false,
    )
  );
  register_post_type( 'leistungen',
    array(
      'labels'        => array(
      'add_new_item'  => __( 'Add New Leistung' ),
      'name'          => __( 'Leistungen' ),
      'singular_name' => __( 'Leistung' )

      ),
      'supports' => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),      
      'public' => true,
      'rewrite' => array('slug' => 'leistungen'),      
      'has_archive' => false,
    )
  );
  register_post_type( 'anwaelte',
    array(
      'labels'        => array(
      'add_new_item'  => __( 'Add New Anwälte' ),
      'name'          => __( 'Anwälte' ),
      'singular_name' => __( 'Anwält' )

      ),
      'supports' => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),      
      'public' => true,
      'has_archive' => false,
    )
  );  


}

