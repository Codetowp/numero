<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Numero
 */

?>


	<article class="col-md-4 wow fadeInLeft" <?php post_class(); ?> id="post-<?php the_ID(); ?>"> <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive"></a>
        <header class="entry-header"><a href="#">
          <h5><?php the_title(); ?></h5>
          </a></header>
        <?php the_content(); ?>

	
</article>
