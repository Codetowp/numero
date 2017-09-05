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
    
      if ( isset( $wp_customize->selective_refresh ) ) 
    {
         $wp_customize->selective_refresh->add_partial( 'numero_header_text', array(
                'selector'       	 	=> '#home-banner h1',
                'render_callback' 	 	=> 'numero_customize_partial_header_text',

            ) ); 
        
        $wp_customize->selective_refresh->add_partial( 'numero_tag_line', array(
                'selector'       	 	=> '#home-banner h2',
                'render_callback' 	 	=> 'numero_customize_partial_tag_line',

            ) ); 
        
        $wp_customize->selective_refresh->add_partial( 'numero_header_description', array(
                'selector'       	 	=> '#home-banner p',
                'render_callback' 	 	=> 'numero_customize_partial_header_description',

            ) ); 
        
        $wp_customize->selective_refresh->add_partial( 'numero_about_header_text', array(
            'selector'       	 	=> '#about-us-block h2',
            'render_callback' 	 	=> 'numero_customize_partial_about_header_text',
        ) ); 
        
        $wp_customize->selective_refresh->add_partial( 'numero_about_description', array(
            'selector'       	 	=> '#about-us-block p',
            'render_callback' 	 	=> 'numero_customize_partial_about_description',
        ) ); 
        
         $wp_customize->selective_refresh->add_partial( 'numero_choose_header_text', array(
            'selector'       	 	=> '#why-choose-us h2',
            'render_callback' 	 	=> 'numero_customize_partial_choose_header_text',
        ) ); 
        
        $wp_customize->selective_refresh->add_partial( 'numero_our_work_header', array(
            'selector'       	 	=> '#our-work-block h2',
            'render_callback' 	 	=> 'numero_customize_partial_our_work_header',
        ) ); 

        $wp_customize->selective_refresh->add_partial( 'numero_our_work_description', array(
            'selector'       	 	=> '#our-work-block p',
            'render_callback' 	 	=> 'numero_customize_partial_our_work_description',
        ) ); 

        $wp_customize->selective_refresh->add_partial( 'numero_service_header', array(
            'selector'       	 	=> '#our-services h2',
            'render_callback' 	 	=> 'numero_customize_partial_service_header',
        ) ); 
        
        $wp_customize->selective_refresh->add_partial( 'numero_service_description', array(
            'selector'       	 	=> '#our-services p span',
            'render_callback' 	 	=> 'numero_customize_partial_service_description',
        ) ); 
        
        $wp_customize->selective_refresh->add_partial( 'numero_testimonial_header', array(
            'selector'       	 	=> '#testimonials-block  .section-title h2',
            'render_callback' 	 	=> 'numero_customize_partial_testimonial_header',
        ) ); 
                
        $wp_customize->selective_refresh->add_partial( 'numero_blog_header', array(
            'selector'       	 	=> '#from-blog  .section-title h2',
            'render_callback' 	 	=> 'numero_customize_partial_blog_header',
        ) ); 
                        
        $wp_customize->selective_refresh->add_partial( 'numero_blog_description', array(
            'selector'       	 	=> '#from-blog  .section-title p',
            'render_callback' 	 	=> 'numero_customize_partial_blog_description',
        ) ); 

        $wp_customize->selective_refresh->add_partial( 'numero_trial_header', array(
            'selector'       	 	=> '#free-trial-block  p',
            'render_callback' 	 	=> 'numero_customize_partial_trial_header',
        ) ); 


    }


/**************label*************/
		$wp_customize->add_panel( 'numero_pannel' ,array(
            'priority'        		=> 101,
            'title'           		=> esc_html__( 'Frontpage Theme Sections', 'numero' ),
            'description'     		=> '',
        ) );

