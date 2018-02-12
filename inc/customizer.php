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
 $pages  =  get_pages();
    $numero_option_pages = array();
    $numero_option_pages[0] = esc_html__( 'Select page', 'numero' );
    foreach( $pages as $p )
        {
            $numero_option_pages[ $p->ID ] = $p->post_title;
        }
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
    
    $wp_customize->add_control( new Numero_Customizer_Toggle_Control( $wp_customize, 'numero_header_check', array(
        'settings' => 'numero_header_check',
        'label'    => __( 'Disable Header Details Section?', 'numero' ),
        'section'  => 'numero_top_header',
        'type'     => 'ios',
        'priority' => 1,

    ) ) );

    $social_sites = array( 'facebook', 'twitter','instagram',  'google-plus', 'pinterest', 'linkedin', 'rss');

foreach( $social_sites as $social_site ) {
    $wp_customize->add_setting( "numero_social_links[$social_site]", array(
            'default'           => '',
            'type'              => 'theme_mod',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw'
    ) );

    $wp_customize->add_control( "numero_social_links[$social_site]", array(
            'label'   => ucwords( $social_site ) . __( " Url:", 'numero' ),
            'section' => 'numero_top_header',
            'type'    => 'text',
    ) );
}


$wp_customize->add_setting( 'numero_header_phone_number', array(  
    'default'                   => esc_html__('+232456758-212', 'numero'),
    'sanitize_callback'         => 'sanitize_text_field',
    'transport'                 => 'refresh', // refresh or postMessage              
) );    

$wp_customize->add_control( 'numero_header_phone_number', array(
    'type'                      => 'text',
    'label'                     => __( 'Header Phone Number', 'numero' ),
    'section'                   => 'numero_top_header',
    'priority'                  => 1,
) );

/********* header intro **********/
$wp_customize->add_section('numero_header_section', array(
    'title'                     => __('Header Intro', 'numero'),
    'description'               => __('Easily edit your header section','numero'),
    'priority'                  => 15,   
    'panel'                     => 'numero_pannel',    

));


$wp_customize->add_setting( 'numero_header_intro_check', array(
        'sanitize_callback' => 'numero_sanitize_checkbox',
        'default'           => '',
        'capability'        => 'manage_options',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control( new Numero_Customizer_Toggle_Control( $wp_customize, 'numero_header_intro_check', array(
        'settings' => 'numero_header_intro_check',
        'label'    => __( 'Disable Header Section?', 'numero' ),
        'section'  => 'numero_header_section',
        'type'     => 'ios',
        'priority' => 1,

) ) );






$wp_customize->add_setting( 'numero_background_img', array(
    'default'                   => esc_url(get_template_directory_uri()."/assets/img/bg-1.jpg"),
    'type'                      => 'theme_mod',
    'capability'                => 'edit_theme_options',
    'sanitize_callback'         => 'esc_url_raw',
) );

$wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize,'numero_background_img', array(
    'label'                     => __( 'Background Image', 'numero' ),
    'section'                   => 'numero_header_section',
    'settings'                  => 'numero_background_img',
    'context'                   => 'numero_background_img',
    'priority'                  => 20,
    ) 
) );

$wp_customize->add_setting( 'numero_header_text', array(      
    
    'default'                   => esc_html__('Section Main Title', 'numero'),
    'sanitize_callback'         => 'sanitize_text_field',
    'transport'                 => 'postMessage', // refresh or postMessage              
) );    

$wp_customize->add_control( 'numero_header_text', array(
    'type'                      => 'text',
    'label'                     => __( 'Header', 'numero' ),
    'section'                   => 'numero_header_section',
    'priority'                  => 1,
) );


$wp_customize->add_setting( 'numero_tag_line', array(      
    'default'                   => esc_html__('Section Title', 'numero'),
    'sanitize_callback'         => 'sanitize_text_field',
    'transport'                 => 'postMessage', // refresh or postMessage              
) );    

$wp_customize->add_control( 'numero_tag_line', array(
    'type'                      => 'text',
    'label'                     => __( 'Tag line', 'numero' ),
    'section'                   => 'numero_header_section',
    'priority'                  => 2,
) );


$wp_customize->add_setting( 'numero_header_description', array(      
'default'                   => esc_html__('Section Description', 'numero'),
'sanitize_callback'         => 'wp_kses_post',
'transport'                 => 'postMessage',               
) );    

