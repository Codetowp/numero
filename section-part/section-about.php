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
        $post = get_post( $post_id );
        setup_postdata( $post );

        if ( $settings['icon'] ) 
        {
            $settings['icon'] = trim( $settings['icon'] );
            $class = esc_attr( $settings['icon'] );
        }              
        ?>
        <div class="col-md-4 col-sm-4 col-about-us wow fdeInUp"> <i class="<?php echo esc_attr( $settings['icon'] );?>"></i>
            <h4><?php the_title(); ?></h4>
            <p>
                <?php 
                $excerpt = get_the_excerpt();
                $excerpt = substr( $excerpt , 0, 100); 
                echo $excerpt;
                ?>
            </p>
        </div>
    <?php

    } // end foreach
    wp_reset_postdata();
}
else
{?>                
    <div class="col-md-4 col-sm-4 col-about-us wow fdeInUp"> <i class="fa fa-clock-o"></i>
        <h4>History</h4>
        <p>This sounded a very good reason, and Alice was quite pleased to know it. 'I never thought of that before!' she said.</p>
    </div>
    <!--/col-1--> 

    <!--col-2-->
    <div class="col-md-4 col-sm-4 col-about-us wow fdeInUp"> <i class="fa fa-clock-o"></i>
        <h4>Expertise</h4>
        <p>She gave my mother such a turn, that I have always been convinced I am indebted to Miss Betsey for having been born on a Friday.</p>
    </div>
    <!--/col-2--> 

    <!--col-3-->
    <div class="col-md-4 col-sm-4 col-about-us wow fdeInUp"> <i class="fa fa-clock-o"></i>
        <h4>Future plans</h4>
        <p>Looking cautiously round, to ascertain that they were not overheard, the two hags cowered nearer to the fire, and chuckled heartily.</p>
    </div>
    <!--/col-3--> 

<?php  }?>