/********* header intro **********/
        $wp_customize->add_section('numero_header', array(
            'title'                     => __('Header Intro', 'numero'),
            'description'               => 'Easily edit your header section',
            'priority'                  => 1,   
            'panel'                     => 'numero_pannel',    

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
            'transport'                 => 'postMessage', // refresh or postMessage              
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
            'transport'                 => 'postMessage', // refresh or postMessage              
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
        'transport'                 => 'postMessage',               
        ) );    

        $wp_customize->add_control( 'numero_header_description', array(
            'type'						=> 'textarea',
            'label' 					=> __( 'Description', 'numero' ),
            'section'  					=> 'numero_header',
            'priority' 					=> 3,
        ) );
    
        $wp_customize->add_setting( 'numero_header_button1', array(      
            'default'                   => 'contact us' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh',               
        ) );    

        $wp_customize->add_control( 'numero_header_button1', array(
            'type'						=> 'text',
            'label' 					=> __( 'Button_1 Text', 'numero' ),
            'section'  					=> 'numero_header',
            'priority' 					=> 4,
        ) );	
    
        $wp_customize->add_setting( 'numero_header_button1_url', array(      
            'default'                   => 'www.burstfly.com' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh',               
        ) );    

        $wp_customize->add_control( 'numero_header_button1_url', array(
            'type'						=> 'text',
            'label' 					=> __( 'Button_1 Url', 'numero' ),
            'section'  					=> 'numero_header',
            'priority' 					=> 5
        ) );	  
    

        $wp_customize->add_setting( 'numero_header_button2', array(      
            'default'                   => 'start free trail ' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh',               
        ) );    

        $wp_customize->add_control( 'numero_header_button2', array(
            'type'						=> 'text',
            'label' 					=> __( 'Button_2 Text', 'numero' ),
            'section'  					=> 'numero_header',
            'priority' 					=> 6,
        ) );	

        $wp_customize->add_setting( 'numero_header_button2_url', array(      
            'default'                   => 'www.burstfly.com' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh',               
        ) );    

        $wp_customize->add_control( 'numero_header_button2_url', array(
            'type'						=> 'text',
            'label' 					=> __( 'Button_2 Url', 'numero' ),
            'section'  					=> 'numero_header',
            'priority' 					=> 7
        ) );	  
    
/*********About Us **********/
    
        $wp_customize->add_section('numero_about', array(
            'title'                     => __('About Us', 'numero'),
            'description'               => 'Easily edit your header section',
            'priority'                  => 1,   
            'panel'                     => 'numero_pannel',    

        ));
    
         $wp_customize->add_setting( 'numero_about_header_text', array(      
            'default'                   => '' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage', // refresh or postMessage              
        ) );    

        $wp_customize->add_control( 'numero_about_header_text', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'numero' ),
            'section'  					=> 'numero_about',
            'priority' 					=> 1,
        ) );
    
        $wp_customize->add_setting( 'numero_about_description', array(      
            'default'                   => '' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage',               
        ) );    

        $wp_customize->add_control( 'numero_about_description', array(
            'type'						=> 'textarea',
            'label' 					=> __( 'Description', 'numero' ),
            'section'  					=> 'numero_about',
            'priority' 					=> 3,
        ) );

/********* Choose section**********/
    
        $wp_customize->add_section('numero_choose', array(
            'title'                     => __('Choose Section', 'numero'),
            'description'               => 'Easily edit your header section',
            'priority'                  => 2,   
            'panel'                     => 'numero_pannel',    

        ));
    
         $wp_customize->add_setting( 'numero_choose_header_text', array(      
            'default'                   => '' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage', // refresh or postMessage              
        ) );    

        $wp_customize->add_control( 'numero_choose_header_text', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'numero' ),
            'section'  					=> 'numero_choose',
            'priority' 					=> 1,
        ) );
    

/*********Our Project**********/
    
        $wp_customize->add_section('numero_our_work', array(
            'title'                     => __('Our Work', 'numero'),
            'description'               => 'Easily edit your header section',
            'priority'                  => 3,   
            'panel'                     => 'numero_pannel',    

        ));
    
        $wp_customize->add_setting( 'numero_our_work_header', array(      
            'default'                   => '' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage', // refresh or postMessage              
        ) );    

        $wp_customize->add_control( 'numero_our_work_header', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'numero' ),
            'section'  					=> 'numero_our_work',
            'priority' 					=> 1,
        ) );
    
        $wp_customize->add_setting( 'numero_our_work_description', array(      
            'default'                   => '' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage',               
        ) );    

        $wp_customize->add_control( 'numero_our_work_description', array(
            'type'						=> 'textarea',
            'label' 					=> __( 'Description', 'numero' ),
            'section'  					=> 'numero_our_work',
            'priority' 					=> 3,
        ) );
    

/*********Our Project**********/
    
        $wp_customize->add_section('numero_service', array(
            'title'                     => __('Services Section', 'numero'),
            'description'               => 'Easily edit your header section',
            'priority'                  => 4,   
            'panel'                     => 'numero_pannel',    

        ));
    
        $wp_customize->add_setting( 'numero_service_header', array(      
            'default'                   => '' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage', // refresh or postMessage              
        ) );    

        $wp_customize->add_control( 'numero_service_header', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'numero' ),
            'section'  					=> 'numero_service',
            'priority' 					=> 1,
        ) );
    
        $wp_customize->add_setting( 'numero_service_description', array(      
            'default'                   => '' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage',               
        ) );    

        $wp_customize->add_control( 'numero_service_description', array(
            'type'						=> 'textarea',
            'label' 					=> __( 'Description', 'numero' ),
            'section'  					=> 'numero_service',
            'priority' 					=> 3,
        ) );
    

