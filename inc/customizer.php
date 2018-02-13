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
/********Service**********/

$wp_customize->add_section('numero_service_section', array(
'title'                     => __('Services Section', 'numero'),
'description'               => 'Easily edit your header section',
'priority'                  => 40,   
'panel'                     => 'numero_pannel',    

));



$wp_customize->add_setting( 'numero_service_check', array(
    'sanitize_callback' => 'numero_sanitize_checkbox',
    'default'           => '',
    'capability'        => 'manage_options',
    'transport'         => 'refresh',
)
);

$wp_customize->add_control( new Numero_Customizer_Toggle_Control( $wp_customize, 'numero_service_check', array(
    'settings' => 'numero_service_check',
    'label'    => __( 'Disable Service Section?', 'numero' ),
    'section'  => 'numero_service_section',
    'type'     => 'ios',
    'priority' => 1,

) ) );



$wp_customize->add_setting( 'numero_service_header', array(      
'default'                   => esc_html__('Section Title', 'numero'),
'sanitize_callback'         => 'sanitize_text_field',
'transport'                 => 'postMessage', // refresh or postMessage              
) );    

$wp_customize->add_control( 'numero_service_header', array(
'type'                      => 'text',
'label'                     => __( 'Header', 'numero' ),
'section'                   => 'numero_service_section',
'priority'                  => 1,
) );

$wp_customize->add_setting( 'numero_service_description', array(      
'default'                   => esc_html__('Section Description.', 'numero'),
'sanitize_callback'         => 'sanitize_text_field',
'transport'                 => 'postMessage',               
) );    

$wp_customize->add_control( 'numero_service_description', array(
'type'                      => 'textarea',
'label'                     => __( 'Description', 'numero' ),
'section'                   => 'numero_service_section',
'priority'                  => 3,
) );

/*********Dropdown pages control **********/       

$wp_customize->add_setting( 'numero_service_boxes', array(
    'sanitize_callback' => 'numero_sanitize_repeatable_data_field',
    'transport' => 'refresh', // refresh or postMessage
) );

