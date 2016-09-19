<?php
/*
Template Name: Contact Page
*/
get_header(); ?>


 <div id="map-container" style="width:100%;height:500px"></div>


<div id="primary">
  <div id="content" role="main">


    <font color="#FF0000">
      <?php
        if(isset($_POST['submit']))
        {
          $flag=1;
          if($_POST['yourname']=='')
            {
              $flag=0;
              echo "Please Enter Your Name<br>";
            }
          else if(!preg_match('/[a-zA-Z_x7f-xff][a-zA-Z0-9_x7f-xff]*/',$_POST['yourname']))
            {
              $flag=0;
              echo "Please Enter Valid Name<br>";
            }
          if($_POST['email']=='')
            {
              $flag=0;
              echo "Please Enter E-mail<br>";
            }
          else if(!eregi("^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$", $_POST['email']))
            {
              $flag=0;
              echo "Please Enter Valid E-Mail<br>";
            }
          if($_POST['subject']=='')
            {
              $flag=0;
              echo "Please Enter Subject<br>";
            }
          if($_POST['message']=='')
            {
              $flag=0;
              echo "Please Enter Message";
            }
          if ( empty($_POST) )
            {
              print 'Sorry, your nonce did not verify.';
              exit;
            }
          else
            {
              if($flag==1)
                {
                  wp_mail(get_option("admin_email"),trim($_POST[yourname])." sent you a message from ".get_option("blogname"),stripslashes(trim($_POST[message])),"From: ".trim($_POST[yourname])." <".trim($_POST[email]).">rnReply-To:".trim($_POST[email]));
                  echo "Mail Successfully Sent";
                }
            }
        } 
      ?>
    </font>




    <div class="container">


      <?php
      while ( have_posts() ) : the_post();
      ?>
      <header class="entry-header">
        <?php the_title( '<div class="block-title"><h1>', '</></div>' ); ?>
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


      <div class="row">
        <div class="col-md-4">
          <?php the_content(); ?>           
        </div> 
        <div class="col-md-8">
          <form method="post" id="contactus_form">
            <div class="form-group">
              <input type="text" class="form-control" name="yourname" id="yourname" placeholder="Ihr Name">
            </div>

            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Ihr Email">
            </div>
            <textarea class="form-control" rows="3" name="message" id="message" placeholder="Ihr Nachricht"></textarea>
            
            <button  type="submit" class="btn btn-default" name="submit" id="submit" value="Send">Abschicken</button>
          </form>                    
        </div>                
      </div>


      <?php
      endwhile; // End of the loop.
      ?>
    </div>



<!-- 
          <form method="post" id="contactus_form">
            Your Name:<input type="text" name="yourname" id="yourname" rows="1" value="" />
            <br /><br />
            Your Email:<input type="text" name="email" id="email" rows="1" value="" />
            <br /><br />
            Subject:<input type="text" name="subject" id="subject" rows="1" value=""></p>
            <br /><br />
            Leave a Message:<textarea name="message" id="message" ></textarea>
            <br /><br />
            <input type="submit" name="submit" id="submit" value="Send"/>
          </form>  --> 

  </div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>

