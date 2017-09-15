<?php
/**
 * 
 * Template name: blog-listing
 *  The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package numero
 */

get_header(); ?>

	
<!-- banner Page
    ==========================================-->

<div id="page-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/s-1.jpg );">
  <div class="content  wow fdeInUp" style="visibility: visible; animation-name: fdeInUp;">
    <div class="container">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
</div>

<!--blog body-->
<div id="Blog-post">
  <div class="container">
    <div class="row wow fadeInUp"> 
      <!--blog posts container-->
      <div class="col-md-8 col-sm-8 single-post"> 
        
        <?php 
            $query_post = new WP_Query( array( 'post_type' => 'post',  ) );
            if ($query_post->have_posts()) :
                 while ($query_post->have_posts()) : $query_post->the_post();	
                        get_template_part( 'template-parts/blog', get_post_format() );
                endwhile; ?>
        
        <?php endif; ?>

        <div class="clearfix"></div>
        
        <!--/portfolio page nav-->
        <nav class="navigation posts-navigation  wow fadeInUp"  role="navigation">
          <ul>
            <li >
              <div class="nav-previous"><a href="http://localhost/wordpress/page/2/"><i class="fa fa-chevron-left"></i></a></div>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li >
              <div class="nav-next"><a href="http://localhost/wordpress/page/2/"> <i class="fa fa-chevron-right"></i></a></div>
            </li>
          </ul>
        </nav>
      </div>
      <!--blog posts container--> 
      
      <!--aside-->
      <aside class="col-md-4 col-sm-4" > 
        
        <!--Search-->
        <section class="widget widget_search  wow fadeInUp">
          <form>
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Email Address...">
              <span class="input-group-btn">
              <button  type="button"><i class="fa  fa-search"></i></button>
              </span></div>
          </form>
        </section>
        <!--/Search--> 
        
        <!--Recent Comments-->
        
        <section class="widget widget_recent_comments  wow fadeInUp">
          <h2 class="widget-title">Recent Comments</h2>
          <ul >
            <li ><span class="comment-author-link"><a href="#">Steeve</a></span> on <a href="http://localhost/wordpress/potato-cakes-with-smoked-salmon-cream-cheese/comment-page-1/#comment-18">Tips For Designing a Business</a></li>
            <li ><span class="comment-author-link"><a href="#">Steeve</a></span> on <a href="http://localhost/wordpress/potato-cakes-with-smoked-salmon-cream-cheese/comment-page-1/#comment-17">Barbecue Sauce Barbeque</a></li>
            <li ><span class="comment-author-link"><a href="#">Steeve</a></span> on <a href="http://localhost/wordpress/potato-cakes-with-smoked-salmon-cream-cheese/comment-page-1/#comment-16">What Makes A Hotel Boutique</a></li>
          </ul>
        </section>
        
        <!--Recent Comments end--> 
        
        <!--Archives start-->
        
        <section class="widget widget_archive  wow fadeInUp">
          <h2 class="widget-title">Archives</h2>
          <ul >
            <li ><a href="#"> support <span >(01)</span> </a> </li>
            <li><a href="#"> DESIGN<span >(10)</span> </a></li>
            <li ><a href="#"> USER INTERFACE<span>(100)</span> </a> </li>
            <li><a href="#"> Wiki<span >(100)</span> </a></li>
          </ul>
        </section>
        
        <!--Archives end--> 
        
        <!--Archives start-->
        
        <section class="widget widget_categories  wow fadeInUp">
          <h2 class="widget-title">category</h2>
          <ul >
            <li ><a href="#"> Budget </a> </li>
            <li><a href="#"> Industry </a></li>
            <li ><a href="#"> Factory </a> </li>
            <li><a href="#"> Business</a></li>
          </ul>
        </section>
        
        <!--Archives end--> 
        
        <!--Recent posts start-->
        
        <section  class="widget  widget_recent_entries  wow fadeInUp ">
          <h2 class="widget-title">Recent posts</h2>
          <ul class="media-list main-list">
            <li class="media"> <a class="" href="#"> <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/04-screenshot.jpg" alt="..."> </a>
              <div class="media-body">
                <p class="media-heading"><a href="#">Tips For Designing a Business </a> </p>
              </div>
            </li>
            <li class="media"> <a class="" href="#"> <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/03-screenshot.jpg" alt="..."> </a>
              <div class="media-body">
                <p class="media-heading"><a href="#">Barbecue Sauce Barbeque</a></p>
              </div>
            </li>
            <li class="media"> <a class="" href="#"> <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/02-screenshot.jpg" alt="..."> </a>
              <div class="media-body">
                <p class="media-heading"> <a href="#">What Makes A Hotel Boutique </a></p>
                <ul class="entry-meta">
                  <li>10th July 2014</li>
                </ul>
              </div>
            </li>
          </ul>
        </section>
        
        <!--ad -->
        <section class="widget"> <img src="img/ad-250x250.jpg" class="img-responsive"> </section>
        <!--ad end--> 
        
        <!--Recent posts end-->
        
        <section class="widget widget_social sidebar  wow fadeInUp">
          <h2 class="widget-title">Social</h2>
          <ul >
            <li ><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
            <li ><a href="#" title="twitter"><i class="fa  fa-twitter"></i></a></li>
            <li ><a href="#" title="google-plus"><i class="fa  fa-google-plus"></i></a> </li>
            <li><a href="#" title="Rss Feed"><i class="fa  fa-rss"></i></a></li>
          </ul>
        </section>
        
        <!--Tags start-->
        
        <section id="tag_cloud-2" class="widget widget_tag_cloud  wow fadeInUp">
          <h2 class="widget-title">Tags</h2>
          <div class="tagcloud"><a href="#"  title="1 topic" style="font-size: 1em;">Ideas</a> <a href="#" title="1 topic" style="font-size: 1em;">Exterior</a> <a href="#"  title="1 topic" style="font-size: 1em;">Interior</a> <a href="#" title="1 topic" style="font-size: 1em;">Architecture</a> <a href="#"  title="1 topic" style="font-size: 1em;">displays</a> <a href="#"  title="1 topic" style="font-size: 1em;">Design</a> <a href="#"  title="1 topic" style="font-size: 1em;">psd</a></div>
        </section>
        <!--Tags end--> 
        
        <!--Meta  start-->
        <section id="meta-2" class="widget widget_meta  wow fadeInUp">
          <h2 class="widget-title">Meta</h2>
          <ul >
            <li ><a href="#">Site Admin</a></li>
            <li><a href="#">Log out</a></li>
            <li ><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
            <li ><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
            <li ><a href="#" title="">WordPress.org</a></li>
          </ul>
        </section>
        
        <!--Meta  end--> 
        
        <!--Meta  start-->
        <section id="meta-2" class="widget widget_meta  wow fadeInUp">
          <h2 class="widget-title">Text</h2>
          <p>Subscribe to our free newsletter to be in touch with our new articles. Subscribe to our free newsletter to be in touch with our new articles. Subscribe to our free newsletter to be in touch with our new articles.</p>
        </section>
        
        <!--Meta  end--> 
        
        <!--Meta  start-->
        <section id="meta-2" class="widget  wow fadeInUp">
          <h2 class="widget-title">custom menu</h2>
          <ul>
            <li><a href="#">Magzine</a></li>
            <li><a href="#">Bootstrap</a></li>
            <li><a href="#">CSS3</a></li>
            <li><a href="#">HTML5</a></li>
          </ul>
        </section>
        
        <!--Meta  end--> 
        
      </aside>
      <!--aside-->
      
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<?php
get_footer();
