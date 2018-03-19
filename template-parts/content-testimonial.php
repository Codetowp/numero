<?php
/**
 * Template part for displaying testimonial section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Numero
 */

?>
<section id="testimonials-block" class="text-center">
  <div class="container">
    <div class="row"> 
      
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
       <?php 
          $testimonial  = get_theme_mod( 'numero_testimonial_header', __('Session Title', 'numero' ));
          echo '<h2>  ' . esc_html($testimonial) . '</h2>'; 
        ?>
      </div>
      <!--/section-title-->
      
      <div class="col-md-6 col-md-offset-3">
        <div id="testimonial" class="owl-carousel owl-theme">
          <?php 
                            $posts_per_page_testimonial = get_theme_mod( 'numero_testimonial_count' );
                            $args = array(
                                'post_type'      => 'jetpack-testimonial',
                                'posts_per_page' => $posts_per_page_testimonial,
                            );

                            $project_query = new WP_Query ( $args );

                            if ( post_type_exists( 'jetpack-testimonial' ) && $project_query -> have_posts() ) :

                                while ( $project_query -> have_posts() ) : $project_query -> the_post();
               ?>
          <div class="item"> <?php the_post_thumbnail();?>
            <p><strong><?php the_title();?></strong><?php the_excerpt();?></p>
            <h5><?php echo esc_html( wp_trim_words( get_the_content(), 10, '...' ));?></h5>
          </div>
          <?php  endwhile; endif;  wp_reset_postdata();?>
        </div>
      </div>
    </div>
  </div>
</section>