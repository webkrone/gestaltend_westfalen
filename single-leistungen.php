<?php
/**
 * The template for displaying all leistungen posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package westfalen
 */

get_header(); ?>

<div class="container">
  
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">      
      <?php the_title( '<h1 class="block-title">', '</h1>' ); ?> 
      <div class="block-title-border"></div> 
    </header><!-- .entry-header -->

    <div class="entry-content" style="width: 70%;">


      <?php echo $post->post_content; ?>

    </div><!-- .entry-content -->

    <footer class="entry-footer">
      <a class="posts-overview-link" href="#" title="">Zurück zur Neuigkeiten-Übersicht</a>
      <?php westfalen_entry_footer(); ?>
    </footer><!-- .entry-footer -->    

  </article><!-- #post-## -->

</div>

<?php get_footer();
