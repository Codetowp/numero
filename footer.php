<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package numero
 */

?>

<!-- Frooter
    ==========================================-->

<footer class="bottom-footer">
  <div class="container">
    <div class="row"> 
      
      <!--site details-->
      <div class="col-md-3 col-sm-12 col-xs-12 site-identity"> 
          <?php
          if ( is_active_sidebar( 'widget-1' ) ) 
          {
          	dynamic_sidebar( 'widget-1' ); 
          }?>
          <ul class="socio">
              <?php
						if ( $socials = get_theme_mod( 'social' ) ) 
							{
								$socials = $socials ? array_filter( $socials ) : array();
								foreach ( $socials as $social => $name ) 
									{
										printf(' <li> <a href="%s" ><i class="fa fa-%s"></i></a></li> ', esc_url( $name ), $social );
									}
							}
						if(get_theme_mod( 'social' )=='')
                {?>
              
              
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-rss"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              
              <?php } ?> 
          </ul>

      </div>
      <!--/site details--> 
      
      <!--col-1-->
      <div class="col-md-2 col-sm-4 col-xs-4 root-widget">
        <?php
          if ( is_active_sidebar( 'widget-2' ) ) 
          {
          	dynamic_sidebar( 'widget-2' ); 
          }?>
      </div>
      <!--/col-1--> 
      
      <!--col-2-->
      <div class="col-md-2 col-sm-4 col-xs-4 root-widget">
        <?php
          if ( is_active_sidebar( 'widget-3' ) ) 
          {
          	dynamic_sidebar( 'widget-3' ); 
          }?>
      </div>
      <!--/col-2--> 
      <!--col-3-->
      <div class="col-md-2 col-sm-4 col-xs-4 root-widget">
        <?php
          if ( is_active_sidebar( 'widget-4' ) ) 
          {
          	dynamic_sidebar( 'widget-4' ); 
          }?>
      </div>
      <!--/col-3--> 
      
      <!--contact details-->
      <div class="col-md-3 col-sm-12 col-xs-12  subcribe-block">
        <?php
          if ( is_active_sidebar( 'widget-5' ) ) 
          {
          	dynamic_sidebar( 'widget-5' ); 
          }?>
        <form class="form">
          <div class="form-group">
            <input type="email" placeholder="Your Email Address" class="form-control" />
          </div>
          <div class="form-group">
            <button class="btn btn-default btn-block "><i class="fa fa-send"></i></button>
          </div>
        </form>
      </div>
      <!--/contact details--> 
      
    </div>
  </div>
</footer>
<?php wp_footer(); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script src="js/jquery.waypoints.min.js"></script> 
<!-- Custom Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script> 
<script src="js/wow.min.js"></script> 
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script> 
<script>
new WOW().init();
</script>
</body>
</html>

