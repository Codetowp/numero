<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package numero
 */

if ( ! function_exists( 'numero_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function numero_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

			$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'numero' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);


	

		echo '<i class="fa fa-calendar-o"></i> ' . $time_string ; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'numero_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function numero_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'numero' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'numero' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'numero' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'numero' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'numero' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

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
	}
endif;


if ( ! function_exists( 'numero_get_section_about_data' ) ) 
{
    /**
     * Get counter data
     *
     * @return array
     */
    function numero_get_section_about_data()
    {
        $boxes = get_theme_mod('numero_about_boxes');
        if (is_string($boxes)) 
		{
            $boxes = json_decode($boxes, true);
        }
        if (empty($boxes) || !is_array($boxes)) 
		{
            $boxes = array();
        }
        return $boxes;
    }
}


if ( ! function_exists( 'numero_get_section_choose' ) ) 
{
    /**
     * Get counter data
     *
     * @return array
     */
    function numero_get_section_choose()
    {
        $boxes = get_theme_mod('numero_choose_box');
        if (is_string($boxes)) 
		{
            $boxes = json_decode($boxes, true);
        }
        if (empty($boxes) || !is_array($boxes)) 
		{
            $boxes = array();
        }
        return $boxes;
    }
}

/*count section*/
if ( ! function_exists( 'numero_get_section_counter_data' ) ) 
{
    /**
     * Get counter data
     *
     * @return array
     */
    function numero_get_section_counter_data()
    {
        $boxes = get_theme_mod('numero_counter_setting');
        if (is_string($boxes)) 
		{
            $boxes = json_decode($boxes, true);
        }
        if (empty($boxes) || !is_array($boxes)) 
		{
            $boxes = array();
        }
        return $boxes;
    }
}


if ( ! function_exists( 'numero_get_section_service' ) ) 
{
    /**
     * Get counter data
     *
     * @return array
     */
    function numero_get_section_service()
    {
        $boxes = get_theme_mod('numero_service_boxes');
        if (is_string($boxes)) 
		{
            $boxes = json_decode($boxes, true);
        }
        if (empty($boxes) || !is_array($boxes)) 
		{
            $boxes = array();
        }
        return $boxes;
    }
}


/*client section*/
if ( ! function_exists( 'numero_get_section_client_data' ) ) 
{
    /**
     * Get counter data
     *
     * @return array
     */
    function numero_get_section_client_data()
    {
        $boxes = get_theme_mod('numero_client_setting');
        if (is_string($boxes)) 
		{
            $boxes = json_decode($boxes, true);
        }
        if (empty($boxes) || !is_array($boxes)) 
		{
            $boxes = array();
        }
        return $boxes;
    }
}




if ( ! function_exists( 'numero_is_selective_refresh' ) ) {
    function numero_is_selective_refresh()
    {
        return isset($GLOBALS['numero_is_selective_refresh']) && $GLOBALS['numero_is_selective_refresh'] ? true : false;
    }
}

function customizer_library_get_default( $setting ) {

	$customizer_library = Customizer_Library::Instance();
	$options = $customizer_library->get_options();

	if ( isset( $options[$setting]['default'] ) ) {
		return $options[$setting]['default'];
	}

}