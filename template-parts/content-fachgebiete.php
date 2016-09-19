<?php
/**
 * Template part for displaying Fachgebiete page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package westfalen
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


  <header class="entry-header">
    <?php the_title( '<div class="block-title"><h1>', '</h1></div>' ); ?>
    <div class="block-title-border"></div>

      <?php
        edit_post_link(
          sprintf(
            /* translators: %s: Name of current post */
            esc_html__( 'Edit %s', 'westfalen' ),
            the_title( '<span class="screen-reader-text">"', '"</span>', false )
          ),
          '<span class="edit-link">',
          '</span>'
        );
      ?>

  </header><!-- .entry-header -->


  <div class="entry-content">
    <div class="col-md-4">
      
    </div>
    <div class="col-md-8">
      <?php the_content(); ?>


    </div>


      <?php  
      $args = array(  'post_type' => 'Fachgebiete',
                      'orderby'   => 'menu_order',
                      'order'     => 'ASC'
                       );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
        echo '<div class="col-md-4">';
        the_post_thumbnail(); 

          the_title( '<div class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' );

          echo '<div class="block-text-desc">';
          echo excerpt(25);
          echo '</div>';
        echo '</div>';

      endwhile; ?>


  </div><!-- .entry-content -->
    <footer>

  <h3>Erfahren Sie Mehr Uber Uns</h3>
  <div class="row">
    <?php $args = array(
      'post_type' => 'page',      
      'posts_per_page'   => 3,
      'orderby'   => 'menu_order',
              
    );
    query_posts( $args );
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


      <div class="col-md-4">
      <?php 
        the_title( '<div class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' );
        westfalen_posted_on();

          echo '<div class="block-text-desc">';
          the_excerpt();
          echo '</div>'; ?>
      </div>    
      <?php  
      endwhile; else:
        echo 'no';
    endif;
      wp_reset_query();      
    ?>
  </div><!-- #content -->


    </footer><!-- .entry-footer -->
</article><!-- #post-## -->

