<?php

function numero_related_projectx() {

	$args = '';
    $count = 3;
      
	$args = wp_parse_args( $args, array(
		'category__in'   => wp_get_post_categories( get_the_ID() ),
		'posts_per_page' => $count,
		'post__not_in'   => array( get_the_ID() ),
		'post_type' => 'jetpack-portfolio',
	) );
	$related = new WP_Query( $args );

	if ( $related->have_posts() ) {
	?>
		
			<?php
            $num = 0;
			while ( $related->have_posts() ) {
				$related->the_post();
                
                
                if  ( get_the_post_thumbnail()=='')
                {
                    $background_img_relatedpost   = get_template_directory_uri() . '/assets/img/04-screenshot.jpg';
                    
                    $post_thumbnail= '<img src="'.$background_img_relatedpost.'" class="img-responsive">';
                }
                else
                {
                    $post_thumbnail = get_the_post_thumbnail( get_the_ID(), 'img-responsive' );
                }
                
				$class_format = '';
                
				if  ( get_the_post_thumbnail() !='' )
				$class_format = 'fa-format-' . get_post_format( get_the_ID() );
                
                 $title=get_the_title();
                $url=get_permalink(get_the_ID() );
                global $post;
               
                
                
				printf(                    
					'<li>
						<figure>
							%s
							<figcaption>
								<div class="caption-content">
									<h6><a href="%s">%s</a></h6>
									<ul class="work-more">
										<li><a href="%s"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</figcaption>
						</figure>
					</li>',
					wp_kses_post($post_thumbnail),
					esc_url($url),
					esc_html($title),
                    esc_url( get_permalink() )

                    
                    );
				?>
			<?php
			}
			?>
		
	<?php
	}
	wp_reset_postdata();
}

?>