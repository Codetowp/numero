<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Numero
 */

?>
<article class="col-md-12">
    <header class="entry-header"> 
        <span class="date-article">
            <?php numero_posted_on(); ?>
        </span> 
        <a href="#">
            <?php
                if  ( get_the_post_thumbnail()!='')
                    {
                        the_post_thumbnail(); 
                    }
                    else
                    {?>
                        <img src="<?php echo get_template_directory_uri()?>/img/a-3.jpg" class="img-responsive">
                        <?php 
                    }?>
        </a> 
        <span class="byline">
            <span class="author vcard">
                <?php numero_entry_footer();?>
                <a href="#"><i class="fa fa-user-o"></i> <?php echo esc_html(get_the_author_meta('display_name'));?></a> 
            </span>
        </span> 
        <a href="<?php the_permalink();?>">
            <h2>
                <?php the_title();?>
            </h2>
        </a>
    </header>
    <p>
        <?php the_excerpt();?>
    </p>
    <a class="btn  readmore-btn" href="<?php the_permalink();?>">READ MORE</a> 
</article>