<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package numero
 */

get_header(); ?>

	<!-- Banner -->
	
	<?php
    $background_img   = esc_url( get_theme_mod( 'numero_portfolio_page_background_img' ) );   
    $background_img_static   = get_template_directory_uri()."/assets/img/s-1.jpg";
    $image = $background_img ? "$background_img" : "$background_img_static";      
?>
<div id="page-banner" style="background-image: url(<?php echo esc_url( $image); ?>);">
		<div class="content wow fadeInUp">
			<div class="container">
				<?php the_archive_title( '<h1 >', '</h1>' ); ?>
			</div>
		</div>
	</div>
	<!-- our works -->
	<section id="our-work-block">
		<div class="container">
			<div class="row">
				<div class="works">
					<!--portfolio grid-->
					<ul class="grid">
						<?php 
						if ( have_posts() ) :
							/* Start the Loop */ 
							while ( have_posts() ) : the_post(); ?>
								<li class="wow fadeInUp">
									<figure><?php the_post_thumbnail(); ?>
										<figcaption>
											<div class="caption-content wow fadeInUp">
												<h6><?php the_title(); ?></h6>
												<hr>
												<?php 
												$before='';
												$after='';
												$separator=',';
												the_terms(get_the_ID(), 'jetpack-portfolio-type', $before, $separator, $after); 
												?>
												<ul class="work-more">
													<li><a href="<?php the_post_thumbnail_url();?>"><i class="fa fa-search"></i></a></li>
													<li><a href="<?php the_permalink();?>"><i class="fa fa-link"></i></a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</li>
							<?php 
							endwhile;
						else :				
						get_template_part( 'template-parts/content', 'none' );	
						endif;
						?> 
					</ul>
					<!--/portfolio grid-->
					<div class="clearfix"></div>
					<!--/portfolio page nav-->
					<nav class="navigation posts-navigation  wow fadeInUp" role="navigation">
						<ul>
							<?php the_posts_navigation( array(
								'prev_text'          => esc_html__( 'Older projects', 'numero' ),
								'next_text'          => esc_html__( 'Newer projects', 'numero' ),
								'screen_reader_text' => esc_html__( 'Projects navigation', 'numero' ),
							) ); 
							?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
