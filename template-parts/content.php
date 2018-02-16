<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Numero
 */

?>


	
 <article class="col-md-12 wow fadeInUp" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
          <header class="entry-header"> <span class="date-article"><i class="fa fa-calendar-o"></i> JULY 13 2017</span> <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive"></a> <span class="byline"><span class="author vcard"><a href="#"><i class="fa fa-folder-o"></i> Business &bull; Industry</a><a href="#"><i class="fa fa-user-o"></i> Rijo</a> </span></span> <a href="#">
            <h2><?php the_title(); ?></h2>
            </a></header>
          <?php echo esc_html( wp_trim_words( get_the_content(), 10, '...' ));?>
          <a class="btn  readmore-btn" href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','numero'); ?></a> </article>
