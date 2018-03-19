<?php
if (!function_exists('text_color_styles'))  {
	function text_color_styles(){
		
		$color_value = get_theme_mod('header_textcolor', '');
		$append_color = sprintf( 'color: %s;',  $color_value );
		if ( $color_value ) {
			echo "\n" . '#top-header a , .openmenu-nav{' . esc_html($append_color) . '}';
		}
		
	}
}




if (!function_exists('numero_paragraph_font'))  {
	function numero_paragraph_font(){
		
		$fontfamily_value = get_theme_mod('numero_paragraph_font', '');
		$append_family = sprintf( 'font-family: %s;',  $fontfamily_value );
			// Output the styles.
		if ( $fontfamily_value ) {
			echo "\n" . '#home-banner p{' . esc_html($append_family) . '}' ."\n". '#about-us-block p{'.esc_html($append_family).'}' ."\n". '#our-work-block p{'.esc_html($append_family).'}' ."\n". '#our-services p{' .esc_html($append_family).'}' ."\n". '#from-blog  .entry-header p{'.esc_html($append_family).'}' ."\n". '#free-trial-block p{'.esc_html($append_family).'}' ;
		}
		
	}
}
 // Add custom styles to `<head>`.


if (!function_exists('numero_paragraph_font_size'))  {
	function numero_paragraph_font_size(){
		
		$fontparagfamily_value = get_theme_mod('numero_paragraph_font_size', '');
		$append_para_family_font = sprintf( 'font-size: %spx !important;',  $fontparagfamily_value );
			// Output the styles.
		if ( $fontparagfamily_value ) {
			echo "\n" . 'p{' . esc_html($append_para_family_font) . '}';
		}
		
	}
}


if (!function_exists('numero_paragraph_font_color'))  {
	function numero_paragraph_font_color(){
		
		$color_value = get_theme_mod('numero_paragraph_font_color', '');
		$append_color = sprintf( 'color: %s !important;',  $color_value );
			// Output the styles.
		if ( $color_value ) {
			echo "\n" . 'p{' .esc_html ($append_color) . '}' ;
		}
		
	}
}



if (!function_exists('numero_heading_font_family'))  {
	function numero_heading_font_family(){
		
		$fontfamily_value = get_theme_mod('numero_heading_font_family', '');
		$append_family = sprintf( 'font-family: %s;',  $fontfamily_value );
			// Output the styles.
		if ( $fontfamily_value ) {
			echo "\n" . 'h1,h2,h3,h4,h5,h6{'.esc_html($append_family).'}' ;
		}
		
	}
}



if (!function_exists('numero_headings_font_color'))  {
	function numero_headings_font_color(){
		
		$color_value = get_theme_mod('numero_headings_font_color', '');
		$append_color = sprintf( 'color: %s;',  $color_value );
			// Output the styles.
		if ( $color_value ) {
			echo "\n" . 'h1{' . esc_html($append_color) . '}'."\n".'h2{'.esc_html($append_color).'}'."\n".'h3{'.esc_html($append_color).'}'.
                "\n".'h4{'.esc_html($append_color).'}'."\n".'h5{'.esc_html($append_color).'}'."\n".'#about-us-block h2{'.esc_html($append_color).'}'."\n".'#our-work-block h2{'.esc_html($append_color).'}' ;
		}
		
	}
}



if (!function_exists('numero_accent_color'))  {
	function numero_accent_color(){
		
		$color_value = get_theme_mod('numero_accent_color', '');
        $opacity_value= get_theme_mod('numero_accent_opacity');
		$append_color = sprintf( 'background-color: %s ;',  $color_value );
        $icon_color = sprintf( 'color: %s ;',  $color_value );
        $choose_color = sprintf('background : %s ;',  $color_value );
        $opacity =sprintf('opacity : %s ;',  $opacity_value );
        $opacity_color = sprintf( 'background : %s; ',  $color_value );
        $append_border=sprintf( 'border: 1px %s solid;',  $color_value );
		//$widget_color=sprintf( 'border:0px %s dashed;',  $color_value );
        

			// Output the styles.
		if ( $color_value ) {
			echo "\n" .'#home-banner a.btn-info{'.esc_html($append_color).'}'."\n" .'#about-us-block .col-about-us i{'.esc_html($icon_color).'}'."\n" .'#why-choose-us .section-title:after{'.esc_html($choose_color).'}'."\n" .'#why-choose-us .section-title{'.esc_html($choose_color).'}'."\n" .'#our-work-block .works figcaption{'.esc_html($opacity_color).'}'."\n".'#our-work-block .works figure:hover figcaption, #our-work-block .works figure:focus figcaption{'.esc_html($opacity).'}'."\n" .'.services-block i{'.esc_html($choose_color).'}'."\n" .'#clients-block{'.esc_html($choose_color).'}'."\n" .'#free-trial-block a{'.esc_html($choose_color).'}'."\n" .'#free-trial-block a{'.esc_html($append_border).'}' ."\n".'.article a h5:hover{'.esc_html($icon_color).'}'."\n".'.subcribe-block form .btn i.fa{'.esc_html($icon_color).'}'."\n".'.article header .date-article, .single article header.entry-header .date-article{'.esc_html($choose_color).'}'."\n".'aside .widget_search button{'.esc_html($choose_color).'}'."\n".'.cart-notify i span{'.esc_html($choose_color).'}'."\n".'.widget-title:after{'.esc_html($opacity_color).'}'."\n".'.author-box .author-box-title{'.esc_html($icon_color).'}'."\n".'.author-box .author-box-title a{'.esc_html($choose_color).'}'."\n".'.single .single-post ul li:before, .page .page-block ul li:before, .single-jetpack-portfolio .page-block ul li:before{'.esc_html($choose_color).'}'."\n".'#top-menu.navbar-default .navbar-nav li:hover{'.esc_html($choose_color).'}';
		}
		
	}
}



if (!function_exists('numero_secondary_color'))  {
	function numero_secondary_color(){
		
		$color_value = get_theme_mod('dblogger_secondary_color', '');
        $append_bckcolor = sprintf( 'background-color: %s !important;',  $color_value );
			// Output the styles.
		if ( $color_value ) {
			echo "\n" .'.on{'.esc_html($append_bckcolor).'}'."\n".'.theme-post-caption .view-payment{'.esc_html($append_bckcolor).'}'."\n".'.widget_categories ul{'.esc_html($append_bckcolor).'}';
		}
		
	}
}


if(!function_exists('numero_main_styles')){
 function numero_main_styles(){
echo '<style type="text/css" id="numero-css">';
text_color_styles();
numero_paragraph_font();
numero_paragraph_font_size();
numero_heading_font_family();
numero_paragraph_font_color();
numero_heading_font_family();
numero_headings_font_color();
numero_heading_font_family();
numero_headings_font_color();
numero_accent_color();
numero_secondary_color();

echo "\n". "</style>". "\n";
} 	
 }
 
add_action( 'wp_head', 'numero_main_styles' );



