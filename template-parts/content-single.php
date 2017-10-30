  <div id="page-banner" style="background-image: url(<?php header_image(); ?>);">
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
             if  ( get_the_post_thumbnail_url()!='')
                {
                    $img = get_the_post_thumbnail_url(); 
                }
              else
                {  
                    $img = get_template_directory_uri()."/img/a-3.jpg" ; 
                }



				?>
          
        <article class="post"> 
          
          <!--Header-->
          <header class="entry-header"> 
              <span class="date-article"><!--<i class="fa fa-calendar-o"></i> -->
              <?php  numero_posted_on();?>
              </span> <a href="#"><img src="<?php echo $img; ?>" class="img-responsive"></a> <span class="byline"><span class="author vcard"><a href="#"><i class="fa fa-folder-o"></i> <?php echo get_the_category_list( ', '); ?></a><a href="#"><i class="fa fa-user-o"></i> <?php echo get_the_author_meta('display_name');?></a> </span></span> <a href="#">
            </a></header>
          <!--/Header-->
          
            <p><?php the_content();?></p>
          
          <!--footer tags--> 
          
        </article>
          
        <div class="clearfix"></div>
        <footer class="entry-footer entry-meta-bar">
          <div class="entry-meta"> <i class="fa fa-tags"></i> <span class="tag-links  clearfix"> <?php echo get_the_tag_list(); ?>  </span> </div>
        </footer>
          
        <!--/footer tags-->
        
        <div class="clearfix"></div>
        
        <!--author box-->
          
          <div class="author-box"> <?php echo get_avatar( get_the_author_meta('user_email'), '100', '' ); ?> 
					<div class="author-box-title"> Authored By <a href="#" rel="author"><?php the_author_link(); ?> </a> </div>
					<div class="author-description"><?php the_author_meta('description'); ?></div>
					<div class="author_social"> </div>
          </div>
              