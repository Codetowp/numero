<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Numero
 */

get_header(); ?>

	
<div id="page-banner" style="background-image: url(img/s-1.jpg);">
  <div class="content  wow fdeInUp" style="visibility: visible; animation-name: fdeInUp;">
    <div class="container">
      <h1>Our Blog</h1>
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

			get_template_part( 'template-parts/content', 'single' );

			
			// If comments are open or we have at least one comment, load up the comment template.
			

		endwhile; // End of the loop.
		?>

	
        <div class="clearfix"></div>
        <footer class="entry-footer entry-meta-bar">
          <div class="entry-meta"> <i class="fa fa-tags"></i> <span class="tag-links  clearfix"> <a href="#" rel="tag">wordpress</a> <a href="#" rel="tag">themes</a> </span> </div>
        </footer>
        <!--/footer tags-->
        
        <div class="clearfix"></div>
        
        <!--author box-->
        <div class="author-box"> <img alt="" src="img/team/03.jpg"  class="avatar " height="100" width="100">
          <div class="author-box-title"> Authored By <a href="#" rel="author">Rijo Abraham</a> </div>
          <div class="author-description"> Rijo loves to dig into WordPress, explore what’s possible and share his knowledge with readers. He also has deep interest in anything related to increasing productivity, writing better and being happy! </div>
          <div class="author_social"> </div>
        </div>
        <!--/author box-->
        
        <div class="clearfix"></div>
        
        <!--posts navigation-->
        <nav class="navigation posts-navigation"  role="navigation">
          <ul>
            <li class="pull-left">
              <div class="nav-previous"><i class="fa fa-chevron-left"></i> <?php previous_post_link('%link', 'Previous Post'); ?></div>
            </li>
            <li class="pull-right">
              <div class="nav-next"><?php next_post_link('%link', 'Next Post'); ?><i class="fa fa-chevron-right"></i></div>
            </li>
          </ul>
        </nav>
        <!--/posts navigation-->
        
        <div class="clearfix"></div>
        <!--Also like-->
        <div class="also-like-block"> 
          
         <?php numero_related_post(); ?>
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