$wp_customize->add_control( 'numero_header_description', array(
    'type'                      => 'textarea',
    'label'                     => __( 'Description', 'numero' ),
    'section'                   => 'numero_header_section',
    'priority'                  => 3,
) );

$wp_customize->add_setting( 'numero_header_button_one', array(      
    'default'                   => __('contact us','numero') ,
    'sanitize_callback'         => 'sanitize_text_field',
    'transport'                 => 'refresh',               
) );    

$wp_customize->add_control( 'numero_header_button_one', array(
    'type'                      => 'text',
    'label'                     => __( 'Button one Text', 'numero' ),
    'section'                   => 'numero_header_section',
    'priority'                  => 4,
) );    

$wp_customize->add_setting( 'numero_header_button_one_url', array(      
    'default'                   =>__('www.burstfly.com','numero') ,
    'sanitize_callback'         => 'esc_url_raw',
    'transport'                 => 'refresh',               
) );    

$wp_customize->add_control( 'numero_header_button_one_url', array(
    'type'                      => 'text',
    'label'                     => __( 'Button one Url', 'numero' ),
    'section'                   => 'numero_header_section',
    'priority'                  => 5
) );      


$wp_customize->add_setting( 'numero_header_button_two', array(      
    'default'                   => __('start free trail ','numero') ,
    'sanitize_callback'         => 'sanitize_text_field',
    'transport'                 => 'refresh',               
) );    

$wp_customize->add_control( 'numero_header_button_two', array(
    'type'                      => 'text',
    'label'                     => __( 'Button two Text', 'numero' ),
    'section'                   => 'numero_header_section',
    'priority'                  => 6,
) );    

$wp_customize->add_setting( 'numero_header_button_two_url', array(      
    'default'                   => __('www.burstfly.com','numero') ,
    'sanitize_callback'         => 'esc_url_raw',
    'transport'                 => 'refresh',               
) );    

$wp_customize->add_control( 'numero_header_button_two_url', array(
    'type'                      => 'text',
    'label'                     => __( 'Button Two Url', 'numero' ),
    'section'                   => 'numero_header_section',
    'priority'                  => 7
) );    

/*********About Us **********/
    
$wp_customize->add_section('numero_about_section', array(
    'title'                     => __('About Us', 'numero'),
    'description'               => 'Easily edit your header section',
    'priority'                  => 20,   
    'panel'                     => 'numero_pannel',    

));



