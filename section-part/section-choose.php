<?php
 $page_ids = numero_get_section_choose();

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
	?>

     <ul class="nav nav-tabs" role="tablist">
        <?php  
				$firstClass = 'active'; 
				foreach ($page_ids as $post_id => $settings  ) 
				{
					
				
			?>
          <li role="presentation" class="<?php echo $firstClass;?>"><a href="#<?php echo $settings['title']?>" aria-controls="<?php echo $settings['title']?>" role="tab" data-toggle="tab"><?php echo $settings['title']?></a></li>
         
         <?php $firstClass=''; }  ?>   
         
      </ul>
        
        <div class="tab-content">
            
            <?php
				$firstClass = 'active'; 
				foreach ($page_ids as $post_id => $settings  ) 
				{
					$post_id = $settings['content_page'];
					$post_id = apply_filters( 'wpml_object_id', $post_id, 'page', true );
					$post = get_post( $post_id );
					setup_postdata( $post );
			?>
            
          <div role="tabpanel" class="tab-pane <?php echo $firstClass;?>" id="<?php echo $settings['title']?>"> 
            <?php the_post_thumbnail('choose-medium');?>  
          </div>
      

        <?php $firstClass = ''; }  // end foreach
			wp_reset_postdata();
			?>
   </div>
<?php 
	}
	?>

