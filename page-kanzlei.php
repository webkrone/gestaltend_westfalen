<?php
/*
Template Name: Kanzlei
*/
get_header(); ?>

      <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'kanzlei' );


      endwhile; // End of the loop.




 ?>



<?php get_footer();