$wp_customize->add_setting( 'numero_about_check', array(
        'sanitize_callback' => 'numero_sanitize_checkbox',
        'default'           => '',
        'capability'        => 'manage_options',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control( new Numero_Customizer_Toggle_Control( $wp_customize, 'numero_about_check', array(
        'settings' => 'numero_about_check',
        'label'    => __( 'Disable About Section?', 'numero' ),
        'section'  => 'numero_about_section',
        'type'     => 'ios',
        'priority' => 1,

) ) );




 $wp_customize->add_setting( 'numero_about_header_text', array(      
    'default'                   => esc_html__('About us', 'numero'),
    'sanitize_callback'         => 'sanitize_text_field',
    'transport'                 => 'postMessage', // refresh or postMessage              
) );    

$wp_customize->add_control( 'numero_about_header_text', array(
    'type'                      => 'text',
    'label'                     => __( 'Header', 'numero' ),
    'section'                   => 'numero_about_section',
    'priority'                  => 1,
) );

$wp_customize->add_setting( 'numero_about_description', array(      
    'default'                   => esc_html__('Section Description', 'numero'),
    'sanitize_callback'         => 'sanitize_text_field',
    'transport'                 => 'postMessage',               
) );    

$wp_customize->add_control( 'numero_about_description', array(
    'type'                      => 'textarea',
    'label'                     => __( 'Description', 'numero' ),
    'section'                   => 'numero_about_section',
    'priority'                  => 3,
) );

    
/*********Dropdown pages control **********/       
    
$wp_customize->add_setting( 'numero_about_boxes', array(
        'sanitize_callback' => 'numero_sanitize_repeatable_data_field',
        'transport' => 'refresh', // refresh or postMessage
    ) );

$wp_customize->add_control(
    new Numero_Customize_Repeatable_Control(
$wp_customize,
    'numero_about_boxes',
    array(
        'label'         => esc_html__('About Us page', 'numero'),
        'description'   => '',
        'section'       => 'numero_about_section',
        'live_title_id' => 'content_page', // apply for unput text and textarea only
        'title_format'  => esc_html__('[live_title]', 'numero'), // [live_title]
        'max_item'      => 3, // Maximum item can add
        'fields'        => array(
            'content_page'  => array(
                'title'     => esc_html__('Select a page', 'numero'),
                'type'      =>'select',
                'options'       => $numero_option_pages
            ),
            'icon'          => array(
                'title'     => esc_html__('Icon', 'numero'),
                'type'      =>'icon',
                'required'  => array( 'icon_type', '=', 'icon' ),
            ),
     
    ),

        )
    ) );
    
    /********* Choose section**********/
    
$wp_customize->add_section('numero_choose_section', array(
    'title'                     => __('Choose Section', 'numero'),
    'description'               => 'Easily edit your header section',
    'priority'                  => 25,   
    'panel'                     => 'numero_pannel',    

));




$wp_customize->add_setting( 'numero_choose_check', array(
        'sanitize_callback' => 'numero_sanitize_checkbox',
        'default'           => '',
        'capability'        => 'manage_options',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control( new Numero_Customizer_Toggle_Control( $wp_customize, 'numero_choose_check', array(
        'settings' => 'numero_choose_check',
        'label'    => __( 'Enable Choose Section?', 'numero' ),
        'section'  => 'numero_choose_section',
        'type'     => 'ios',
        'priority' => 1,

) ) );


 $wp_customize->add_setting( 'numero_choose_header_text', array(      
    'default'                   => esc_html__('Section Title', 'numero'),
    'sanitize_callback'         => 'sanitize_text_field',
    'transport'                 => 'postMessage', // refresh or postMessage              
) );    

$wp_customize->add_control( 'numero_choose_header_text', array(
    'type'                      => 'text',
    'label'                     => __( 'Header', 'numero' ),
    'section'                   => 'numero_choose_section',
    'priority'                  => 1,
) );

$wp_customize->add_setting(
    'numero_choose_box',
    array(
        
        'sanitize_callback' => 'numero_sanitize_repeatable_data_field',
        'transport' => 'refresh', // refresh or postMessage
    ) );


$wp_customize->add_control(
    new Numero_Customize_Repeatable_Control(
        $wp_customize, 
        'numero_choose_box',
        array(
            'label'         => esc_html__('choose content page', 'numero'),
            'description'   => '',
            'section'       => 'numero_choose_section',
            'live_title_id' => 'content_page', // apply for unput text and textarea only
            'title_format'  => esc_html__('[live_title]', 'numero'), // [live_title]
            'max_item'      => 4, // Maximum item can add   
            'fields'        => array(
                'content_page'  => array(
                    'title'     => esc_html__('Select a page', 'numero'),
                    'type'      =>'select',
                    'options'   => $numero_option_pages
                ),
                'title'     => array(
                    'title'     => esc_html__('Title', 'numero'),
                    'type'      =>'text',
                    'default'   => wp_kses_post('Creating', 'numero'),
                ),
            ),

        )
    ) );

/********* Counter section**********/
    
$wp_customize->add_section('numero_counter_section', array(
    'title'                     => __('Counter Section', 'numero'),
    'description'               => 'Easily edit your header section',
    'priority'                  => 30,   
    'panel'                     => 'numero_pannel',    

));    



$wp_customize->add_setting( 'numero_counter_check', array(
        'sanitize_callback' => 'numero_sanitize_checkbox',
        'default'           => '',
        'capability'        => 'manage_options',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control( new Numero_Customizer_Toggle_Control( $wp_customize, 'numero_counter_check', array(
        'settings' => 'numero_counter_check',
        'label'    => __( 'Disable Counter Section?', 'numero' ),
        'section'  => 'numero_counter_section',
        'type'     => 'ios',
        'priority' => 1,

) ) );





$wp_customize->add_setting( 'counter_background_img', array(
    'default'                   => '',
    'type'                      => 'theme_mod',
    'capability'                => 'edit_theme_options',
    'sanitize_callback'         => 'esc_url_raw',
) );

$wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize,'counter_background_img', array(
    'label'                     => __( 'Background Image', 'numero' ),
    'section'                   => 'numero_counter_section',
    'settings'                  => 'counter_background_img',
    'context'                   => 'counter_background_img',
    'priority'                  => 20,
    ) 
) );

$wp_customize->add_setting( 'numero_counter_setting', 
       array(               
           'sanitize_callback' => 'numero_sanitize_repeatable_data_field',
            'transport' => 'refresh', // refresh or postMessage

       ) );    

$wp_customize->add_control(
    new Numero_Customize_Repeatable_Control(
        $wp_customize,
        'numero_counter_setting',
        array(
            'label'         => esc_html__('Counter Sections', 'numero'),
            'description'   => 'Add upto 4 service blocks',
            'section'       => 'numero_counter_section',
            'title_format'  => esc_html__( '[live_title]', 'numero'), // [live_title]
            'max_item'      => 4, // Maximum item can add
            'limited_msg'   => wp_kses_post( 'Contact us through our Support Forum if you need more.', 'numero' ),
            'fields'        => array(
                

            'icon'      => array(
                'title'     => esc_html__('Icon', 'numero'),
                'type'      =>'icon',
                'required'  => array( 'icon_type', '=', 'numero' ),
            ),

                 'count'    => array(
                    'title'     => esc_html__('Count', 'numero'),
                    'type'      =>'text',
                    'default'   => wp_kses_post('455', 'numero'),
                ),


                 'title'    => array(
                    'title'     => esc_html__('Title', 'numero'),
                    'type'      =>'text',
                    'default'   => wp_kses_post('CLIENTS'),
                ),
            ),

        )
    ) );
/*********Our Project**********/
    
$wp_customize->add_section('numero_our_work', array(
    'title'                     => __('Our Work Section', 'numero'),
    'description'               => 'Easily edit your header section',
    'priority'                  => 35,   
    'panel'                     => 'numero_pannel',    

));


$wp_customize->add_setting( 'numero_our_work_check', array(
        'sanitize_callback' => 'numero_sanitize_checkbox',
        'default'           => '',
        'capability'        => 'manage_options',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control( new Numero_Customizer_Toggle_Control( $wp_customize, 'numero_our_work_check', array(
        'settings' => 'numero_our_work_check',
        'label'    => __( 'Enable Work Section?', 'numero' ),
        'section'  => 'numero_our_work',
        'type'     => 'ios',
        'priority' => 1,

) ) );




$wp_customize->add_setting( 'numero_our_work_header', array(      
    'default'                   => esc_html__('Session Title', 'numero'),
    'sanitize_callback'         => 'sanitize_text_field',
    'transport'                 => 'postMessage', // refresh or postMessage              
) );    

$wp_customize->add_control( 'numero_our_work_header', array(
    'type'                      => 'text',
    'label'                     => __( 'Header', 'numero' ),
    'section'                   => 'numero_our_work',
    'priority'                  => 1,
) );

$wp_customize->add_setting( 'numero_our_work_description', array(      
    'default'                   => esc_html__('Section Description.', 'numero'),
    'sanitize_callback'         => 'sanitize_text_field',
    'transport'                 => 'postMessage',               
) );    

$wp_customize->add_control( 'numero_our_work_description', array(
    'type'                      => 'textarea',
    'label'                     => __( 'Description', 'numero' ),
    'section'                   => 'numero_our_work',
    'priority'                  => 3,
) );

$wp_customize->add_setting( 'numero_our_work_count', array(
    'default'                   => 8,
    'sanitize_callback'         => 'absint'
    )
);
$wp_customize->add_control( 'numero_our_work_count', array(
    'type'                      => 'integer',
    'label'                     => __('Number Of Testimonial To Show - i.e 10 (default is 8)','numero'),
    'section'                   => 'numero_our_work',

    )
);
  

$wp_customize->add_setting( 'numero_accent_opacity', 
   array( 
       'default' =>.90,
       'transport' => 'refresh',
       'sanitize_callback' => 'sanitize_text_field',
   ) );
$wp_customize->add_control( 'numero_accent_opacity', 
   array(
    'type' => 'text',
    'section' => 'numero_our_work', // Required, core or custom.
    'label' => esc_attr__( "Background Transparency", 'numero' ),
    
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
function numero_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return 0;
    }
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function numero_customize_preview_js() {
	wp_enqueue_script( 'numero-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'numero_customize_preview_js' );
