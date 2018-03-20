<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Numero
 */

get_header(); ?>
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

	<div id="page-banner" style="background-color: #191919">
  <div class="content  wow fdeInUp" style="visibility: visible; animation-name: fadeInUp;">
    <div class="container">
      <h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'numero' ); ?></h1>
    </div>
  </div>
</div>

<!--blog body-->

<div id="Blog-post"> 
  
 
  <div class="container">
    <div class="row wow fadeInUp"> 
      <!--blog posts container-->
      <div class="col-md-12 col-sm-12 single-post text-center">

		
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
          
          <!--Header-->
          <header class="entry-header"> 
            </header>
        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'numero' ); ?>
        	
     	<?php
						get_search_form();?>

        </p>
               
    

	
</article><!-- #post-<?php the_ID(); ?> -->
	
       
        <div class="clearfix"></div>
        <!--Also like-->
        <div class="also-like-block"> 
          
        
          <!--/ article --> 
          
        </div>
        <!--/Also like-->
        
        <div class="clearfix"></div>
        <!--comment-->
        
      
        <!--/comment--> 
        
      </div>
      <!--blog posts container--> 
      
      <!--aside-->
      
      <!--aside-->
      
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<?php

get_footer();
