<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package westfalen
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="container" role="main">
    

  
    <!-- Begin Slider Bottom  -->
    <div class="content-block">

      <div class="col-md-8 col-md-offset-2">
        <em class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</em>  
      </div>    

      
    </div>



    <!-- End Slider Bootom -->
      


    <!-- Begin Section 1 -->
    <div class="row">
      <div class="content-block">
        <div class="col-lg-12">

         <div class="block-title">
            <small>Lorem ipsum dolor</small>
            <h1>KERNKOMPETENZEN</h1>
          </div>
          <div class="block-title-border"></div>   

        </div>
        <div class="col-md-8">
          <p class="block-text-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur facilis iusto aspernatur consequatur laborum illum molestias, ipsam explicabo reprehenderit commodi asperiores magni soluta, fuga alias dolorem vel aperiam nulla vero. Consectetur facilis iusto aspernatur consequatur laborum illum molestias, ipsam explicabo reprehenderit commodi asperiores magni soluta, fuga alias dolorem vel aperiam nulla vero.
          </p>
          <a class="text-link" href="#">Zur gesamten Übersicht unserer Kompetenzen</a>        
        </div>
        <div class="col-md-4">
          <ul>
            <?php  
            $args = array(  'post_type' => 'Fachgebiete',
                            'orderby'   => 'menu_order',
                            'order'     => 'ASC'
                             );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
              echo '<div class="col-md-4">';
              the_title( '<li><div class="text-link"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' );

            endwhile; ?>
          </ul>      
        </div>        
      </div>
    </div>
    <!-- End Section 1 -->
    <!-- Begin Section 2 -->
    <div class="row">
      <h2>NEUIGKEITEN</h2>
      <div class="block-title-border"></div> 





    <!-- End Section 2 -->

  <div role="main">
    <?php $args = array(
      'posts_per_page'   => 3,
      'tax_query' => array(
        array(
          'taxonomy' => 'post_format',
          'field'    => 'slug',
          'terms'    => array('post-format-video'),
          'operator' => 'NOT IN'          
        )
      )
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



    <!-- Begin Section 3 -->
    <div class="row">
      <div class="content-block">
        
        <div class="col-md-5">
          <div class="block-title">
            <small>Lorem ipsum dolor</small>
            <h1>VIDEO</h1>
          </div>
          <div class="block-title-border"></div>
          <p class="block-text-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. 
          </p>
          <a class="text-link" href="#">Zur gesamten Übersicht unserer Kompetenzen</a>        
        </div>
        <div class="col-md-7">

          <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=sNhhvQGsMEc" allowfullscreen=""></iframe>
          </div>
        </div>   

      </div>      
    </div>      
    <!-- End Section 3 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

// get_sidebar();


get_footer();
