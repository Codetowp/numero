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
 *
 * @package numero
 */

get_header(); ?>

<!-- banner Page
    ==========================================-->
<?php
    $background_img   = esc_url( get_theme_mod( 'bck_ground_image' ) );   
    $background_img_static   = get_template_directory_uri()."/img/bg-1.jpg";
    $image = $background_img ? "$background_img" : "$background_img_static";      
?>

<Section id="home-banner" style="background-image: url( <?php echo $image;?> );">
  <div class="content">
    <div class="container wow fdeInUp"  data-wow-duration="1s">
        
      <h1>
          <?php echo  $grit_tagline=( get_theme_mod( 'numero_header_text' ) )?
            ( get_theme_mod( 'numero_header_text' ) ):' MOBILE first APPROACH!'; ?>
      </h1>
      <h2>
          <?php echo  $grit_tagline=( get_theme_mod( 'numero_tag_line' ) )?
            ( get_theme_mod( 'numero_tag_line' ) ):'THINK BIG & GROW RICH.'; ?>
      </h2>
      <p>
          <?php echo  $grit_tagline=( get_theme_mod( 'numero_header_description' ) )?
            ( get_theme_mod( 'numero_header_description' ) ):'We build some of the best wordpress themes and also provide support for them. Our team of 5 work smart to get you pixel perfect themes. Lets grow together.'; ?>
      </p>
      <a class="btn btn-outline-default" href=" <?php echo  $button1_url=( get_theme_mod( 'numero_header_button1_url' ) )?
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

<!-- about us Page
    ==========================================-->
<section id="about-us-block">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
        <h2>
            <?php echo  $aout_header=( get_theme_mod( 'numero_about_header_text' ) )?
            ( get_theme_mod( 'numero_about_header_text' ) ):'About us'; ?>
        </h2>
        <p>
            <?php echo  $aout_desc=( get_theme_mod( 'numero_about_description' ) )?
            ( get_theme_mod( 'numero_about_description' ) ):'Alice wondered a little at this, but she was too much in awe of the Queen to disbelieve it. I will try it when I go home she thought to herself.'; ?></p>
      </div>
      <!--/section-title--> 
      
      <!--col-1-->
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
      
    </div>
  </div>
</section>

<!-- Why choose us
    ==========================================-->
<section id="why-choose-us"> 
  
  <!--section-title-->
  <div class="section-title text-center wow fadeInUp">
    <h2>
        <?php echo  $choose_header=( get_theme_mod( 'numero_choose_header_text' ) )?
            ( get_theme_mod( 'numero_choose_header_text' ) ):' Why choose us'; ?>
    </h2>
  </div>
  <!--/section-title-->
  
  <div class="container">
    <div class="row">
      <div> 
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#Speed" aria-controls="Speed" role="tab" data-toggle="tab">Speed</a></li>
          <li role="presentation"><a href="#Design" aria-controls="Design" role="tab" data-toggle="tab">Design</a></li>
          <li role="presentation"><a href="#Support" aria-controls="Support" role="tab" data-toggle="tab">Support</a></li>
          <li role="presentation"><a href="#Best" aria-controls="Best" role="tab" data-toggle="tab">Best</a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="Speed"> 
              <img src="<?php echo get_template_directory_uri();?>/img/tab-1.jpg" class="img-responsive"> </div>
          <div role="tabpanel" class="tab-pane" id="Design">...</div>
          <div role="tabpanel" class="tab-pane" id="Support">...</div>
          <div role="tabpanel" class="tab-pane" id="Best">...</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Company counter section
    ==========================================-->
<section id="company-counter" style="background-image:url(<?php echo get_template_directory_uri();?>/img/count-bg.jpg);">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12 wow fadeInDown">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="c-block"><i class="fa fa-user"></i><span class="counter">17</span>
            <p>Clients</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="c-block"><i class="fa fa-check"></i><span class="counter">45</span>
            <p>Finished Projects</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="c-block"><i class="fa fa-coffee"></i><span class="counter">596</span>
            <p>Cup of Coffee</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="c-block"><i class="fa fa-trophy"></i><span class="counter">56</span>
            <p>Awards won</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Company counter section --> 

