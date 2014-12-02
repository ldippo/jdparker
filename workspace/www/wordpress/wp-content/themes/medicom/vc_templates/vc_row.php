<?php
$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $new_background = $background_attachmen = $fix_video = $video_url_webm = $video_url = $image_ratio = $parallax_settings = '';
extract(shortcode_atts(array(
    'el_class'        => '',
    'bg_image'        => '',
    'bg_color'        => '',
    'bg_image_repeat' => '',
    'new_background' => '',
    'video_url'    => '',
    'video_url_webm' => '',
    'video_url_ogv' => '',
    'image_ratio'  => '',
    'font_color'      => '',
    'padding'         => '',
    'margin_bottom'   => ''
), $atts));

wp_enqueue_style( 'js_composer_front' );
wp_enqueue_script( 'wpb_composer_front_js' );
wp_enqueue_style('js_composer_custom_css');

$el_class = $this->getExtraClass($el_class);

$css_class =  apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_row '.get_row_css_class().$el_class, $this->settings['base']);

if ( $new_background == "parallax" ) {
    $image_ratio = ' data-stellar-background-ratio="'.$image_ratio.'"';
    $css_class .= " m_parallax";  
}

else if ( $new_background == "video" ) {
  $css_class .= " medicom_video";
  $image_ratio = "";
  $fix_video = ' style="position: relative;"';  
}

$style = $this->buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom, $new_background);
$output .= '<div class="'.$css_class.'"'.$style.''.$image_ratio.'>';
if ( $new_background == 'video') {
    $image_url = wp_get_attachment_url( $bg_image, 'large' );
        $output .= '<div class = "video_back"><video poster="'.$image_url.'" preload autoplay="autoplay" loop="loop">
        <source src="'.$video_url.'" type="video/mp4">      
        <source src="'.$video_url_webm.'" type="video/webm; codecs=vp8,vorbis">
        <source src="'.$video_url_ogv.'" type="video/ogg; codecs=theora,vorbis"></video></div>';
        }
$output .= '<div class="container"'.$fix_video.'><div class="row">';
$output .= wpb_js_remove_wpautop($content);
$output .= '</div></div></div>'.$this->endBlockComment('row');

echo $output;