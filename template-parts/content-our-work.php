<?php
/**
 * Template part for displaying our work section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Numero
 */

?>
<section id="our-work-block">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
         <?php 
                    $work_header  = get_theme_mod( 'numero_our_work_header', esc_html__('Session Title', 'numero' ));
                     echo '<h2>  ' . esc_html($work_header) . '</h2>'; 
                    ?>
                    <?php 
                    $work_desc  = get_theme_mod( 'numero_our_work_description', esc_html__('Session Description', 'numero' ));
                     echo '<p>  ' . wp_kses_post($work_desc) . '</p>'; 
                    ?>
      </div>
      <!--/section-title-->
      <div class="clearfix"></div>
      <div class="works">
        <ul class="grid wow zoomIn">
          <?php 
                    $posts_per_page_portfolio = get_theme_mod( 'numero_our_work_count' ,8);
                    $args = array(
                    'post_type'      => 'jetpack-portfolio',
                    'posts_per_page' => $posts_per_page_portfolio,
                    );
                    $project_query = new WP_Query ( $args );

                    if ( post_type_exists( 'jetpack-portfolio' ) && $project_query -> have_posts() ) :

                        while ( $project_query -> have_posts() ) : $project_query -> the_post();
                    ?>
          <li>
            <figure> <?php the_post_thumbnail();?>
              <figcaption>
                <div class="caption-content">
                  <h6><?php the_title(); ?></h6>
                 <?php 
                      $before='';
                      $after='';
                      $separator=',';
                      the_terms(get_the_ID(), 'jetpack-portfolio-type', $before, $separator, $after); 
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
        <div class="clearfix"></div>
        <a href="<?php  echo esc_url( home_url( '/portfolio' ) );?>" class="more-links"><?php esc_html_e('View All Projects','numero'); ?></a> </div>
    </div>
  </div>
</section>