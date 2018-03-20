<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Numero
 */

get_header(); ?>

	<div id="page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  <div class="content  wow fdeInUp" style="visibility: visible; animation-name: fadeInUp;">
    <div class="container">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
</div>

<!--blog body-->

<div id="Blog-post"> 
  
 
  <div class="container">
    <div class="row wow fadeInUp"> 
      <!--blog posts container-->
      <div class="col-md-8 col-sm-12 single-post">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			
			// If comments are open or we have at least one comment, load up the comment template.
			

		endwhile; // End of the loop.
		?>

	
        <div class="clearfix"></div>
       <?php
    $id = get_the_ID();

    $categories = get_the_category($id);
    if( $categories !='' ){
      ?>    
      <footer class="entry-footer entry-category-bar">
        <div class="entry-meta"> <?php esc_html_e('Category','numero'); ?>:<?php
        foreach ( $categories as $category ) {
          echo  esc_html( $category->name );
        }
        ?> </div>
      </footer>
      <?php } ?>
        <!--/footer tags-->
        
        <div class="clearfix"></div>
        
       
        <!--/author box-->
        
        <div class="clearfix"></div>
        
        <!--posts navigation-->
       
        <!--/posts navigation-->
        
        <div class="clearfix"></div>
        <!--Also like-->
        <div class="also-like-block"> 
          
        
          <!--/ article --> 
          
        </div>
        <!--/Also like-->
        
        <div class="clearfix"></div>
        <!--comment-->
        
        <?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;?>
        <!--/comment--> 
        
      </div>
      <!--blog posts container--> 
      
      <!--aside-->
      <aside class="col-md-4 col-sm-12" > 
        
        <?php get_sidebar(); ?>
        
      </aside>
      <!--aside-->
      
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<?php

get_footer();
