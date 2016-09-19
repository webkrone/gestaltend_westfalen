<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package westfalen
 */

?>


<div class="container">
  
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <div class="content-block">
  


        <header class="entry-header"> 
          <?php
          if ( is_single() ) :
            the_title( '<h1 class="block-title">', '</h1>' );
          else :
            the_title( '<h2 class="block-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
          endif;


          if ( 'video' === get_post_type() ) : ?>
          <div class="entry-meta">
            <?php westfalen_posted_on(); ?>
          </div><!-- .entry-meta -->
          <?php
          endif; ?>
        </header><!-- .entry-header -->
        <div class="block-title-border"></div>   

        <div class="entry-content">
          <?php
            the_content( sprintf(
              /* translators: %s: Name of current post. */
              wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'westfalen' ), array( 'span' => array( 'class' => array() ) ) ),
              the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ) );

            wp_link_pages( array(
              'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'westfalen' ),
              'after'  => '</div>',
            ) );
          ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
          <?php westfalen_entry_footer(); ?>
        </footer><!-- .entry-footer -->    


    </div>
        


  </article><!-- #post-## -->  
</div>

