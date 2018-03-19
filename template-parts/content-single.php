<?php
/**
 * Template part for displaying single posts section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Numero
 */

?>

        <article class="post"> 
          
          <!--Header-->
          <header class="entry-header"> <span class="date-article"><?php  numero_posted_on();?></span> <a href="#"><img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive"></a> <span class="byline"><span class="author vcard"><a href="#"><i class="fa fa-folder-o"></i> <?php echo wp_kses_post(get_the_category_list( ', ')); ?></a><a href="#"><i class="fa fa-user-o"></i><?php echo get_the_author_meta('display_name');?></a> </span></span> <a href="#">
            <h5><?php the_title(); ?> </h5>
            </a></header>
         <?php the_content(); ?>
               
        </article>
        