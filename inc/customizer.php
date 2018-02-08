<?php
/**
 * Numero Theme Customizer
 *
 * @package Numero
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

	require get_template_directory() . '/inc/lib/fo-to-range.php';
	require get_template_directory() . '/inc/customizer-controls.php';

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
/*****************************Panel***********************************************/
    
	$wp_customize->add_panel( 'numero_pannel' ,array(
         'priority'        		=> 101,
         'title'           		=> esc_html__( 'Frontpage Theme Sections', 'numero' ),
         'description'     		=> '',
        ) );
/*************************Top Header Section********************************************/    
        
    $wp_customize->add_section( 'numero_top_header', array(
        'title'                     => __( 'Top Header Section', 'numero'  ),
        'priority'                  => 10,
        'panel'                     => 'numero_pannel',  
    ) );
    
    
    $wp_customize->add_setting( 'numero_header_check', array(
        'sanitize_callback' => 'numero_sanitize_checkbox',
        'default'           => '',
        'capability'        => 'manage_options',
        'transport'         => 'refresh',
            )
        );
    
        $wp_customize->add_control( new Customizer_Toggle_Control( $wp_customize, 'numero_header_check', array(
        'settings' => 'numero_header_check',
        'label'    => __( 'Disable Header Details Section?', 'numero' ),
        'section'  => 'numero_top_header',
        'type'     => 'ios',
        'priority' => 1,

        ) ) );
    
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
	wp_enqueue_script( 'numero-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'numero_customize_preview_js' );
