<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Numero
 */

get_header(); ?>

		<div id="page-banner" style="background-image: url(<?php header_image(); ?>);">
  <div class="content wow fdeInUp" style="visibility: visible; animation-name: fdeInUp;">
    <div class="container">
     <h1><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'numero' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
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
		if ( have_posts() ) : 
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

        
        <div class="clearfix"></div>
        
      
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
