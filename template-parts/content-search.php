<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Numero
 */

?>

    
 <article class="col-md-12 wow fadeInUp" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
          <header class="entry-header"> <span class="date-article"> <?php  numero_posted_on();?></span> <a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail() ): ?><img src="<?php the_post_thumbnail_url('numero-blogs'); ?>" class="img-responsive"><?php else:?><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/06-screenshot.jpg' );?>" class="img-responsive"><?php endif; ?></a> <span class="byline"><span class="author vcard"><i class="fa fa-user-o"></i> <?php the_author_posts_link(); ?> </span></span> <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
            </a></header>
         <p> <?php echo esc_html( wp_trim_words( get_the_content(), 10, '...' ));?></p>
          <a class="btn  readmore-btn" href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','numero'); ?></a> </article>