<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Frontpage
 * @package numero
 */

get_header(); ?>

<!-- banner Page
    ==========================================-->
<?php
$background_img   = esc_url( get_theme_mod( 'bck_ground_image' ) );   
$background_img_static   = get_template_directory_uri()."/img/bg-1.jpg";
$image = $background_img ? "$background_img" : "$background_img_static";      

$disable    = get_theme_mod( 'numero_header_check' ) == 1 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) : ?>
    <Section id="home-banner" style="background-image: url( <?php echo $image;?> );">
        <div class="content">
            <div class="container wow fdeInUp"  data-wow-duration="1s">
                <?php 
                    $numero_theme_title  = get_theme_mod( 'numero_header_text', esc_html__(' MOBILE first APPROACH!', 'numero' ));
                    if ($numero_theme_title != '') echo '<h1>  ' . wp_kses_post($numero_theme_title) . ' </h1>'; 
                ?>

                <?php 
                    $numero_tagline  = get_theme_mod( 'numero_tag_line', esc_html__(' THINK BIG & GROW RICH.', 'numero' ));
                    if ($numero_tagline != '') echo '<h2>  ' . wp_kses_post($numero_tagline) . ' </h2>'; 
                ?>

                <?php 
                    $header_desc  = get_theme_mod( 'numero_header_description', esc_html__('We build some of the best wordpress themes and also provide support for them. Our team of 5 work smart to get you pixel perfect themes. Lets grow together.', 'numero' ));
                    if ($header_desc != '') echo '<p> ' . wp_kses_post($header_desc) . ' </p>'; 
                ?>

                <a class="btn btn-outline-default" href="<?php echo  $button1_url=( get_theme_mod( 'numero_header_button1_url' ) )?
                    ( get_theme_mod( 'numero_header_button1_url' ) ):'www.burstfly.com'; ?>">

                    <?php echo  $button1_text=( get_theme_mod( 'numero_header_button1' ) )?
                    ( get_theme_mod( 'numero_header_button1' ) ):'Contact us'; ?>
                </a> 
                <a class="btn btn-info chooser-btn" href="<?php echo  $button2_url=( get_theme_mod( 'numero_header_button2_url' ) )?
                    ( get_theme_mod( 'numero_header_button2_url' ) ):'www.burstfly.com'; ?>">

                     <?php echo  $button1_text=( get_theme_mod( 'numero_header_button2' ) )?
                    ( get_theme_mod( 'numero_header_button2' ) ):'Start FREE Trial'; ?>
                </a> 
            </div>
        </div>
    </Section>
<?php endif;?>


<!-- about us Page
    ==========================================-->
<?php
$disable    = get_theme_mod( 'numero_about_check' ) == 1 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) :
?>
    <section id="about-us-block">
        <div class="container">
            <div class="row"> 
                <!--section-title-->
                <div class="section-title text-center wow fadeInUp">
                    <?php 
                        $aout_header  = get_theme_mod( 'numero_about_header_text', esc_html__('About Us', 'numero' ));
                        if ($aout_header != '') echo '<h2>  ' . wp_kses_post($aout_header) . ' </h2>'; 
                    ?>

                    <?php 
                        $about_desc  = get_theme_mod( 'numero_about_description', esc_html__('Session Description', 'numero' ));
                        if ($about_desc != '') echo '<p class="about-paragraph">  ' . wp_kses_post($about_desc) . '</p>'; 
                    ?>
                </div>
                <!--/section-title--> 
                <?php  get_template_part( 'section-part/section', 'about' );?>
            </div>
        </div>
    </section>
<?php endif;?>

<!-- Why choose us
    ==========================================-->
<?php
$disable    = get_theme_mod( 'numero_choose_check' ) == 0 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) :
?>
    <section id="why-choose-us"> 
    <!--section-title-->
        <div class="section-title text-center wow fadeInUp">
            <?php 
            $choose_header = get_theme_mod( 'numero_choose_header_text', esc_html__('Session Title', 'numero' ));
            if ($choose_header != '') echo '<h2>  ' . wp_kses_post($choose_header) . '</h2>'; 
            ?>
        </div>
    <!--/section-title-->
        <div class="container">
            <div class="row">
                <div> 
                    <?php  get_template_part( 'section-part/section', 'choose' );?>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>

<!-- Company counter section
    ==========================================-->
<?php
$background_img   = esc_url( get_theme_mod( 'counter_background_img' ) );   
$background_img_static   = get_template_directory_uri().'/img/count-bg.jpg';
$image = $background_img ? "$background_img" : "$background_img_static";      

