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
<div id="page-banner" style="background-image: url(<?php header_image(); ?>);">
  <div class="content  wow fdeInUp" style="visibility: visible; animation-name: fdeInUp;">
    <div class="container">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
</div>
<?php endwhile;endif;?>
<!--blog body-->

<div id="Blog-post"> 
  
  <div class="container">
    <div class="row wow fadeInUp"> 
      <!--blog posts container-->
      <div class="col-md-8 col-sm-8 single-post">
          
          	<?php
					if(have_posts()):		  
						while ( have_posts() ) : the_post();
                             if  ( get_the_post_thumbnail_url()!='')
                                {
                                    $img = get_the_post_thumbnail_url(); 
                                }
                              else
                                {  
                                    $img = get_template_directory_uri()."/img/a-3.jpg" ; 
                                }
          
          
          
				?>
          
        <article class="post"> 
          
          <!--Header-->
          <header class="entry-header"> 
              <span class="date-article"><!--<i class="fa fa-calendar-o"></i> -->
              <?php  numero_posted_on();?>
              </span> <a href="#"><img src="<?php echo $img; ?>" class="img-responsive"></a> <span class="byline"><span class="author vcard"><a href="#"><i class="fa fa-folder-o"></i> <?php numero_entry_footer(); ?></a><a href="#"><i class="fa fa-user-o"></i> <?php echo get_author_name();?></a> </span></span> <a href="#">
            </a></header>
          <!--/Header-->
          
            <p><?php the_content();?></p>
          
          <!--footer tags--> 
          
        </article>
          
          <?php endwhile;endif;?>
        <div class="clearfix"></div>
        <footer class="entry-footer entry-meta-bar">
          <div class="entry-meta"> <i class="fa fa-tags"></i> <span class="tag-links  clearfix"> <?php the_category(' / '); ?></span> </div>
        </footer>
          
        <!--/footer tags-->
        
        <div class="clearfix"></div>
        
        <!--author box-->
          
          <div class="author-box"> <?php echo get_avatar( get_the_author_meta('user_email'), '100', '' ); ?> 
					<div class="author-box-title"> Authored By <a href="#" rel="author"><?php the_author_link(); ?> </a> </div>
					<div class="author-description"><?php the_author_meta('description'); ?></div>
					<div class="author_social"> </div>
				</div>
              
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
