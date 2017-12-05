<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package numero
 */

get_header(); ?>

<!-- banner Page
==========================================-->

<?php
    $background_img   = esc_url( get_theme_mod( 'numero_portfolio_page_background_img' ) );   
    $background_img_static   = get_template_directory_uri()."/img/s-1.jpg";
    $image = $background_img ? "$background_img" : "$background_img_static";      
?>
<div id="page-banner" style="background-image: url(<?php echo $image; ?>);">
  <div class="content  wow fdeInUp" style="visibility: visible; animation-name: fdeInUp;">
    <div class="container">
      <h1><?php
					if ( isset( $jetpack_options['page-title'] ) && '' != $jetpack_options['page-title'] )
						echo esc_html( $jetpack_options['page-title'] );
					else
						esc_html_e( 'Portfolio', 'numero' );
				?></h1>
    </div>
  </div>
</div>

<div id="Blog-post"> 
 
  <!-- our works block
    ==========================================-->
<section id="our-work-block">
  <div class="container">
    <div class="row"> 
      
      <div class="clearfix"></div>
      <div class="works">
        <ul class="grid">
           <?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
          <li>
            <figure><?php the_post_thumbnail();?>
              <figcaption>
                <div class="caption-content">
                  <h6><?php the_title(); ?></h6>
                    
                    <?php
										echo get_the_term_list(get_the_ID(), 'jetpack-portfolio-type',
										sprintf(
										 '<a href="#">%1$s'
											 ),
										 esc_attr_x(' , ', 'Used between list items, there is a space after the comma.', 'numero' ),
										 '</a>'
										 );
									?>
                    
                  <ul class="work-more">
                    <li><a href="<?php the_permalink();?>"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
         <?php  endwhile; endif;  wp_reset_postdata();?>
        </ul>
        
    </div>
    <div class="clearfix"></div>
        <!--portfolio page nav-->
        <nav class="navigation posts-navigation  wow fadeInUp"  role="navigation">
          <?php the_posts_navigation( array(
							'prev_text'          => esc_html__( 'Older projects', 'numero' ),
							'next_text'          => esc_html__( 'Newer projects', 'numero' ),
							'screen_reader_text' => esc_html__( 'Projects navigation', 'numero' ),
							) ); 
						?>
        </nav><!--/portfolio page nav-->
    
  </div>
  </div>
</section>
  
  
</div>

<?php
get_footer();
