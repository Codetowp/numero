<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package numero
 */

?>
<!doctype html>
<html>
<head>
    <!-- Basic Page Needs
        ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Numero-startup</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="#" type="image/x-icon">

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
                <li>Phone: +232456758-212</li>
              </ul>
            </div>
            <div class="pull-right">
              <ul class="list-inline top-social-link">
                  
                <?php
                    if ( is_active_sidebar( 'social' ) ) 
	{
		 dynamic_sidebar( 'social' ); 
	}
else
	
                {?>
                  
                    <li> <a href="mailto:someone@example.com?"><i class="fa fa-facebook"></i></a></li>
                    <li> <a href="mailto:someone@example.com?"><i class="fa fa-rss"></i></a></li>
                    <li> <a href="mailto:someone@example.com?"><i class="fa fa-twitter"></i></a></li>
                    <li> <a href="mailto:someone@example.com?"><i class="fa fa-linkedin-square"></i></a></li>
                    <li> <a href="mailto:someone@example.com?"><i class="fa fa-vimeo-square"></i></a></li>
                <?php }?>
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
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
            <span class="sr-only">Toggle navigation</span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
          </button>
            <?php  
                $custom_logo = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo , 'full' );
                $logo_img_static   = get_template_directory_uri()."";
                
                if ( has_custom_logo() ) 
                {
                    $img='<img src="'. esc_url( $logo[0] ) .'" >';
                } 
                else 
                {
                    $img='<img src="'.$logo_img_static.'" >';
                }
			?>
          
          
        <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><?php echo $img; ?>
            <?php echo bloginfo( 'name' ); ?></a> </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <!--search-cart-block --> 
  <div class="search-cart-block">
  <!--search form-->

          <form method="get" action="/search" id="search">
            <input name="q" type="text" size="40" placeholder="Search..." />
          </form>
          <!--/search form--> 
          <div class="cart-notify"><a href="#"><i class="fa fa-cart-plus"><span>0</span></i></a></div>


  </div> <!--/search-cart-block --> 
             <?php wp_nav_menu( array( 
                    'theme_location' => 'menu-1',
                     'menu_class' => 'nav navbar-nav navbar-righ'
                 ) );?>


      </div>
      <!-- /.navbar-collapse --> 

    </div>
    <!-- /.container-fluid --> 

  </nav>


</header>