<!-- our works block
    ==========================================-->
<section id="our-work-block">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
        <h2>
            <?php echo  $work_header=( get_theme_mod( 'numero_our_work_header' ) )?
            ( get_theme_mod( 'numero_our_work_header' ) ):'Our case of Studies'; ?>
        </h2>
        <p> 
            <?php echo  $work_desc=( get_theme_mod( 'numero_our_work_description' ) )?
            ( get_theme_mod( 'numero_our_work_description' ) ):'Find our latest projects we have worked on and get started.'; ?>
        </p>
      </div>
      <!--/section-title-->
      <div class="clearfix"></div>
      <div class="works">
        <ul class="grid">
          <li>
            <figure><img src="<?php echo get_template_directory_uri();?>/img/01-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Codetowp branding</h6>
                  <a href="#">Design</a> <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="<?php echo get_template_directory_uri();?>/img/02-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <a href="#">Design</a> <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="<?php echo get_template_directory_uri();?>/img/03-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <a href="#">Design</a> <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="<?php echo get_template_directory_uri();?>/img/04-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <a href="#">Design</a> <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="<?php echo get_template_directory_uri();?>/img/04-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <a href="#">Design</a> <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="<?php echo get_template_directory_uri();?>/img/06-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <a href="#">Design</a> <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="<?php echo get_template_directory_uri();?>/img/04-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <a href="#">Design</a> <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="<?php echo get_template_directory_uri();?>/img/06-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <a href="#">Design</a> <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
        </ul>
        <a href="#" class="more-links">View All Projects</a> </div>
    </div>
  </div>
</section>

<!-- our services
    ==========================================-->