$disable    = get_theme_mod( 'numero_counter_check' ) == 1 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) :
?>

    <section id="company-counter" style="background-image:url(<?php echo $image;?>);">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 wow fadeInDown">
                    <?php  get_template_part( 'section-part/section', 'counter' );?>    
                </div>
            </div>
        </div>
    </section>
<?php endif;?>
<!-- /Company counter section --> 

<!-- our works block
    ==========================================-->
<?php
$background_img   = esc_url( get_theme_mod( 'counter_background_img' ) );   
$background_img_static   = get_template_directory_uri().'/img/count-bg.jpg';
$image = $background_img ? "$background_img" : "$background_img_static";   
$disable    = get_theme_mod( 'numero_our_work_check' ) == 0 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) :
?>
    <section id="our-work-block">
        <div class="container">
            <div class="row"> 
                <!--section-title-->
                <div class="section-title text-center wow fadeInUp">
                    <?php 
                    $work_header  = get_theme_mod( 'numero_our_work_header', esc_html__('Session Title', 'numero' ));
                    if ($work_header != '') echo '<h2>  ' . wp_kses_post($work_header) . '</h2>'; 
                    ?>
                    <?php 
                    $work_desc  = get_theme_mod( 'numero_our_work_description', esc_html__('Session Description', 'numero' ));
                    if ($work_desc != '') echo '<p>  ' . wp_kses_post($work_desc) . '</p>'; 
                    ?>
                </div>
                <!--/section-title-->
                <div class="clearfix"></div>
                <div class="works">
                    <ul class="grid">
                    <?php 
                    $posts_per_page_portfolio = get_theme_mod( 'numero_our_work_count' );
                    $args = array(
                    'post_type'      => 'jetpack-portfolio',
                    'posts_per_page' => $posts_per_page_portfolio,
                    );
                    $project_query = new WP_Query ( $args );

                    if ( post_type_exists( 'jetpack-portfolio' ) && $project_query -> have_posts() ) :

                        while ( $project_query -> have_posts() ) : $project_query -> the_post();
                    ?>

                            <li>
                                <figure>
                                <?php the_post_thumbnail();?>
                                <!--<img src="<?php echo get_template_directory_uri();?>/img/01-screenshot.jpg" alt="Screenshot 01">-->
                                    <figcaption>
                                        <div class="caption-content">
                                            <h6><?php the_title(); ?></h6>
                                            <?php
                                            echo get_the_term_list(get_the_ID(), 'jetpack-portfolio-type',
                                            sprintf( '<a href="#">%1$s' ,
                                            esc_attr_x(' , ', 'Used between list items, there is a space after the comma.', 'grit' ),
                                            '</a>'
                                            ) );
                                            ?>
                                            <ul class="work-more">
                                                <li>
                                                    <a href="<?php the_permalink();?>"><i class="fa fa-link"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                    <?php  endwhile; endif;  wp_reset_postdata();?>  
                    </ul>
                <a href="<?php  echo esc_url( home_url( '/portfolio' ) );?>" class="more-links">View All Projects</a> 
                </div>
            </div>
        </div>
    </section>
<?php endif;?>


<!-- our services
    ==========================================-->
<?php
$background_img   = esc_url( get_theme_mod( 'counter_background_img' ) );   
$background_img_static   = get_template_directory_uri()."/img/count-bg.jpg";
$image = $background_img ? "$background_img" : "$background_img_static";      

$disable    = get_theme_mod( 'numero_service_check' ) == 1 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) :
?>
    <section id="our-services">
        <div class="container">
            <div class="row"> 
                <!--section-title-->
                <div class="section-title text-center wow fadeInUp">
                    <?php 
                        $service_header  = get_theme_mod( 'numero_service_header', esc_html__('Session Title', 'numero' ));
                        if ($service_header != '') echo '<h2>  ' . wp_kses_post($service_header) . '</h2>'; 
                    ?>

                    <?php 
                        $service_desc  = get_theme_mod( 'numero_service_description', esc_html__('Session Description', 'numero' ));
                        if ($service_desc != '') echo '<p><span>  ' . wp_kses_post($service_desc) . '</span></p>'; 
                    ?>
                    <!--/section-title--> 

                    <?php  get_template_part( 'section-part/section', 'service' );?>  

                </div>
            </div>
        </div>
    </section>
<?php endif;?>

<!-- Testimonials Section
    ==========================================-->
