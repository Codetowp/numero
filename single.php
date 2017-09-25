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


<div id="Blog-post"> 
	<?php
		if(have_posts()):		  
		while ( have_posts() ) : the_post();
	?>
		<div id="page-banner" style="background-image: url(<?php echo the_post_thumbnail_url('full'); ?>);">
			<div class="content  wow fdeInUp" style="visibility: visible; animation-name: fdeInUp;">
				<div class="container">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	<?php endwhile;endif;?>
	<div class="container">
		<div class="row wow fadeInUp"> 
			<!--blog posts container-->
			<div class="col-md-8 col-sm-8 single-post">
				<?php
					if(have_posts()):		  
						while ( have_posts() ) : the_post();
				?>
				<article class="post">       
					<p><?php the_content();?> </p>
				</article>
				<?php endwhile;endif;?>
				<div class="clearfix"></div>
				<footer class="entry-footer entry-meta-bar">
					<div class="entry-meta">
						<i class="fa fa-tags"></i> 
							<span class="tag-links  clearfix"> 
								<a href="#" rel="tag">wordpress</a>
								<a href="#" rel="tag">themes</a> 
							</span> 
					</div>
				</footer>
				<!--/footer tags-->
				<div class="clearfix"></div>
				<!--author box-->
				<div class="author-box"> 
				<div class="author-box"> <?php echo get_avatar( get_the_author_meta('user_email'), '100', '' ); ?> 
					<div class="author-box-title"> Authored By <a href="#" rel="author"><?php the_author_link(); ?> </a> </div>
					<div class="author-description"><?php the_author_meta('description'); ?></div>
					<div class="author_social"> </div>
				</div>
				<!--/author box-->
			
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
					 <?php grit_related_post(); ?>
				</div>
				<!--/Also like-->

				<div class="clearfix"></div>
			
				<!--comment-->
				<div id="comments" class="comments-area text-left">
					<h2 class="comments-title"> Comments </h2>
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
get_sidebar();
get_footer();
