<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Numero
 */

get_header(); ?>

	<div id="page-banner" style="background-image: url(<?php header_image(); ?>);">
	<div class="content  wow fdeInUp" style="visibility: visible; animation-name: fdeInUp;">
		<div class="container">
			<header class="page-header">
				<?php
					the_archive_title( '<h1 >', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
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
					if ( have_posts() ) : ?>
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

				/*
				* Include the Post-Format-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Format name) and that will be used instead.
				*/
				get_template_part( 'template-parts/content', 'archive' );

				endwhile; endif; ?>
				<div class="clearfix"></div>
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
			<aside class="col-md-4 col-sm-4" > 
				<?php get_sidebar(); ?>
			</aside>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php
get_footer();
