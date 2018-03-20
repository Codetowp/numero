<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package numero
 */

get_header(); ?>

<?php
	if(have_posts()):		  
		while ( have_posts() ) : the_post();	 
?>
   

<?php
    $background_img   = esc_url( get_theme_mod( 'numero_portfolio_page_background_img' ) );   
    $background_img_static   = get_template_directory_uri()."/assets/img/s-1.jpg";
    $image = $background_img ? "$background_img" : "$background_img_static";      
?>
<div id="page-banner" style="background-image: url(<?php echo esc_url($image); ?>);">
	<div class="content  wow fdeInUp" style="visibility: visible; animation-name: fdeInUp;">
		<div class="container">
			<h1>
				<?php
					if ( isset( $jetpack_options['page-title'] ) && '' != $jetpack_options['page-title'] )
						echo esc_html( $jetpack_options['page-title'] );
					else
						esc_html_e( 'Portfolio', 'numero' );
				?>
			</h1>
		</div>
	</div>
</div>

<!--page body-->

<div id="page-body">
	<div class="container">
		<div class="row  wow fdeInUp">
			<!--Image block-->
			<div class="col-md-6 col-sm-12">
				<figure  ><?php the_post_thumbnail('numero_portfolio') ; ?></figure>
			</div><!--/Image block-->
    
			<!--content block-->
			<div class="col-md-6 col-sm-12 page-block ">
				<header class="entry-header" >
					<span>
						<?php 
                      $before='';
                      $after='';
                      $separator=',';
                      the_terms(get_the_ID(), 'jetpack-portfolio-type', $before, $separator, $after); 
                      ?>
					</span>
					<h2><?php the_title(); ?></h2>  
					<ul class=" custom-social">
						<li>Share :</li>
						<li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="<?php esc_html_e('Share this post on Facebook!', 'numero')?>"><i class="fa fa-facebook"></i></a></li>
						<li><a target="_blank" href="http://www.twitter.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="<?php esc_html_e('Share this post on Twitter!', 'numero')?>"><i class="fa fa-twitter"></i></a></li>
						<li><a target="_blank" href="http://www.plus.google.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="<?php esc_html_e('Share this post on Google Plus!', 'numero')?>"><i class="fa fa-google-plus"></i></a></li>
						<li><a target="_blank" href="http://www.pinterest.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="<?php esc_html_e('Share this post on Pinterest!', 'numero')?>"><i class="fa fa-pinterest"></i></a></li>
						<li><a target="_blank" href="http://www.dribbble.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="<?php esc_html_e('Share this post on Dribbble!', 'numero')?>"><i class="fa fa-dribbble"></i></a></li>
						<li><a target="_blank" href="http://www.linkein.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="<?php esc_html_e('Share this post on Linkein!', 'numero')?>"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</header>
				<p><?php the_content(); ?></p>
			</div>
			<!--/content block-->
			<div class="clearfix"></div>

			<!--Portfolio nav-->
			<nav class="navigation posts-navigation" role="navigation">
				
					 <ul>
            <li class="pull-left">
              <div class="nav-previous"><i class="fa fa-chevron-left"></i><?php previous_post_link('%link', 'Previous Project'); ?></div>
            </li>
            <li><a href="<?php echo esc_url(home_url( '/portfolio' )); ?>"><i class="fa fa-th-large"></i> <?php esc_html_e('Back to Porfolio','numero'); ?></a></li>
            
            <li class="pull-right">
              <div class="nav-next"><?php next_post_link('%link', 'Next Project'); ?><i class="fa fa-chevron-right"></i></div>
            </li>
          </ul>
				
			</nav>  
			<!--/Portfolio nav-->
		</div>
	</div>
</div>
<!--/page body-->
<div class="clearfix"></div>

<!-- our works block
    ==========================================-->
<section id="our-work-block">
	<div class="container">
		<div class="row"> 
			<!--section-title-->
			<div class="section-title text-center wow fadeInUp">
				<h4><?php esc_html_e('realated Projects','numero'); ?></h4>
			</div>
			<!--/section-title-->
			<div class="clearfix"></div>
			<div class="works">
				<ul class="grid">
					<?php numero_related_projectx(); ?>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php 
endwhile;
endif;
//get_sidebar();
get_footer();
