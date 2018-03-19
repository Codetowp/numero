<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Numero
 */

get_header(); ?>

	<div id="page-banner" style="background-image: url(img/s-1.jpg);">
  <div class="content wow fdeInUp" style="visibility: visible; animation-name: fdeInUp;">
    <div class="container">
      <h1>Our Blog</h1>
    </div>
  </div>
</div>

<!--blog body-->
<div id="Blog-post">
  <div class="container">
    <div class="row"> 
      <!--blog posts container-->
      <div class="col-md-8 col-sm-12 single-post"> 
        
        <!--article-->
       
        <!--/article--> 
        
      <?php
		

		
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
         $count_post = get_theme_mod('numero_blog_count',3);
         $query_post = new WP_Query( array( 'post_type' => 'post','post__not_in' => get_option( 'sticky_posts' ), 'posts_per_page' =>$count_post,'paged'          => $paged ) );

         if ($query_post->have_posts()) : while ($query_post->have_posts()) : $query_post->the_post();
			/* Start the Loop */
			

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

        
        <div class="clearfix"></div>
        
        <!--portfolio page nav-->
        <nav class="navigation posts-navigation  wow fadeInUp"  role="navigation">
          <ul>
             <li>
            <?php
            the_posts_pagination(
              array(
                'prev_text' => '<i class="fa fa-chevron-left"></i>' ,
                'next_text' =>  '<i class="fa fa-chevron-right"></i>',
              )
            );
            ?>
            <?php wp_reset_postdata(); ?>
          </li>
          </ul>
        </nav><!--/portfolio page nav-->
      </div>
      <!--blog posts container--> 
      
      <!--aside-->
      <aside class="col-md-4 col-sm-12"> 
        
       <?php get_sidebar(); ?>
        
        <!--Meta  end--> 
        
      </aside>
      <!--aside-->
      
      <div class="clearfix"></div>
    </div>
  </div>
</div>

		
		

<?php

get_footer();
