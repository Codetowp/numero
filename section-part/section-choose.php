<?php
 echo $page_ids = numero_get_section_choose();

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
          <li role="presentation" class="<?php echo $firstClass;?>"><a href="#Speed" aria-controls="Speed" role="tab" data-toggle="tab"><?php echo $settings['title']?></a></li>
         
         <?php $firstClass=''; 
				} ?>   
         
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
            
          <div role="tabpanel" class="tab-pane active" id="Speed"> 
            <?php the_post_thumbnail('choose-medium');?>  </div>
        </div>

        <?php
					$firstClass = ''; 
				} // end foreach
			wp_reset_postdata();
			?>

<?php 
	}
	else
	{	?>                
         <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#Speed" aria-controls="Speed" role="tab" data-toggle="tab">Speed</a></li>
          <li role="presentation"><a href="#Design" aria-controls="Design" role="tab" data-toggle="tab">Design</a></li>
          <li role="presentation"><a href="#Support" aria-controls="Support" role="tab" data-toggle="tab">Support</a></li>
          <li role="presentation"><a href="#Best" aria-controls="Best" role="tab" data-toggle="tab">Best</a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="Speed"> 
              <img src="<?php echo get_template_directory_uri();?>/img/tab-1.jpg" class="img-responsive"> </div>
          <div role="tabpanel" class="tab-pane" id="Design">...</div>
          <div role="tabpanel" class="tab-pane" id="Support">...</div>
          <div role="tabpanel" class="tab-pane" id="Best">...</div>
        </div>
<?php  }?>

