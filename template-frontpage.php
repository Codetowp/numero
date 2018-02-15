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
    

$disable    = get_theme_mod( 'numero_header_intro_check' ) == 1 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) : 
 get_template_part( 'template-parts/content', 'banner' );
endif;?>

<!-- about us Page
    ==========================================-->
<?php
$disable    = get_theme_mod( 'numero_about_check' ) == 1 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) :
 get_template_part( 'template-parts/content', 'about' );
 endif;?>

<!-- Why choose us
    ==========================================-->
    <?php
$disable    = get_theme_mod( 'numero_choose_check' ) == 0 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) :
 get_template_part( 'template-parts/content', 'why-choose' );
 endif;?>


<!-- Company counter section
    ==========================================-->
<?php
$disable    = get_theme_mod( 'numero_counter_check' ) == 1 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) :
 get_template_part( 'template-parts/content', 'counter' );
 endif;?>
<!-- /Company counter section --> 

<!-- our works block
    ==========================================-->

<?php
$disable    = get_theme_mod( 'numero_our_work_check' ) == 0 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) :
 get_template_part( 'template-parts/content', 'our-work' );
 endif;?>
<!-- our services
    ==========================================-->
    <?php
$disable    = get_theme_mod( 'numero_service_check' ) == 1 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) :
 get_template_part( 'template-parts/content', 'service' );
 endif;?>

<!-- Testimonials Section
    ==========================================-->
<?php
$disable    = get_theme_mod( 'numero_testimonial_check' ) == 0 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) :
 get_template_part( 'template-parts/content', 'testimonial' );
 endif;?>

<!-- Clients Section
    ==========================================-->
    <?php
$disable    = get_theme_mod( 'numero_client_check' ) == 1 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) :
  get_template_part( 'template-parts/content', 'client' );
 endif;
?>


<!--From the blog
    ==========================================-->

 <?php

$disable    = get_theme_mod( 'numero_blog_check' ) == 1 ? true : false ;
if ( numero_is_selective_refresh() ) 
{
    $disable = false;
}
if ( ! $disable) :
  get_template_part( 'template-parts/content', 'blog' );
 endif;
?>

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
                $trail_header  = get_theme_mod( 'numero_trial_header', __('Be the first to grap all new design content from numero!', 'numero' ));
                echo '<p>  ' . wp_kses_post($trail_header) . '</p>'; 
                $button_url=get_theme_mod( 'numero_trial_button_url','#' ) ;
                $button_text=get_theme_mod( 'numero_trial_button',__('START FREE TRIAL' ,'numero'));
                ?>
                <a href="<?php echo esc_url($button_url) ; ?>">  
                 <?php echo esc_html($button_text); ?>
                </a> 
  </div>
</section>
<?php endif;?>
<?php get_footer();