<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package numero
 */

?>

<!--blog post-->
      <article class="col-md-4"> 
          <a href="<?php the_permalink();?>">
               <?php
                if  ( get_the_post_thumbnail()!='')
                {
                    the_post_thumbnail('numero_our_work'); 
                }
                else
                {?>
                    
                   <img src="<?php echo get_template_directory_uri();?>/img/a-1.jpg" class="img-responsive">
                    
                <?php }?> </a>
        <header class="entry-header"><a href="<?php the_permalink();?>">
          <h5><?php the_title();?></h5>
          </a></header>
        <p><?php the_excerpt(); ?></p>
      </article>
      <!--/blog post--> 
