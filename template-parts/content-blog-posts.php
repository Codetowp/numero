<?php
/**
 * Template part for displaying blogs
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Numero
 */

?>


          <article class="col-md-4 wow zoomIn" <?php post_class(); ?> id="post-<?php the_ID(); ?>"> <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive"></a>
        <header class="entry-header"><a href="<?php the_permalink(); ?>">
          <h5><?php the_title(); ?></h5>
          </a></header>
        <?php echo esc_html( wp_trim_words( get_the_content(), 10, '...' ));?>
      </article>