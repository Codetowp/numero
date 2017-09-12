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
            <?php 
                $aout_header  = get_theme_mod( 'numero_about_header_text', esc_html__('About us', 'numero' ));
                if ($aout_header != '') echo '<h2>  ' . wp_kses_post($aout_header) . ' </h2>'; 
            ?>
           
           <?php 
                $about_desc  = get_theme_mod( 'numero_about_description', esc_html__('Alice wondered a little at this, but  she was too much in awe of the Queen to disbelieve it. I will try it when I go home she thought to herself.', 'numero' ));
                if ($about_desc != '') echo '<p class="about-paragraph">  ' . wp_kses_post($about_desc) . '</p>'; 
            ?>

      </div>
      <!--/section-title--> 
      
      <!--col-1-->
      <?php  get_template_part( 'section-part/section', 'about' );?>
      
    </div>
  </div>
</section>

<!-- Why choose us
    ==========================================-->
<section id="why-choose-us"> 
  
  <!--section-title-->
  <div class="section-title text-center wow fadeInUp">
    
		<?php 
                $choose_header  = get_theme_mod( 'numero_choose_header_text', esc_html__('Why choose us', 'numero' ));
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

<!-- Company counter section
    ==========================================-->
<?php
    $background_img   = esc_url( get_theme_mod( 'counter_background_img' ) );   
    $background_img_static   = get_template_directory_uri()."/img/count-bg.jpg";
    $image = $background_img ? "$background_img" : "$background_img_static";      
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
<!-- /Company counter section --> 

<!-- our works block
    ==========================================-->
<section id="our-work-block">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
            <?php 
                $work_header  = get_theme_mod( 'numero_our_work_header', esc_html__('Why choose us', 'numero' ));
                if ($work_header != '') echo '<h2>  ' . wp_kses_post($work_header) . '</h2>'; 
            ?>
       
            
            <?php 
                $work_desc  = get_theme_mod( 'numero_our_work_description', esc_html__('Find our latest projects we have worked on and get started.', 'numero' ));
                if ($work_desc != '') echo '<p>  ' . wp_kses_post($work_desc) . '</p>'; 
            ?>
       
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
          <?php 
                $service_header  = get_theme_mod( 'numero_service_header', esc_html__('Our Services', 'numero' ));
                if ($service_header != '') echo '<h2>  ' . wp_kses_post($service_header) . '</h2>'; 
            ?>
     
           <?php 
                $service_desc  = get_theme_mod( 'numero_service_description', esc_html__('Find our latest projects we have worked on and get started.', 'numero' ));
                if ($service_desc != '') echo '<p><span>  ' . wp_kses_post($service_desc) . '</span></p>'; 
            ?>
  
      <!--/section-title--> 
              
        <?php  get_template_part( 'section-part/section', 'service' );?>  

      
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
            <?php 
                $testimonial  = get_theme_mod( 'numero_testimonial_header', esc_html__('What our clients say', 'numero' ));
                if ($testimonial != '') echo '<h2>  ' . wp_kses_post($testimonial) . '</h2>'; 
            ?>
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
       
            <?php 
                $blog_header  = get_theme_mod( 'numero_blog_header', esc_html__('From Our Blog', 'numero' ));
                if ($blog_header != '') echo '<h2>  ' . wp_kses_post($blog_header) . '</h2>'; 
            ?>
            
       
            <?php 
                $blog_desc  = get_theme_mod( 'numero_blog_description', esc_html__('At half-past eight the door opened, the policeman appeared, and, requesting them to follow him, led the way to an adjoining hall.', 'numero' ));
                if ($blog_desc != '') echo '<p>  ' . wp_kses_post($blog_desc) . '</p>'; 
            ?>

      </div>
      <!--/section-title--> 
      
                 
			<?php 
				$count_blog = get_theme_mod( 'numero_blog_count', esc_html__('3','numero') );
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
