<?php
/**
 * numero Theme Customizer
 *
 * @package numero
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function numero_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'numero_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'numero_customize_partial_blogdescription',
		) );
     
	}
        $wp_customize->remove_control('blogdescription');
        $wp_customize->remove_section('header_image');
        $wp_customize->get_section('title_tagline')->title = __( 'Branding','' );
    

/********* header intro **********/
        $wp_customize->add_section('numero_header', array(
            'title'                     => __('Header Intro', 'numero'),
            'description'               => 'Easily edit your header section',
            'priority'                  => 100,   
        ));
    
        $wp_customize->add_setting( 'bck_ground_image', array(
            'default'                   => '',
            'type'                      => 'theme_mod',
            'capability'                => 'edit_theme_options',
            'sanitize_callback'         => 'esc_url_raw',
        ) );
    
        $wp_customize->add_control( new WP_Customize_Image_Control(
            $wp_customize,'bck_ground_image', array(
            'label'                     => __( 'Background Image', '' ),
            'section'                   => 'numero_header',
            'settings'                  => 'bck_ground_image',
            'context'                   => 'bck_ground_image',
            'priority'                  => 20,
            ) 
        ) );
    
        $wp_customize->add_setting( 'numero_header_text', array(      
            'default'                   => '' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh', // refresh or postMessage              
        ) );    

        $wp_customize->add_control( 'numero_header_text', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'numero' ),
            'section'  					=> 'numero_header',
            'priority' 					=> 1,
        ) );
    
    
        $wp_customize->add_setting( 'numero_tag_line', array(      
            'default'                   => '' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh', // refresh or postMessage              
        ) );    

        $wp_customize->add_control( 'numero_tag_line', array(
            'type'						=> 'text',
            'label' 					=> __( 'Tag line', 'numero' ),
            'section'  					=> 'numero_header',
            'priority' 					=> 2,
        ) );
    
    
        $wp_customize->add_setting( 'numero_header_description', array(      
        'default'                   => '' ,
        'sanitize_callback'         => 'sanitize_text_field',
        'transport'                 => 'refresh',               
        ) );    

        $wp_customize->add_control( 'numero_header_description', array(
            'type'						=> 'textarea',
            'label' 					=> __( 'Description', 'numero' ),
            'section'  					=> 'numero_header',
            'priority' 					=> 3,
        ) );

}
add_action( 'customize_register', 'numero_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function numero_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function numero_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function numero_customize_preview_js() {
	wp_enqueue_script( 'numero-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'numero_customize_preview_js' );
