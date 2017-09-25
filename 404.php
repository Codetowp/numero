<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package numero
 */

get_header(); ?>

<div id="page-banner" style="background-image: url(<?php header_image(); ?>);">
	<div class="content  wow fdeInUp" style="visibility: visible; animation-name: fdeInUp;">
		<div class="container">
			<header class="page-header">
								<h1 class="page-title">
									<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'numero' ); ?>
								</h1>
							</header><!-- .page-header -->
		</div>
	</div>
</div>


<div id="Blog-post">
	<div class="container">
		<div class="row wow fadeInUp"> 
			<!--blog posts container-->
			<div class="col-md-8 col-sm-8 single-post"> 
			

							<div class="page-content">
								<p>
									<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'numero' ); ?>
								</p>

								<?php
									get_search_form();									
								?>
							</div><!-- .page-content -->
				</div><!-- #primary -->
				
			<!--aside-->
			<aside class="col-md-4 col-sm-4" > 
				<?php the_widget( 'WP_Widget_Recent_Posts' );?>
			</aside>
			<!--aside-->
			<div class="clearfix"></div>
			</div>
		</div>
	</div>


<?php
get_footer();