$wp_customize->add_control(
new Numero_Customize_Repeatable_Control(
    $wp_customize,
    'numero_service_boxes',
    array(
        'label'         => esc_html__('Services', 'numero'),
        'description'   => '',
        'section'       => 'numero_service_section',
        'live_title_id' => 'content_page', // apply for unput text and textarea only
        'title_format'  => esc_html__('[live_title]', 'numero'), // [live_title]
        'max_item'      => 6, // Maximum item can add
        'limited_msg'   => wp_kses_post( 'Contact us through our Support Forum if you need more.', 'numero' ),
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
/*********Testimonial Section**********/
    
$wp_customize->add_section('numero_testimonial_section', array(
    'title'                     => __('Testimonial Section', 'numero'),
    'description'               => 'Easily edit your header section',
    'priority'                  => 45,   
    'panel'                     => 'numero_pannel',    

));


$wp_customize->add_setting( 'numero_testimonial_check', array(
        'sanitize_callback' => 'numero_sanitize_checkbox',
        'default'           => '',
        'capability'        => 'manage_options',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control( new Customizer_Toggle_Control( $wp_customize, 'numero_testimonial_check', array(
        'settings' => 'numero_testimonial_check',
        'label'    => __( 'Enable Testimonial Section?', 'numero' ),
        'section'  => 'numero_testimonial_section',
        'type'     => 'ios',
        'priority' => 1,

) ) );




$wp_customize->add_setting( 'numero_testimonial_header', array(      
    'default'                   => esc_html__('Section Title', 'numero'),
    'sanitize_callback'         => 'sanitize_text_field',
    'transport'                 => 'postMessage', // refresh or postMessage              
) );    

$wp_customize->add_control( 'numero_testimonial_header', array(
    'type'                      => 'text',
    'label'                     => __( 'Header', 'numero' ),
    'section'                   => 'numero_testimonial_section',
    'priority'                  => 1,
) );

   
$wp_customize->add_setting( 'numero_testimonial_count', array(
    'default'                   => 3,
    'sanitize_callback'         => 'absint'
    )
);
$wp_customize->add_control( 'numero_testimonial_count', array(
    'type'                      => 'integer',
    'label'                     => __('Number Of Testimonial To Show - i.e 6 (default is 3)','numero'),
    'section'                   => 'numero_testimonial_section',

    )
);
       

       /*********Clients Section**********/
    
$wp_customize->add_section('numero_client_section', array(
'title'                     => __('Client Section', 'numero'),
'description'               => 'Easily edit your header section',
'priority'                  => 45,   
'panel'                     => 'numero_pannel',    

));


$wp_customize->add_setting( 'numero_client_check', array(
    'sanitize_callback' => 'numero_sanitize_checkbox',
    'default'           => '',
    'capability'        => 'manage_options',
    'transport'         => 'refresh',
)
);

$wp_customize->add_control( new Numero_Customizer_Toggle_Control( $wp_customize, 'numero_client_check', array(
    'settings' => 'numero_client_check',
    'label'    => __( 'Disable Client Section?', 'numero' ),
    'section'  => 'numero_client_section',
    'type'     => 'ios',
    'priority' => 1,

) ) );


$wp_customize->add_setting( 'numero_client_setting', 
array(               
   'sanitize_callback' => 'numero_sanitize_repeatable_data_field',
    'transport' => 'refresh', // refresh or postMessage
    
) );    
$wp_customize->add_control(
new Numero_Customize_Repeatable_Control(
    $wp_customize,
    'numero_client_setting',
    array(
        'label'     => esc_html__('Client Sections', 'numero'),
        'description'   => '',
        'section'       => 'numero_client_section',
        //'live_title_id' => 'user_id', // apply for unput text and textarea only
        'title_format'  => esc_html__( '[live_title]', 'numero'), // [live_title]
        'max_item'      => 4, // Maximum item can add
        'limited_msg'   => wp_kses_post( 'Upgrade to <a target="_blank" href="https://www.famethemes.com/plugins/numero/?utm_source=theme_customizer&utm_medium=text_link&utm_campaign=onepress_customizer#get-started">numero</a> to be able to add more items and unlock other premium features!', 'numero' ),
        'fields'    => array(
             'user_id' => array(
                'title' => esc_html__('Image', 'numero'),
                'type'  =>'media',
                'default' => array(
                        'url' => get_template_directory_uri().'/assets/img/client/01.png',
                        'id' => ''
                    ),
            ),                   
                                     
        ),

    )
)
);
/*********Blog Section**********/
    
$wp_customize->add_section('numero_blog_section', array(
    'title'                     => __('Blog Section', 'numero'),
    'description'               => 'Easily edit your header section',
    'priority'                  => 50,   
    'panel'                     => 'numero_pannel',    

));


$wp_customize->add_setting( 'numero_blog_check', array(
        'sanitize_callback' => 'numero_sanitize_checkbox',
        'default'           => '',
        'capability'        => 'manage_options',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control( new Customizer_Toggle_Control( $wp_customize, 'numero_blog_check', array(
        'settings' => 'numero_blog_check',
        'label'    => __( 'Disable Blog Section?', 'numero' ),
        'section'  => 'numero_blog_section',
        'type'     => 'ios',
        'priority' => 1,

) ) );

$wp_customize->add_setting( 'numero_blog_header', array(      
    'default'                   => esc_html__('Section Description', 'numero'),
    'sanitize_callback'         => 'sanitize_text_field',
    'transport'                 => 'postMessage', // refresh or postMessage              
) );    

$wp_customize->add_control( 'numero_blog_header', array(
    'type'                      => 'text',
    'label'                     => __( 'Header', 'numero' ),
    'section'                   => 'numero_blog_section',
    'priority'                  => 1,
) );

$wp_customize->add_setting( 'numero_blog_description', array(      
    'default'                   => esc_html__('Section Description', 'numero'),
    'sanitize_callback'         => 'sanitize_text_field',
    'transport'                 => 'postMessage',               
) );    

$wp_customize->add_control( 'numero_blog_description', array(
    'type'                      => 'textarea',
    'label'                     => __( 'Description', 'numero' ),
    'section'                   => 'numero_blog_section',
    'priority'                  => 3,
) );

$wp_customize->add_setting( 'numero_blog_count', array(
    'default'                   => 3,
    'sanitize_callback'         => 'absint'
    )
);
 $wp_customize->add_control( 'numero_blog_count', array(
    'type'                      => 'integer',
    'label'                     => __('Number Of Blog To Show - i.e 10 (default is 3)','numero'),
    'section'                   => 'numero_blog_section',

    )
);
    
    
/*********Free Trail Section**********/
    
 $wp_customize->add_section('numero_trial_section', array(
    'title'                     => __('Free Trial Section', 'numero'),
    'description'               => 'Easily edit your header section',
    'priority'                  => 55,   
    'panel'                     => 'numero_pannel',    

));

$wp_customize->add_setting( 'numero_trial_check', array(
        'sanitize_callback' => 'numero_sanitize_checkbox',
        'default'           => '',
        'capability'        => 'manage_options',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control( new Customizer_Toggle_Control( $wp_customize, 'numero_trial_check', array(
        'settings' => 'numero_trial_check',
        'label'    => __( 'Disable Blog Section?', 'numero' ),
        'section'  => 'numero_trial_section',
        'type'     => 'ios',
        'priority' => 1,

) ) );

$wp_customize->add_setting( 'numero_trial_header', array(      
    'default'                   => esc_html__('Be the first to grap all new design content from numero!','numero'),
    'sanitize_callback'         => 'sanitize_text_field',
    'transport'                 => 'postMessage', // refresh or postMessage              
) );    

$wp_customize->add_control( 'numero_trial_header', array(
    'type'                      => 'text',
    'label'                     => __( 'Header', 'numero' ),
    'section'                   => 'numero_trial_section',
    'priority'                  => 1,
) );

$wp_customize->add_setting( 'numero_trial_button', array(      
    'default'                   => esc_html__('START FREE TRIAL','numero') ,
    'sanitize_callback'         => 'sanitize_text_field',
    'transport'                 => 'postMessage',               
) );    

$wp_customize->add_control( 'numero_trial_button', array(
    'type'                      => 'text',
    'label'                     => __( 'Button Text', 'numero' ),
    'section'                   => 'numero_trial_section',
    'priority'                  => 4,
) );    

$wp_customize->add_setting( 'numero_trial_button_url', array(      
    'default'                   => '#' ,
    'sanitize_callback'         => 'esc_url_raw',
    'transport'                 => 'postMessage',               
) );    

$wp_customize->add_control( 'numero_trial_button_url', array(
    'type'                      => 'text',
    'label'                     => __( 'Button Url', 'numero' ),
    'section'                   => 'numero_trial_section',
    'priority'                  => 5
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
/**
 * Customizer Icon picker
 */
function numero_customize_controls_enqueue_scripts()
{
    wp_localize_script( 'customize-controls', 'C_Icon_Picker',
        apply_filters( 'c_icon_picker_js_setup',
            array(
                'search'    => esc_html__( 'Search', 'numero' ),
                'fonts' => array(
                    'font-awesome' => array(
                        // Name of icon
                        'name' => esc_html__( 'Font Awesome', 'numero' ),
                        // prefix class example for font-awesome fa-fa-{name}
                        'prefix' => 'fa',
                        // font url
                        'url' => esc_url( add_query_arg( array( 'ver'=> '4.7.0' ), get_template_directory_uri() .'/assets/css/font-awesome.min.css' ) ),
                        // Icon class name, separated by |
                        'icons' => 'fa-glass|fa-music|fa-search|fa-envelope-o|fa-heart|fa-star|fa-star-o|fa-user|fa-film|fa-th-large|fa-th|fa-th-list|fa-check|fa-times|fa-search-plus|fa-search-minus|fa-power-off|fa-signal|fa-cog|fa-trash-o|fa-home|fa-file-o|fa-clock-o|fa-road|fa-download|fa-arrow-circle-o-down|fa-arrow-circle-o-up|fa-inbox|fa-play-circle-o|fa-repeat|fa-refresh|fa-list-alt|fa-lock|fa-flag|fa-headphones|fa-volume-off|fa-volume-down|fa-volume-up|fa-qrcode|fa-barcode|fa-tag|fa-tags|fa-book|fa-bookmark|fa-print|fa-camera|fa-font|fa-bold|fa-italic|fa-text-height|fa-text-width|fa-align-left|fa-align-center|fa-align-right|fa-align-justify|fa-list|fa-outdent|fa-indent|fa-video-camera|fa-picture-o|fa-pencil|fa-map-marker|fa-adjust|fa-tint|fa-pencil-square-o|fa-share-square-o|fa-check-square-o|fa-arrows|fa-step-backward|fa-fast-backward|fa-backward|fa-play|fa-pause|fa-stop|fa-forward|fa-fast-forward|fa-step-forward|fa-eject|fa-chevron-left|fa-chevron-right|fa-plus-circle|fa-minus-circle|fa-times-circle|fa-check-circle|fa-question-circle|fa-info-circle|fa-crosshairs|fa-times-circle-o|fa-check-circle-o|fa-ban|fa-arrow-left|fa-arrow-right|fa-arrow-up|fa-arrow-down|fa-share|fa-expand|fa-compress|fa-plus|fa-minus|fa-asterisk|fa-exclamation-circle|fa-gift|fa-leaf|fa-fire|fa-eye|fa-eye-slash|fa-exclamation-triangle|fa-plane|fa-calendar|fa-random|fa-comment|fa-magnet|fa-chevron-up|fa-chevron-down|fa-retweet|fa-shopping-cart|fa-folder|fa-folder-open|fa-arrows-v|fa-arrows-h|fa-bar-chart|fa-twitter-square|fa-facebook-square|fa-camera-retro|fa-key|fa-cogs|fa-comments|fa-thumbs-o-up|fa-thumbs-o-down|fa-star-half|fa-heart-o|fa-sign-out|fa-linkedin-square|fa-thumb-tack|fa-external-link|fa-sign-in|fa-trophy|fa-github-square|fa-upload|fa-lemon-o|fa-phone|fa-square-o|fa-bookmark-o|fa-phone-square|fa-twitter|fa-facebook|fa-github|fa-unlock|fa-credit-card|fa-rss|fa-hdd-o|fa-bullhorn|fa-bell|fa-certificate|fa-hand-o-right|fa-hand-o-left|fa-hand-o-up|fa-hand-o-down|fa-arrow-circle-left|fa-arrow-circle-right|fa-arrow-circle-up|fa-arrow-circle-down|fa-globe|fa-wrench|fa-tasks|fa-filter|fa-briefcase|fa-arrows-alt|fa-users|fa-link|fa-cloud|fa-flask|fa-scissors|fa-files-o|fa-paperclip|fa-floppy-o|fa-square|fa-bars|fa-list-ul|fa-list-ol|fa-strikethrough|fa-underline|fa-table|fa-magic|fa-truck|fa-pinterest|fa-pinterest-square|fa-google-plus-square|fa-google-plus|fa-money|fa-caret-down|fa-caret-up|fa-caret-left|fa-caret-right|fa-columns|fa-sort|fa-sort-desc|fa-sort-asc|fa-envelope|fa-linkedin|fa-undo|fa-gavel|fa-tachometer|fa-comment-o|fa-comments-o|fa-bolt|fa-sitemap|fa-umbrella|fa-clipboard|fa-lightbulb-o|fa-exchange|fa-cloud-download|fa-cloud-upload|fa-user-md|fa-stethoscope|fa-suitcase|fa-bell-o|fa-coffee|fa-cutlery|fa-file-text-o|fa-building-o|fa-hospital-o|fa-ambulance|fa-medkit|fa-fighter-jet|fa-beer|fa-h-square|fa-plus-square|fa-angle-double-left|fa-angle-double-right|fa-angle-double-up|fa-angle-double-down|fa-angle-left|fa-angle-right|fa-angle-up|fa-angle-down|fa-desktop|fa-laptop|fa-tablet|fa-mobile|fa-circle-o|fa-quote-left|fa-quote-right|fa-spinner|fa-circle|fa-reply|fa-github-alt|fa-folder-o|fa-folder-open-o|fa-smile-o|fa-frown-o|fa-meh-o|fa-gamepad|fa-keyboard-o|fa-flag-o|fa-flag-checkered|fa-terminal|fa-code|fa-reply-all|fa-star-half-o|fa-location-arrow|fa-crop|fa-code-fork|fa-chain-broken|fa-question|fa-info|fa-exclamation|fa-superscript|fa-subscript|fa-eraser|fa-puzzle-piece|fa-microphone|fa-microphone-slash|fa-shield|fa-calendar-o|fa-fire-extinguisher|fa-rocket|fa-maxcdn|fa-chevron-circle-left|fa-chevron-circle-right|fa-chevron-circle-up|fa-chevron-circle-down|fa-html5|fa-css3|fa-anchor|fa-unlock-alt|fa-bullseye|fa-ellipsis-h|fa-ellipsis-v|fa-rss-square|fa-play-circle|fa-ticket|fa-minus-square|fa-minus-square-o|fa-level-up|fa-level-down|fa-check-square|fa-pencil-square|fa-external-link-square|fa-share-square|fa-compass|fa-caret-square-o-down|fa-caret-square-o-up|fa-caret-square-o-right|fa-eur|fa-gbp|fa-usd|fa-inr|fa-jpy|fa-rub|fa-krw|fa-btc|fa-file|fa-file-text|fa-sort-alpha-asc|fa-sort-alpha-desc|fa-sort-amount-asc|fa-sort-amount-desc|fa-sort-numeric-asc|fa-sort-numeric-desc|fa-thumbs-up|fa-thumbs-down|fa-youtube-square|fa-youtube|fa-xing|fa-xing-square|fa-youtube-play|fa-dropbox|fa-stack-overflow|fa-instagram|fa-flickr|fa-adn|fa-bitbucket|fa-bitbucket-square|fa-tumblr|fa-tumblr-square|fa-long-arrow-down|fa-long-arrow-up|fa-long-arrow-left|fa-long-arrow-right|fa-apple|fa-windows|fa-android|fa-linux|fa-dribbble|fa-skype|fa-foursquare|fa-trello|fa-female|fa-male|fa-gratipay|fa-sun-o|fa-moon-o|fa-archive|fa-bug|fa-vk|fa-weibo|fa-renren|fa-pagelines|fa-stack-exchange|fa-arrow-circle-o-right|fa-arrow-circle-o-left|fa-caret-square-o-left|fa-dot-circle-o|fa-wheelchair|fa-vimeo-square|fa-try|fa-plus-square-o|fa-space-shuttle|fa-slack|fa-envelope-square|fa-wordpress|fa-openid|fa-university|fa-graduation-cap|fa-yahoo|fa-google|fa-reddit|fa-reddit-square|fa-stumbleupon-circle|fa-stumbleupon|fa-delicious|fa-digg|fa-pied-piper-pp|fa-pied-piper-alt|fa-drupal|fa-joomla|fa-language|fa-fax|fa-building|fa-child|fa-paw|fa-spoon|fa-cube|fa-cubes|fa-behance|fa-behance-square|fa-steam|fa-steam-square|fa-recycle|fa-car|fa-taxi|fa-tree|fa-spotify|fa-deviantart|fa-soundcloud|fa-database|fa-file-pdf-o|fa-file-word-o|fa-file-excel-o|fa-file-powerpoint-o|fa-file-image-o|fa-file-archive-o|fa-file-audio-o|fa-file-video-o|fa-file-code-o|fa-vine|fa-codepen|fa-jsfiddle|fa-life-ring|fa-circle-o-notch|fa-rebel|fa-empire|fa-git-square|fa-git|fa-hacker-news|fa-tencent-weibo|fa-qq|fa-weixin|fa-paper-plane|fa-paper-plane-o|fa-history|fa-circle-thin|fa-header|fa-paragraph|fa-sliders|fa-share-alt|fa-share-alt-square|fa-bomb|fa-futbol-o|fa-tty|fa-binoculars|fa-plug|fa-slideshare|fa-twitch|fa-yelp|fa-newspaper-o|fa-wifi|fa-calculator|fa-paypal|fa-google-wallet|fa-cc-visa|fa-cc-mastercard|fa-cc-discover|fa-cc-amex|fa-cc-paypal|fa-cc-stripe|fa-bell-slash|fa-bell-slash-o|fa-trash|fa-copyright|fa-at|fa-eyedropper|fa-paint-brush|fa-birthday-cake|fa-area-chart|fa-pie-chart|fa-line-chart|fa-lastfm|fa-lastfm-square|fa-toggle-off|fa-toggle-on|fa-bicycle|fa-bus|fa-ioxhost|fa-angellist|fa-cc|fa-ils|fa-meanpath|fa-buysellads|fa-connectdevelop|fa-dashcube|fa-forumbee|fa-leanpub|fa-sellsy|fa-shirtsinbulk|fa-simplybuilt|fa-skyatlas|fa-cart-plus|fa-cart-arrow-down|fa-diamond|fa-ship|fa-user-secret|fa-motorcycle|fa-street-view|fa-heartbeat|fa-venus|fa-mars|fa-mercury|fa-transgender|fa-transgender-alt|fa-venus-double|fa-mars-double|fa-venus-mars|fa-mars-stroke|fa-mars-stroke-v|fa-mars-stroke-h|fa-neuter|fa-genderless|fa-facebook-official|fa-pinterest-p|fa-whatsapp|fa-server|fa-user-plus|fa-user-times|fa-bed|fa-viacoin|fa-train|fa-subway|fa-medium|fa-y-combinator|fa-optin-monster|fa-opencart|fa-expeditedssl|fa-battery-full|fa-battery-three-quarters|fa-battery-half|fa-battery-quarter|fa-battery-empty|fa-mouse-pointer|fa-i-cursor|fa-object-group|fa-object-ungroup|fa-sticky-note|fa-sticky-note-o|fa-cc-jcb|fa-cc-diners-club|fa-clone|fa-balance-scale|fa-hourglass-o|fa-hourglass-start|fa-hourglass-half|fa-hourglass-end|fa-hourglass|fa-hand-rock-o|fa-hand-paper-o|fa-hand-scissors-o|fa-hand-lizard-o|fa-hand-spock-o|fa-hand-pointer-o|fa-hand-peace-o|fa-trademark|fa-registered|fa-creative-commons|fa-gg|fa-gg-circle|fa-tripadvisor|fa-odnoklassniki|fa-odnoklassniki-square|fa-get-pocket|fa-wikipedia-w|fa-safari|fa-chrome|fa-firefox|fa-opera|fa-internet-explorer|fa-television|fa-contao|fa-500px|fa-amazon|fa-calendar-plus-o|fa-calendar-minus-o|fa-calendar-times-o|fa-calendar-check-o|fa-industry|fa-map-pin|fa-map-signs|fa-map-o|fa-map|fa-commenting|fa-commenting-o|fa-houzz|fa-vimeo|fa-black-tie|fa-fonticons|fa-reddit-alien|fa-edge|fa-credit-card-alt|fa-codiepie|fa-modx|fa-fort-awesome|fa-usb|fa-product-hunt|fa-mixcloud|fa-scribd|fa-pause-circle|fa-pause-circle-o|fa-stop-circle|fa-stop-circle-o|fa-shopping-bag|fa-shopping-basket|fa-hashtag|fa-bluetooth|fa-bluetooth-b|fa-percent|fa-gitlab|fa-wpbeginner|fa-wpforms|fa-envira|fa-universal-access|fa-wheelchair-alt|fa-question-circle-o|fa-blind|fa-audio-description|fa-volume-control-phone|fa-braille|fa-assistive-listening-systems|fa-american-sign-language-interpreting|fa-deaf|fa-glide|fa-glide-g|fa-sign-language|fa-low-vision|fa-viadeo|fa-viadeo-square|fa-snapchat|fa-snapchat-ghost|fa-snapchat-square|fa-pied-piper|fa-first-order|fa-yoast|fa-themeisle|fa-google-plus-official|fa-font-awesome|fa-handshake-o|fa-envelope-open|fa-envelope-open-o|fa-linode|fa-address-book|fa-address-book-o|fa-address-card|fa-address-card-o|fa-user-circle|fa-user-circle-o|fa-user-o|fa-id-badge|fa-id-card|fa-id-card-o|fa-quora|fa-free-code-camp|fa-telegram|fa-thermometer-full|fa-thermometer-three-quarters|fa-thermometer-half|fa-thermometer-quarter|fa-thermometer-empty|fa-shower|fa-bath|fa-podcast|fa-window-maximize|fa-window-minimize|fa-window-restore|fa-window-close|fa-window-close-o|fa-bandcamp|fa-grav|fa-etsy|fa-imdb|fa-ravelry|fa-eercast|fa-microchip|fa-snowflake-o|fa-superpowers|fa-wpexplorer|fa-meetup'

                    ),
                )

            )
        )
    );
}
add_action( 'customize_controls_enqueue_scripts', 'numero_customize_controls_enqueue_scripts' );