/*********Testimonial Section**********/
    
        $wp_customize->add_section('numero_testimonial', array(
            'title'                     => __('Testimonial Section', 'numero'),
            'description'               => 'Easily edit your header section',
            'priority'                  => 5,   
            'panel'                     => 'numero_pannel',    

        ));
    
        $wp_customize->add_setting( 'numero_testimonial_header', array(      
            'default'                   => 'What our clients say' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage', // refresh or postMessage              
        ) );    

        $wp_customize->add_control( 'numero_testimonial_header', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'numero' ),
            'section'  					=> 'numero_testimonial',
            'priority' 					=> 1,
        ) );
    

/*********Blog Section**********/
    
        $wp_customize->add_section('numero_blog', array(
            'title'                     => __('Blog Section', 'numero'),
            'description'               => 'Easily edit your header section',
            'priority'                  => 6,   
            'panel'                     => 'numero_pannel',    

        ));
    
        $wp_customize->add_setting( 'numero_blog_header', array(      
            'default'                   => 'From Our Blog' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage', // refresh or postMessage              
        ) );    

        $wp_customize->add_control( 'numero_blog_header', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'numero' ),
            'section'  					=> 'numero_blog',
            'priority' 					=> 1,
        ) );
    
        $wp_customize->add_setting( 'numero_blog_description', array(      
            'default'                   => '' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage',               
        ) );    

        $wp_customize->add_control( 'numero_blog_description', array(
            'type'						=> 'textarea',
            'label' 					=> __( 'Description', 'numero' ),
            'section'  					=> 'numero_blog',
            'priority' 					=> 3,
        ) );
    
        $wp_customize->add_setting( 'numero_blog_count', array(
            'default'                   => '3',
            'sanitize_callback'         => 'grit_sanitize_integer'
            )
        );
         $wp_customize->add_control( 'numero_blog_count', array(
            'type'                      => 'integer',
            'label'                     => __('Number Of Blog To Show - i.e 10 (default is 3)','grit'),
            'section'                   => 'numero_blog',

            )
        );
/*********Free Trail Section**********/
    
         $wp_customize->add_section('numero_trial', array(
            'title'                     => __('Free Trial Section', 'numero'),
            'description'               => 'Easily edit your header section',
            'priority'                  => 7,   
            'panel'                     => 'numero_pannel',    

        ));
    
        $wp_customize->add_setting( 'numero_trial_header', array(      
            'default'                   => 'Header' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage', // refresh or postMessage              
        ) );    

        $wp_customize->add_control( 'numero_trial_header', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'numero' ),
            'section'  					=> 'numero_trial',
            'priority' 					=> 1,
        ) );
    
        $wp_customize->add_setting( 'numero_trial_button', array(      
            'default'                   => 'START FREE TRIAL' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage',               
        ) );    

        $wp_customize->add_control( 'numero_trial_button', array(
            'type'						=> 'text',
            'label' 					=> __( 'Button Text', 'numero' ),
            'section'  					=> 'numero_trial',
            'priority' 					=> 4,
        ) );	
    
        $wp_customize->add_setting( 'numero_trial_button_url', array(      
            'default'                   => '#' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage',               
        ) );    

        $wp_customize->add_control( 'numero_trial_button_url', array(
            'type'						=> 'text',
            'label' 					=> __( 'Button Url', 'numero' ),
            'section'  					=> 'numero_trial',
            'priority' 					=> 5
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

function numero_customize_partial_header_text() {
    echo get_theme_mod('numero_header_text');
}

function numero_customize_partial_tag_line() {
    echo get_theme_mod('numero_tag_line');
}

function numero_customize_partial_header_description() {
    echo get_theme_mod('numero_header_description');
}

function numero_customize_partial_about_header_text() {
    echo get_theme_mod('numero_about_header_text');
}

function numero_customize_partial_about_description() {
    echo get_theme_mod('numero_about_description');
}

function numero_customize_partial_choose_header_text() {
    echo get_theme_mod('numero_choose_header_text');
}

function numero_customize_partial_our_work_header() {
    echo get_theme_mod('numero_our_work_header');
}

function numero_customize_partial_our_work_description() {
    echo get_theme_mod('numero_our_work_description');
}

function numero_customize_partial_service_header() {
    echo get_theme_mod('numero_service_header');
}

function numero_customize_partial_service_description() {
    echo get_theme_mod('numero_service_description');
}

function numero_customize_partial_testimonial_header() {
    echo get_theme_mod('numero_testimonial_header');
}

function numero_customize_partial_blog_header() {
    echo get_theme_mod('numero_blog_header');
}

function numero_customize_partial_blog_description() {
    echo get_theme_mod('numero_blog_description');
}

function numero_customize_partial_trial_header() {
    echo get_theme_mod('numero_trial_header');
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
