<?php
/*
Template Name: Fachgebiete
*/
get_header(); ?>

      <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'fachgebiete' );

      endwhile; // End of the loop.
 ?>

<?php get_footer();