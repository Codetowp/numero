<?php
/**
 * Template part for displaying our services section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Numero
 */

?>
<section id="our-services">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
       <?php 
                        $service_header  = get_theme_mod( 'numero_service_header', __('Section Title', 'numero' ));
                         echo '<h2>  ' . esc_html($service_header) . '</h2>'; 
                    
                        $service_desc  = get_theme_mod( 'numero_service_description', __('Section Description', 'numero' ));
                         echo '<p>' . wp_kses_post($service_desc) . '</p>'; 
                    ?>
      </div>
      <!--/section-title--> 
      <?php
 $page_ids = numero_get_section_service();
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
      $icon_class='';
      if ( $settings['icon'] ) 
      {
        $settings['icon'] = trim( $settings['icon'] );
        $icon_class = esc_attr( $settings['icon'] );
      }  
      else{
        $icon_class='';
      }            
      ?>
      <!--col-1-->
      <div class="col-md-4 col-sm-6 col-xs-12 services-block eq-blocks wow fadeInUp"> <i class="<?php echo esc_attr( $icon_class);?>"></i>
        <div class="services-content">
          <h6><?php echo esc_html(get_the_title($post_id)); ?></h6>
          <p><?php echo esc_html( wp_trim_words( get_the_content($post_id), 10, '...' ));?> </p>
        </div>
      </div>
      <!--/col-1--> 
      <?php
 
        } // end foreach
        wp_reset_postdata();
  }
  else
  {?>              
      <!--col-2-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks wow fadeInUp"> <i class="fa fa-cart-plus"></i>
        <div class="services-content">
          <h6>Shopping ready</h6>
          <p>Now the races of these two have been for some ages utterly extinct, and besides to discourse any further of them.</p>
        </div>
      </div>
      <!--/col-2--> 
      
      <!--col-3-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks wow fadeInUp"> <i class="fa fa-sliders"></i>
        <div class="services-content">
          <h6>bootstrap shortcodes</h6>
          <p>She gave my mother such a turn, that I have always been convinced I am indebt to Miss Betsey for having been born.</p>
        </div>
      </div>
      <!--/col-3--> 
      
      <!--col-4-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks wow fadeInUp"> <i class="fa fa-cog"></i>
        <div class="services-content">
          <h6>seo optimized</h6>
          <p>Now the races of these two have been for some ages utterly extinct, and besides to discourse any further of them.</p>
        </div>
      </div>
      <!--/col-4--> 
      
      <!--col-5-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks wow fadeInUp"> <i class="fa fa-headphones"></i>
        <div class="services-content">
          <h6>fast support</h6>
          <p>She gave my mother such a turn, that I have always been convinced I am indebt to Miss Betsey for having been born.</p>
        </div>
      </div>
      <!--/col-5--> 
      <!--col-6-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks wow fadeInUp"> <i class="fa fa-bookmark"></i>
        <div class="services-content">
          <h6>pixel perfect design</h6>
          <p>This sounded a very good reason, and Alice was quite pleased to know it. 'I never thought of that before!' she said.</p>
        </div>
      </div>
      <!--/col-6--> 
      <?php } ?>
    </div>
  </div>
</section>
