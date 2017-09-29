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

<!-- Footer
    ==========================================-->

<footer class="bottom-footer">
  <div class="container">
    <div class="row"> 
      
      <!--site details-->
      <div class="col-md-3 col-sm-12 col-xs-12 site-identity"> 
         
          <ul class="socio">
               <?php
              if ( is_active_sidebar( 'widget-1' ) ) 
              {
                dynamic_sidebar( 'widget-1' ); 
              }?>
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

