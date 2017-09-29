<?php
/**
 * 
 * Template name: blog-listing
 *  The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package numero
 */

get_header(); ?>

	
<!-- banner Page
    ==========================================-->

<div id="page-banner" style="background-image: url(<?php header_image(); ?>);">
	<div class="content  wow fdeInUp" style="visibility: visible; animation-name: fdeInUp;">
		<div class="container">
			<h1>
                <?php 
					$blog_header  = get_theme_mod( 'numero_blog_header', esc_html__('Our Blog', 'numero' ));
					if ($blog_header != '') echo '<h2>  ' . wp_kses_post($blog_header) . '</h2>'; 
				?>
            </h1>
		</div>
	</div>
</div>

<!--blog body-->
<div id="Blog-post">
	<div class="container">
		<div class="row wow fadeInUp"> 
			<!--blog posts container-->
			<div class="col-md-8 col-sm-8 single-post"> 
				<?php 
					$query_post = new WP_Query( array( 'post_type' => 'post',  ) );
					if ($query_post->have_posts()) :
						while ($query_post->have_posts()) : $query_post->the_post();	
							get_template_part( 'template-parts/blog', get_post_format() );
						endwhile; ?>

				<?php endif; ?>
				<div class="clearfix"></div>
				<!--/portfolio page nav-->
				<nav class="navigation posts-navigation  wow fadeInUp"  role="navigation">
					<ul>
						<?php 	
							the_posts_pagination( array(
								'prev_text' => '<i class="fa fa-chevron-left"></i> ' . __( 'Newer posts', 'numero' ),
								'next_text' => __( 'Older posts', 'numero' ) . ' <i class="fa fa-chevron-right"></i>' ,
							) );
						?>
					</ul>
				</nav>
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
