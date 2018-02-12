<?php $background_img   = get_theme_mod( 'numero_background_img',get_template_directory_uri()."/assets/img/bg-1.jpg");  ?> 
<section id="home-banner" style="background-image: url(<?php echo esc_url($background_img) ?>);">
    <div class="content">
            <div class="container wow fdeInUp"  data-wow-duration="1s">
                <?php 
                    $numero_theme_title  = get_theme_mod( 'numero_header_text', __(' MOBILE first APPROACH!', 'numero' ));
                    if ($numero_theme_title != '') echo '<h1>  ' . esc_html($numero_theme_title) . ' </h1>'; 
                ?>

                <?php 
                    $numero_tagline  = get_theme_mod( 'numero_tag_line', __(' THINK BIG & GROW RICH.', 'numero' ));
                    if ($numero_tagline != '') echo '<h2>  ' . esc_html($numero_tagline) . ' </h2>'; 
                ?>

                <?php 
                    $header_desc  = get_theme_mod( 'numero_header_description', __('We build some of the best wordpress themes and also provide support for them. Our team of 5 work smart to get you pixel perfect themes. Lets grow together.', 'numero' ));
                    if ($header_desc != '') echo '<p> ' . wp_kses_post($header_desc) . ' </p>'; 
                 $button_one_url= get_theme_mod( 'numero_header_button_one_url' ,__('www.burstfly.com','numero'));
                 $button_one_text=get_theme_mod( 'numero_header_button_one',__('contact us','numero') ) ;
                 $button_two_url=get_theme_mod( 'numero_header_button_two_url',__('www.burstfly.com','numero') );
                 $button_two_text= get_theme_mod( 'numero_header_button_two' ,__('start free trail ','numero')) ;
                  ?>
                <a class="btn btn-outline-default" href="<?php echo esc_url($button_one_url); ?>">
                <?php echo esc_html($button_one_text); ?>
                   
                </a> 
                <a class="btn btn-info chooser-btn" href="<?php echo esc_url($button_two_url); ?>">
                <?php echo esc_html($button_two_text); ?>
                     
                </a> 
            </div>
        </div>
</section>