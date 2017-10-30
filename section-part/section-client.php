<?php
 $page_ids = numero_get_section_client_data();
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

            <div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/client/01.png"> </div>
           
			<?php
 
        } // end foreach
        wp_reset_postdata();
	}
	else
	{?>                
            <div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/client/01.png"> </div>
            <div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/client/02.png"> </div>
			<div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/client/03.png"> </div>
			<div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/client/04.png"> </div>
			<div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/client/05.png"> </div>
			<div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/client/01.png"> </div>
			<div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/client/02.png"> </div>
                
<?php  }?>
