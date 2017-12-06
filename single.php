<?php
/**
 * template name: single
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package numero
 */

get_header(); ?>


<!-- banner Page
    ==========================================-->


   
<?php
		if(have_posts()):		  
		while ( have_posts() ) : the_post();
 
?> 
  	<?php get_template_part( 'template-parts/content', 'single' ); ?>	
    
 <?php endwhile;endif;?>

        <div class="clearfix"></div>
        
        <!--posts navigation-->
        <nav class="navigation posts-navigation"  role="navigation">
          <ul>
           <?php 	
				the_posts_pagination( array(
					'prev_text' => '<i class="fa fa-chevron-left"></i> ' . __( 'Newer posts', 'numero' ),
					'next_text' => __( 'Older posts', 'numero' ) . ' <i class="fa fa-chevron-right"></i>' ,
				) );
			?>
          </ul>
        </nav>
        <!--/posts navigation-->
        <div class="clearfix"></div>
          <!--Also like-->
        <div class="also-like-block"> 
            <?php numero_related_post(); ?>
         
        </div>
        <!--/Also like-->
        <div class="clearfix"></div>
        <!--comment-->
        
        <div id="comments" class="comments-area text-left">
          	<?php comments_template();?>          
        </div>
        <!--/comment--> 
        
      </div>
      <!--blog posts container--> 
      
      <!--aside-->
      <aside class="col-md-4 col-sm-4" > 
          <?php get_sidebar(); ?> 
      </aside>
      <!--aside-->
      
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<?php
get_footer();