<section id="our-services">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
        <h2> 
            <?php echo  $service_header=( get_theme_mod( 'numero_service_header' ) )?
            ( get_theme_mod( 'numero_service_header' ) ):'Our Services'; ?>
        </h2>
        <p><span><?php echo  $service_desc=( get_theme_mod( 'numero_service_description' ) )?
            ( get_theme_mod( 'numero_service_description' ) ):'Find our latest projects we have worked on and get started.'; ?></span>
          </p>
      </div>
      <!--/section-title--> 
      
      <!--col-1-->
      <div class="col-md-4 col-sm-6 col-xs-12 services-block eq-blocks"> <i class="fa fa-desktop"></i>
        <div class="services-content">
          <h6>Fully Responsive</h6>
          <p>This sounded a very good reason, and Alice was quite pleased to know it. 'I never thought of that before!' she said. </p>
        </div>
      </div>
      <!--/col-1--> 
      
      <!--col-2-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks"> <i class="fa fa-cart-plus"></i>
        <div class="services-content">
          <h6>Shopping ready</h6>
          <p>Now the races of these two have been for some ages utterly extinct, and besides to discourse any further of them.</p>
        </div>
      </div>
      <!--/col-2--> 
      
      <!--col-3-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks"> <i class="fa fa-sliders"></i>
        <div class="services-content">
          <h6>bootstrap shortcodes</h6>
          <p>She gave my mother such a turn, that I have always been convinced I am indebt to Miss Betsey for having been born.</p>
        </div>
      </div>
      <!--/col-3--> 
      
      <!--col-4-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks"> <i class="fa fa-cog"></i>
        <div class="services-content">
          <h6>seo optimized</h6>
          <p>Now the races of these two have been for some ages utterly extinct, and besides to discourse any further of them.</p>
        </div>
      </div>
      <!--/col-4--> 
      
      <!--col-5-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks"> <i class="fa fa-headphones"></i>
        <div class="services-content">
          <h6>fast support</h6>
          <p>She gave my mother such a turn, that I have always been convinced I am indebt to Miss Betsey for having been born.</p>
        </div>
      </div>
      <!--/col-5--> 
      <!--col-6-->
      <div class="col-md-4 col-sm-6 col-xs-12  services-block eq-blocks"> <i class="fa fa-bookmark"></i>
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
        <h2>
            <?php echo  $testimonial=( get_theme_mod( 'numero_testimonial_header' ) )?
            ( get_theme_mod( 'numero_testimonial_header' ) ):'What our clients say?'; ?>
        </h2>
      </div>
      <!--/section-title-->
      
      <div class="col-md-6 col-md-offset-3">
        <div id="testimonial" class="owl-carousel owl-theme">
          <div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/team/01.jpg">
              flhjga;khwjsgeiaopughjouibrhwuirhewouirghwjuihsui
            <p><strong>Dean Martin</strong> CEO Acme Inc.</p>
            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
          </div>
          <div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/team/02.jpg">
            <p><strong>Dean Martin</strong> CEO Acme Inc.</p>
            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
          </div>
          <div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/team/03.jpg">
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
      <div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/client/01.png"> </div>
      <div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/client/02.png"> </div>
      <div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/client/03.png"> </div>
      <div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/client/04.png"> </div>
      <div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/client/05.png"> </div>
      <div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/client/01.png"> </div>
      <div class="item"> <img src="<?php echo get_template_directory_uri();?>/img/client/02.png"> </div>
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
        <h2>
            <?php echo  $blog_header=( get_theme_mod( 'numero_blog_header' ) )?
            ( get_theme_mod( 'numero_blog_header' ) ):'From Our Blog'; ?>
        </h2>
        <p> 
            <?php echo  $blog_header=( get_theme_mod( 'numero_blog_description' ) )?
            ( get_theme_mod( 'numero_blog_description' ) ):'At half-past eight the door opened, the policeman appeared, and, requesting them to follow him, led the way to an adjoining hall.'; ?>
        </p>
      </div>
      <!--/section-title--> 
      
                 
			<?php 
				$count_blog = get_theme_mod( 'numero_blog_count' );
				$query_post = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' =>$count_blog ) );

				if ($query_post->have_posts()) : while ($query_post->have_posts()) : $query_post->the_post();
			?>
        
        
        
      <!--blog post-->
      <article class="col-md-4"> 
        <header class="entry-header"><a href="#">

            <?php
                if  ( get_the_post_thumbnail()!='')
                {
                    the_post_thumbnail('numero_our_work'); 
                }
                else
                {?>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri();?>/img/a-1.jpg" class="img-responsive">
                    </a>
                <?php }?>       
                <a href="<?php the_permalink();?>">
                    <h5><?php the_title();?></h5>
                </a>
          </a></header>
        <p> <?php the_content(); ?> </p>
      </article>
        <?php   endwhile;endif;?>
			<?php wp_reset_postdata(); ?>
      <!--/blog post--> 
      
    
      
      <a href="#" class="more-links">Go to Blog</a> </div>
  </div>
</section>

<!-- Free trail
    ==========================================-->
<section id="free-trial-block">
  <div class="container">
    <div class="row wow fadeInUp">
      <p>
          <?php echo  $blog_header=( get_theme_mod( 'numero_trial_header' ) )?
          ( get_theme_mod( 'numero_trial_header' ) ):'Be the first to grap all new design content from numero!'; ?>
      </p>
      <a href=" <?php echo  $button1_url=( get_theme_mod( 'numero_trial_button_url' ) )?
            ( get_theme_mod( 'numero_trial_button_url' ) ):'#'; ?>">  
          
             <?php echo  $button1_text=( get_theme_mod( 'numero_trial_button' ) )?
            ( get_theme_mod( 'numero_trial_button' ) ):'Strat free trial'; ?>
      </a> 
      </div>
  </div>
</section>


<?php
get_sidebar();
get_footer();
