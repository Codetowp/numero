<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package numero
 */

get_header(); ?>
<div id="page-banner" style="background-image: url(<?php header_image(); ?>);">
    <div class="content  wow fdeInUp" style="visibility: visible; animation-name: fdeInUp;">
        <div class="container">
            <header class="page-header">
                <h1 class="page-title">
                    <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'numero' ); ?>
                </h1>
            </header><!-- .page-header -->
        </div>
    </div>
</div>

<div id="Blog-post">
    <div class="container">
        <div class="row wow fadeInUp"> 
            <!--blog posts container-->
            <div class="col-md-8 col-sm-8 single-post"> 
                <?php
                    if ( have_posts() ) : ?>
                        <header class="page-header">
                            <h1 class="page-title">
                                <?php
                                    printf( esc_html__( 'Search Results for: %s', 'numero' ), '<span>' . get_search_query() . '</span>' );
                                ?>
                            </h1>
                        </header><!-- .page-header -->
                <?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();

                    /**
                    * Run the loop for the search to output the results.
                    * If you want to overload this in a child theme then include a file
                    * called content-search.php and that will be used instead.
                    */
                    get_template_part( 'template-parts/content', 'search' );

                    endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif; ?>
            </div>
            <!--aside-->
            <aside class="col-md-4 col-sm-4" > 
                <?php get_sidebar();?>
            </aside>
            <!--aside-->
        </div>
    </div>
</div>
<?php
//get_sidebar();
get_footer();
