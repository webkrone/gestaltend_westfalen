<?php
/**
 * Template part for displaying page content in page.php.
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

    
    <div class="container">
      <div class="row">
        

    <div class="col-md-4">
      
    </div>
    <div class="col-md-8">
      <?php the_content(); ?>
    </div><!-- End Display Page Content -->


      </div>
    </div>

<div id="container">
  <div id="content" role="main">
    <?php $args = array(
      'tax_query' => array(
        array(
          'taxonomy' => 'post_format',
          'field'    => 'slug',
          'terms'    => array('post-format-video')
        )
      )
    );
    query_posts( $args );
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    
    ?>

    <div class="col-md-4">
      
      <?php the_title( '<div class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' ); ?>
      <?php the_content();  ?>
       
    </div>

    <?php  

    endwhile; else:
      echo 'no';
    endif;
    wp_reset_query();      
    ?>
  </div><!-- #content -->
</div><!-- #container -->

<?php 


 ?>

	</div><!-- .entry-content -->
    <div>
  <div class="container">
    <div class="row">      
      <div class="block-title">
        <h3>Erfahren Sie Mehr Uber Uns</h3>
      </div>
      <div class="block-title-border"></div>
    </div>  
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
          the_post_thumbnail(); 

          the_title( '<div class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' );
          westfalen_posted_on();

            echo '<div class="block-text-desc">';
            echo excerpt(25);
            echo '</div>'; ?>
        </div>    
        <?php  
        endwhile; else:
          echo 'no';
      endif;
        wp_reset_query();      
      ?>
    </div><!-- #related-content -->    
  </div>



		</div><!-- .entry-footer -->
</article><!-- #post-## -->

