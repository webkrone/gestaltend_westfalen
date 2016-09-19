<?php
/*
Template Name: Video Gallery
*/
get_header(); ?>


      <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'videogallery' );


      endwhile; // End of the loop.




 ?>






<?php get_footer();






