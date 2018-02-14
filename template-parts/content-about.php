<?php
/**
 * Template part for displaying about section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Numero
 */

?>
<section id="about-us-block">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center">
         <?php 
                        $aout_header  = get_theme_mod( 'numero_about_header_text', __('About Us', 'numero' ));
                         echo '<h2 class="wow fadeInUp">  ' . esc_html($aout_header) . ' </h2>'; 
                    ?>

                    <?php 
                        $about_desc  = get_theme_mod( 'numero_about_description', __('Section Description', 'numero' ));
                         echo '<p class="wow zoomIn">  ' . wp_kses_post($about_desc) . '</p>'; 
                    ?>
      </div>
      <!--/section-title--> 
      <?php
$page_ids = numero_get_section_about_data();
?>
<?php
if ( ! empty( $page_ids ) ) 
{
    $col = 3;
    $num_col = 4;
    $n = count( $page_ids );
    if ($n < 4) 
    {
        switch ($n) 
        {
            case 3:
            $col = 4;
            $num_col = 3;
            break;
            case 2:
            $col = 6;
            $num_col = 2;
            break;
            default:
            $col = 12;
            $num_col = 1;
        }
    }
    $j = 0;
    global $post;    
    foreach ($page_ids as $post_id => $settings  ) 
    {
        $post_id = $settings['content_page'];
        $post_id = apply_filters( 'wpml_object_id', $post_id, 'page', true );
        $posts = get_post( $post_id );
        setup_postdata( $posts );

        if ( $settings['icon'] ) 
        {
            $settings['icon'] = trim( $settings['icon'] );
            $class = esc_attr( $settings['icon'] );
        }  
        else{

          $class = '';
        }            
        ?>
      <!--col-1-->
      <div class="col-md-4 col-sm-4 col-about-us wow fadeInLeft"><?php if( $class !=''){ ?> <i class="<?php echo esc_attr($class); ?>"></i><?php } ?>
        <h4><?php echo esc_html( get_the_title($post_id)); ?></h4>
        <p><?php echo esc_html( wp_trim_words( get_the_content(), 10, '...' ));?></p>
      </div>
      <!--/col-1--> 
       <?php

    } // end foreach
    wp_reset_postdata();
}
else
{?>            
      <!--col-2-->
      <div class="col-md-4 col-sm-4 col-about-us wow zoomIn"> <i class="fa fa-clock-o"></i>
        <h4>Expertise</h4>
        <p>She gave my mother such a turn, that I have always been convinced I am indebted to Miss Betsey for having been born on a Friday.</p>
      </div>
      <!--/col-2--> 
      
      <!--col-3-->
      <div class="col-md-4 col-sm-4 col-about-us wow fadeInRight"> <i class="fa fa-clock-o"></i>
        <h4>Future plans</h4>
        <p>Looking cautiously round, to ascertain that they were not overheard, the two hags cowered nearer to the fire, and chuckled heartily.</p>
      </div>
      <!--/col-3--> 
      <?php  }?>
    </div>
  </div>
</section>