<?php
/**
 * Template part for displaying testimonial section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Numero
 */

?>
<section id="clients-block" class="text-center">
  <div class="container">
    <div id="clients" class="owl-carousel owl-theme">
     <?php
$user_ids = numero_get_section_client_data();
?>
<?php
if ( ! empty( $user_ids ) ) {
    $n = 0;
    $firstClass = 'active'; 

    foreach ( $user_ids as $member ) {
        $member = wp_parse_args( $member, array(
        'user_id'  =>array(),
        ));
        $user_id = wp_parse_args( $member['user_id'],array(
        'id' => '',
        ) );
        $image_attributes = wp_get_attachment_image_src( $user_id['id'], 'creativeagency-small' );
        $image_alt = get_post_meta( $user_id['id'], '_wp_attachment_image_alt', true);   

        // if ( $image_attributes ) {


        if($image_attributes[0])
        {
            $image = $image_attributes[0];
        }
        else
        {
            $image=get_template_directory_uri().'/assets/img/client/01.png';
        }

        $data = get_post( $user_id['id'] );
        $n ++;
        ?>
            <div class="item"> <img src="<?php echo esc_url( $image ); ?>"> </div>
     
    <?php
    // }
    } // end foreach
    $firstClass = "";
}
?>
    </div>
  </div>
</section>