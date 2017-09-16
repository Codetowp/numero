<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package numero
 * Template Name: Page Fullwidth
 */

get_header(); ?>


<div id="Blog-post"> 
  
  <!-- banner Page
    ==========================================-->
  
  <header class="entry-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/s-1.jpg);">
    <div class="content  wow fadeInUp">
      <div class="container">
        <h1><?php the_title(); ?></h1>
	  </div>
    </div>
  </header>
  <div class="container">
    <div class="row wow fadeInUp"> 
      <!--blog posts container-->
      <div class="col-md-10 col-sm-10 col-md-offset-1 single-post">
        <?php
          if(have_posts()):		  
			while ( have_posts() ) : the_post();
        ?>
          
          <article class="post"> 
          
         
          <p><?php echo the_content();?> </p>
         
        </article>
       <?php endwhile;endif;?>
        
        
        <div class="clearfix"></div>
        
        <!--/comment--> 
        
      </div>

    </div>
  </div>
</div>


<?php
get_footer();