<?php
	$background_img   = esc_url( get_theme_mod( 'counter_background_img' ) );   
	$background_img_static   = get_template_directory_uri()."/img/count-bg.jpg";
	$image = $background_img ? "$background_img" : "$background_img_static";      

	$disable    = get_theme_mod( 'numero_testimonial_check' ) == 0 ? true : false ;
		if ( numero_is_selective_refresh() ) 
		{
			$disable = false;
		}
		if ( ! $disable) :
?>
<section id="testimonials-block" class="text-center">
	<div class="container">
		<div class="row"> 
			<!--section-title-->
			<div class="section-title text-center wow fadeInUp">
				<?php 
					$testimonial  = get_theme_mod( 'numero_testimonial_header', esc_html__('Session Title', 'numero' ));
					if ($testimonial != '') echo '<h2>  ' . wp_kses_post($testimonial) . '</h2>'; 
				?>
			</div>
			<!--/section-title-->

			<div class="col-md-6 col-md-offset-3">
				<div id="testimonial" class="owl-carousel owl-theme"> 
                        <?php 
                            $posts_per_page_testimonial = get_theme_mod( 'numero_testimonial_count' );
                            $args = array(
                                'post_type'      => 'jetpack-testimonial',
                                'posts_per_page' => $posts_per_page_testimonial,
                            );

                            $project_query = new WP_Query ( $args );

                            if ( post_type_exists( 'jetpack-testimonial' ) && $project_query -> have_posts() ) :

                                while ( $project_query -> have_posts() ) : $project_query -> the_post();
					     ?>
                    <div class="item"><?php the_post_thumbnail();?>
						<p><strong><?php the_title();?></strong><!-- CEO Acme Inc.--></p>
						<h5><?php the_excerpt();?></h5>
					</div>
                    <?php  endwhile; endif;  wp_reset_postdata();?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif;?>

<!-- Clients Section -->
<?php
$disable    = get_theme_mod( 'numero_client_check' ) == 1 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) :
?>

    <section id="clients-block" class="text-center">
        <div class="container">
            <div id="clients" class="owl-carousel owl-theme">            
                <?php  get_template_part( 'section-part/section', 'client' );?>  			
            </div>
        </div>
    </section>

<?php endif;?>
<!--From the blog
    ==========================================-->
<?php
$disable    = get_theme_mod( 'numero_blog_check' ) == 1 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) :
?>
    <section id="from-blog">
        <div class="container">
            <div class="row wow fdeInUp"> 
                <!--section-title-->
                <div class="section-title text-center wow fadeInUp">
                    <?php 
                    $blog_header  = get_theme_mod( 'numero_blog_header', esc_html__('Our Blog', 'numero' ));
                    if ($blog_header != '') echo '<h2>  ' . wp_kses_post($blog_header) . '</h2>'; 
                    ?>

                    <?php 
                    $blog_desc  = get_theme_mod( 'numero_blog_description', esc_html__('Session Description', 'numero' ));
                    if ($blog_desc != '') echo '<p>  ' . wp_kses_post($blog_desc) . '</p>'; 
                    ?>
                </div>
                <!--/section-title-->

                <!--blog post--> 
                <?php 
                $count_blog = get_theme_mod( 'numero_blog_count', esc_html__('3','numero') );
                $query_post = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' =>$count_blog ) );

                if ($query_post->have_posts()) : while ($query_post->have_posts()) : $query_post->the_post();

                    get_template_part( 'template-parts/content', get_post_format() );

                endwhile;endif;
                wp_reset_postdata(); 
                ?>
                <!--/blog post--> 
            <a href="<?php echo  esc_url( home_url( '/blog' ) ); ?>" class="more-links">Go to Blog</a> 
            </div>
        </div>
    </section>
<?php endif;?>

<!-- Free trail
    ==========================================-->
<?php
$disable    = get_theme_mod( 'numero_trial_check' ) == 1 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) :
?>
    <section id="free-trial-block">
        <div class="container">
            <div class="row wow fadeInUp">
                <?php 
                $trail_header  = get_theme_mod( 'numero_trial_header', esc_html__('Be the first to grap all new design content from numero!', 'numero' ));
                if ($trail_header != '') echo '<p>  ' . wp_kses_post($trail_header) . '</p>'; 
                ?>
                <a href=" <?php echo  $button1_url=( get_theme_mod( 'numero_trial_button_url' ) )?
                ( get_theme_mod( 'numero_trial_button_url' ) ):'#'; ?>">  

                <?php echo  $button1_text=( get_theme_mod( 'numero_trial_button' ) )?
                ( get_theme_mod( 'numero_trial_button' ) ):'Strat free trial'; ?>
                </a> 
            </div>
        </div>
    </section>
<?php endif;?>


<?php
get_footer();


