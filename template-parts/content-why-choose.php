<?php
/**
 * Template part for displaying why-choose section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Numero
 */

?>
<section id="why-choose-us"> 
	
	<!--section-title-->
	<div class="section-title text-center">
		<?php 
		$choose_header = get_theme_mod( 'numero_choose_header_text', __('Section Title', 'numero' ));
		echo '<h2 class="wow zoomIn">  ' . esc_html($choose_header) . '</h2>'; 
		?>
	</div>
	<!--/section-title-->
	
	<div class="container">
		<div class="row">
			<div> 
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
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<?php  
						$firstClass = 'active'; 
						foreach ($page_ids as $post_id => $settings  ) 
						{
							
							
							?>
							<li role="presentation" class="<?php echo esc_html($firstClass);?>"><a href="#<?php echo esc_html($settings['title']);?>" aria-controls="<?php echo esc_html($settings['title']);?>" role="tab" data-toggle="tab"><?php echo esc_html( $settings['title']);?></a></li>
							<?php $firstClass=''; }  ?> 
						</ul>
						
						<!-- Tab panes -->
						<div class="tab-content wow fadeInUp">
							<?php
							$firstClass = 'active'; 
							foreach ($page_ids as $post_id => $settings  ) 
							{
								$post_id = $settings['content_page'];
								$post_id = apply_filters( 'wpml_object_id', $post_id, 'page', true );
								$posts = get_post( $post_id );
								setup_postdata( $posts );
								?>
								
								<div role="tabpanel" class="tab-pane <?php echo esc_html($firstClass);?>" id="<?php echo esc_html($settings['title']);?>"> 
									<?php echo wp_kses_post(get_the_post_thumbnail( $post_id, 'choose-medium' )); ?> 
								</div>
								

        <?php $firstClass = ''; }  // end foreach
        wp_reset_postdata();
        ?>
    </div>
    <?php 
}
?>
</div>
</div>
</div>
</section>