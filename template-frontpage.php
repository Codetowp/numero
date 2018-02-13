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

<section id="our-services">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
        <h2>Our Services</h2>
        <p>Find our latest projects we have worked on and get started.</p>
      </div>
      <!--/section-title--> 
      
      <!--col-1-->
      <div class="col-md-4 col-sm-6 col-xs-12 services-block eq-blocks wow fadeInUp"> <i class="fa fa-desktop"></i>
        <div class="services-content">
          <h6>Fully Responsive</h6>
          <p>This sounded a very good reason, and Alice was quite pleased to know it. 'I never thought of that before!' she said. </p>
        </div>
      </div>
      <!--/col-1--> 
      
      <!--col-2-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks wow fadeInUp"> <i class="fa fa-cart-plus"></i>
        <div class="services-content">
          <h6>Shopping ready</h6>
          <p>Now the races of these two have been for some ages utterly extinct, and besides to discourse any further of them.</p>
        </div>
      </div>
      <!--/col-2--> 
      
      <!--col-3-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks wow fadeInUp"> <i class="fa fa-sliders"></i>
        <div class="services-content">
          <h6>bootstrap shortcodes</h6>
          <p>She gave my mother such a turn, that I have always been convinced I am indebt to Miss Betsey for having been born.</p>
        </div>
      </div>
      <!--/col-3--> 
      
      <!--col-4-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks wow fadeInUp"> <i class="fa fa-cog"></i>
        <div class="services-content">
          <h6>seo optimized</h6>
          <p>Now the races of these two have been for some ages utterly extinct, and besides to discourse any further of them.</p>
        </div>
      </div>
      <!--/col-4--> 
      
      <!--col-5-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks wow fadeInUp"> <i class="fa fa-headphones"></i>
        <div class="services-content">
          <h6>fast support</h6>
          <p>She gave my mother such a turn, that I have always been convinced I am indebt to Miss Betsey for having been born.</p>
        </div>
      </div>
      <!--/col-5--> 
      <!--col-6-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks wow fadeInUp"> <i class="fa fa-bookmark"></i>
        <div class="services-content">
          <h6>pixel perfect design</h6>
          <p>This sounded a very good reason, and Alice was quite pleased to know it. 'I never thought of that before!' she said.</p>
        </div>
      </div>
      <!--/col-6--> 
      
    </div>
  </div>
</section>

<!-- Testimonials Section
    ==========================================-->
<section id="testimonials-block" class="text-center">
  <div class="container">
    <div class="row"> 
      
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
        <h2>What our clients say?</h2>
      </div>
      <!--/section-title-->
      
      <div class="col-md-6 col-md-offset-3">
        <div id="testimonial" class="owl-carousel owl-theme">
          <div class="item"> <img src="img/team/01.jpg">
            <p><strong>Dean Martin</strong> CEO Acme Inc.</p>
            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
          </div>
          <div class="item"> <img src="img/team/02.jpg">
            <p><strong>Dean Martin</strong> CEO Acme Inc.</p>
            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
          </div>
          <div class="item"> <img src="img/team/03.jpg">
            <p><strong>Dean Martin</strong> CEO Acme Inc.</p>
            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Clients Section
    ==========================================-->
<section id="clients-block" class="text-center">
  <div class="container">
    <div id="clients" class="owl-carousel owl-theme">
      <div class="item"> <img src="img/client/01.png"> </div>
      <div class="item"> <img src="img/client/02.png"> </div>
      <div class="item"> <img src="img/client/03.png"> </div>
      <div class="item"> <img src="img/client/04.png"> </div>
      <div class="item"> <img src="img/client/05.png"> </div>
      <div class="item"> <img src="img/client/01.png"> </div>
      <div class="item"> <img src="img/client/02.png"> </div>
    </div>
  </div>
</section>

<!--From the blog
    ==========================================-->

<section id="from-blog">
  <div class="container">
    <div class="row wow fdeInUp"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
        <h2>From Our Blog</h2>
        <p>At half-past eight the door opened, the policeman appeared, and, requesting them to follow him, led the way to an adjoining hall.</p>
      </div>
      <!--/section-title--> 
      
      <!--blog post-->
      <article class="col-md-4 wow fadeInLeft"> <a href="blog-post.html"><img src="img/a-1.jpg" class="img-responsive"></a>
        <header class="entry-header"><a href="#">
          <h5>The Guide To Living Creatively</h5>
          </a></header>
        <p>Nullam consequat sed purus ut laoreet. Etiam fringilla placerat magna a aliquam. Mauris
          mollis tristique. In ac interdum ipsum. Phasellus in accumsan metus.</p>
      </article>
      <!--/blog post--> 
      
      <!--blog post-->
      <article class="col-md-4 wow zoomIn"> <a href="blog-post.html"><img src="img/a-2.jpg" class="img-responsive"></a>
        <header class="entry-header"><a href="#">
          <h5>Article Name</h5>
          </a></header>
        <p>Nullam consequat sed purus ut laoreet. Etiam fringilla placerat magna a aliquam. Mauris
          mollis tristique. In ac interdum ipsum. Phasellus in accumsan metus.</p>
      </article>
      <!--/blog post--> 
      <!--blog post-->
      <article class="col-md-4 wow fadeInRight"> <a href="blog-post.html"><img src="img/a-3.jpg" class="img-responsive"></a>
        <header class="entry-header"><a href="#">
          <h5>A Guide To Still Photography</h5>
          </a></header>
        <p>Nullam consequat sed purus ut laoreet. Etiam fringilla placerat magna a aliquam. Mauris
          mollis tristique. In ac interdum ipsum. Phasellus in accumsan metus.</p>
      </article>
      <!--/blog post--> 
      
      <a href="blog.html" class="more-links">Go to Blog</a> </div>
  </div>
</section>

<!-- Free trail
    ==========================================-->
<section id="free-trial-block">
  <div class="container">
    <div class="row wow fadeInUp">
      <p>Be the first to grap all new design content from numero!</p>
      <a href="contact.html">Strat free trial</a> </div>
  </div>
</section>
<?php get_footer();