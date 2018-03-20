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
    $background_img_static   = get_template_directory_uri()."/assets/img/s-1.jpg";
    $image = $background_img ? "$background_img" : "$background_img_static";      
?>
<div id="page-banner" style="background-image: url(<?php echo esc_url( $image); ?>);">
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
          <?php
         $count_post = 4;
         $query_post = new WP_Query( array( 'post_type' => 'jetpack-portfolio', 'posts_per_page' =>$count_post,'paged' => ( get_query_var('page', 1))) );

         if ($query_post->have_posts()) : while ($query_post->have_posts()) : $query_post->the_post(); ?>
          <li>
            <figure><a href="<?php the_permalink();?>"><?php the_post_thumbnail();?>
              <figcaption>
                <div class="caption-content">
                  <h6><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h6>
                    
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
        
    </div>
    <div class="clearfix"></div>
        <!--portfolio page nav-->
        <nav class="navigation posts-navigation  wow fadeInUp"  role="navigation">
          <ul> <?php
                   global $wp_query;
                   
                   $count_posts = wp_count_posts('jetpack-portfolio');
                   $posts_display_count = 4;
                   $published_posts = $count_posts->publish;
                   $total =$published_posts / $posts_display_count;
                   if(is_float($total)){ $page_total= $total + 1 ;}

                   $page = get_query_var( 'page', 1 );  
                  $big = 999999999; // need an unlikely integer

                  $paginate_links= paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'total' => $page_total,
                    'current'=>$page,
                  ) );
                  if ( $paginate_links ) {
                    echo '<li>';
                    echo wp_kses_post($paginate_links);
                    echo '</li>';
                    
                  }
                  ?>   
          </ul>
        </nav><!--/portfolio page nav-->
    
  </div>
  </div>
</section>
  
  
</div>

<?php
get_footer();
