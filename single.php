<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Numero
 */

get_header(); ?>

	
<div id="page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  <div class="content  wow fdeInUp" style="visibility: visible; animation-name: fadeInUp;">
    <div class="container">
      <h1><?php esc_html_e('Our Blog','numero') ;?></h1>
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
        
        <!--author box-->
        <div class="author-box"><?php echo get_avatar( get_the_author_meta('ID'), '100', '' ); ?>
          <div class="author-box-title"><?php esc_html_e('Authorized By', 'numero'); ?><?php the_author_posts_link(); ?> </div>
          <div class="author-description"><?php the_author_meta('description'); ?></div>
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
