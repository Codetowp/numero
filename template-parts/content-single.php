<?php
/**
 * Template part for displaying single posts section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Numero
 */

?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          
          <!--Header-->
          <header class="entry-header"> <span class="date-article"><?php  numero_posted_on();?></span> <?php if(has_post_thumbnail() ): ?><img src="<?php the_post_thumbnail_url('numero-blogs'); ?>" class="img-responsive"><?php else:?><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/06-screenshot.jpg' );?>" class="img-responsive"><?php endif; ?> <span class="byline"><span class="author vcard"><a href=""><i class="fa fa-folder-o"></i>  </a><?php
		$id = get_the_ID();

		 $category = get_the_category($id );
		
				
				echo '<a href="' .esc_url( get_tag_link($category[0]->term_id)).'">' . esc_html( $category[0]->cat_name ) . '</a> '; ?><i class="fa fa-user-o"></i><?php the_author_posts_link(); ?></span></span> <a href="#">
            <h5><?php the_title(); ?> </h5>
            </a></header>
         <?php the_content(); ?>
               <?php if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer">
      <?php
        edit_post_link(
          sprintf(
            wp_kses(
              /* translators: %s: Name of current post. Only visible to screen readers */
              __( 'Edit <span class="screen-reader-text">%s</span>', 'numero' ),
              array(
                'span' => array(
                  'class' => array(),
                ),
              )
            ),
            get_the_title()
          ),
          '<span class="edit-link">',
          '</span>'
        );
      ?>
    </footer><!-- .entry-footer -->
  <?php endif; ?>
        </article>
        