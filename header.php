<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Numero
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="menutop"> 

<!-- Navigation
==========================================-->
<nav id="top-menu" class="navbar navbar-default navbar-fixed-top"> 
	
	<!--Header top-->
	<section id="header-top-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="pull-left">
						<ul class="">
							<li><?php esc_html_e('Phone:','numero'); ?><?php echo esc_html(get_theme_mod('numero_header_phone_number','+232456758-212')); ?></li>
						</ul>
					</div>
					<div class="pull-right">
						<ul class="list-inline top-social-link">
							<?php
          if ( $socials = get_theme_mod( 'numero_social_links' ) ) 
          {
            $socials = $socials ? array_filter( $socials ) : array();
            foreach ( $socials as $social => $name ) 
            {
            printf(' <li> <a href="%s" ><i class="fa fa-%s"></i></a></li>', esc_url( $name ), esc_html($social) );
            }
          }?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Header top-->
	
	<div class="container"> 
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<?php  
			$custom_logo = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo , 'full' );
			$logo_img_static   = get_template_directory_uri()."";
			
			if ( has_custom_logo() ) 
			{
				$img='<img src="'. esc_url( $logo[0] ) .'" >';?>
				<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url($logo[0]); ?>">
					<?php echo wp_kses_post(bloginfo( 'name' )); ?></a> 
					<?php
				} 
				else 
					{ ?>
						<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><?php echo wp_kses_post(bloginfo( 'name' )); ?></a> <?php } ?></div>
						
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
							
							<!--search-cart-block -->
							<div class="search-cart-block"> 
								<!--search form-->
								
								<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" id="search">
									<input name="s" type="text" size="40" placeholder="<?php echo esc_attr_x( 'Search...&hellip;', 'placeholder', 'numero' ); ?>"  value="<?php echo get_search_query(); ?>" />
								</form>
								<!--/search form-->
								<!-- <div class="cart-notify"><a href="#"><i class="fa fa-cart-plus"><span>0</span></i></a></div> -->
							</div>
							<!--/search-cart-block -->
							
							<?php wp_nav_menu( array( 
								'theme_location' => 'menu-1',
								'menu_class' => 'nav navbar-nav navbar-right'
								) );?>
							</div>
							<!-- /.navbar-collapse --> 
							
						</div>
						<!-- /.container-fluid --> 
						
					</nav>
				</header>
