<?php
/**
 * Template part for displaying blog section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Numero
 */

?>
<section id="from-blog">
  <div class="container">
    <div class="row wow fdeInUp"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
         <?php 
                    $blog_header  = get_theme_mod( 'numero_blog_header', __('Our Blog', 'numero' ));
                    echo '<h2>  ' . esc_html($blog_header) . '</h2>'; 
                    ?>

                    <?php 
                    $blog_desc  = get_theme_mod( 'numero_blog_description', __('Session Description', 'numero' ));
                     echo '<p>  ' . wp_kses_post($blog_desc) . '</p>'; 
                    ?>
      </div>
      <!--/section-title--> 
     <?php 
                $count_blog = get_theme_mod( 'numero_blog_count', 3 );
                $query_post = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' =>$count_blog, 'post__not_in' => get_option( 'sticky_posts' ) ) );

                if ($query_post->have_posts()) : while ($query_post->have_posts()) : $query_post->the_post();

                   get_template_part( 'template-parts/content', get_post_format() );

                endwhile;endif;
                wp_reset_postdata(); 
                ?>
                <!--/blog post--> 
            <a href="<?php echo  esc_url( home_url( '/blog' ) ); ?>" class="more-links"><?php esc_html_e('Go to Blog','numero'); ?></a> 
            </div>
  </div>
</section>