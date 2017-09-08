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
					$post = get_post( $post_id );
					setup_postdata( $post );
						 
			if ( $settings['icon'] ) 
			{
				$settings['icon'] = trim( $settings['icon'] );
				$class = esc_attr( $settings['icon'] );
			}              
			?>

             <div class="col-md-4 col-sm-6 col-xs-12 services-block eq-blocks"> <i class="<?php echo $class;?>"></i>
                    <div class="services-content">
                      <h6><?php the_title(); ?></h6>
                      <p> 
                          <?php 
                                $excerpt = get_the_excerpt();
                                $excerpt = substr( $excerpt , 0, 100); 
                                echo $excerpt;
                            ?> 
                        </p>
                    </div>
              </div>
			<?php
 
        } // end foreach
        wp_reset_postdata();
	}
	else
	{?>                
       <!--col-1-->
      <div class="col-md-4 col-sm-6 col-xs-12 services-block eq-blocks"> <i class="fa fa-desktop"></i>
        <div class="services-content">
          <h6>Fully Responsive</h6>
          <p>This sounded a very good reason, and Alice was quite pleased to know it. 'I never thought of that before!' she said. </p>
        </div>
      </div>
      <!--/col-1--> 
      
      <!--col-2-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks"> <i class="fa fa-cart-plus"></i>
        <div class="services-content">
          <h6>Shopping ready</h6>
          <p>Now the races of these two have been for some ages utterly extinct, and besides to discourse any further of them.</p>
        </div>
      </div>
      <!--/col-2--> 
      
      <!--col-3-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks"> <i class="fa fa-sliders"></i>
        <div class="services-content">
          <h6>bootstrap shortcodes</h6>
          <p>She gave my mother such a turn, that I have always been convinced I am indebt to Miss Betsey for having been born.</p>
        </div>
      </div>
      <!--/col-3--> 
      
      <!--col-4-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks"> <i class="fa fa-cog"></i>
        <div class="services-content">
          <h6>seo optimized</h6>
          <p>Now the races of these two have been for some ages utterly extinct, and besides to discourse any further of them.</p>
        </div>
      </div>
      <!--/col-4--> 
      
      <!--col-5-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks"> <i class="fa fa-headphones"></i>
        <div class="services-content">
          <h6>fast support</h6>
          <p>She gave my mother such a turn, that I have always been convinced I am indebt to Miss Betsey for having been born.</p>
        </div>
      </div>
      <!--/col-5--> 
      <!--col-6-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks"> <i class="fa fa-bookmark"></i>
        <div class="services-content">
          <h6>pixel perfect design</h6>
          <p>This sounded a very good reason, and Alice was quite pleased to know it. 'I never thought of that before!' she said.</p>
        </div>
      </div>
      <!--/col-6--> 
                
<?php  }?>
