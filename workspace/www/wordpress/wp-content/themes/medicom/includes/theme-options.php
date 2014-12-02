<?php
/**
 * Initialize the options before anything else. 
 */
add_action( 'admin_init', '_custom_theme_options', 1 );
$google_fonts = get_google_webfonts(); 
foreach( $google_fonts as $font ) {
    $google_webfonts_array[$font['family']]['label'] = $font['family'];
    $google_webfonts_array[$font['family']]['value'] = $font['family'];
}
/**
 * Theme Mode demo code of all the available option types.
 *
 * @return    void
 *
 * @access    private
 * @since     2.0
 */
function _custom_theme_options() {
  
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Create a custom settings array that we pass to 
   * the OptionTree Settings API Class.
   */
  $custom_settings = array(
    'contextual_help' => array(
      'content'       => array( 
        array(
          'id'        => 'general_help',
          'title'     => 'General',
          'content'   => '<p><a href="http://wahabali.ticksy.com/">http://bliccathemes.ticksy.com</a></p>'
        )
      ),
      'sidebar'       => '<p><a href="http://wahabali.ticksy.com/">http://bliccathemes.ticksy.com</a></p>'
    ),
    'sections'        => array(
      array(
        'title'       => 'General Settings',
        'id'          => 'general_default'
      ),
      array(
        'title'       => 'Header Settings',
        'id'          => 'header_default'
      ),
      array(
        'title'       => 'Blog Settings',
        'id'          => 'blog_default'
      ),
      array(
        'title'       => 'Social Options',
        'id'          => 'social'
      ),
      array(
        'title'       => 'Footer Settings',
        'id'          => 'footer_default'
      )  
    ),
    /* General Settings */
    'settings'        => array(
      array(
        'label'       => 'Favicon Upload',
        'id'          => 'favicon_upload',
        'type'        => 'upload',
        'desc'        => 'Upload a 16px x 16px .png or .gif image that will be your favicon.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general_default'
      ),
      array(
        'label'       => 'Logo Upload',
        'id'          => 'logo_upload',
        'type'        => 'upload',
        'desc'        => 'Upload your logo image. (Best 200px x 44px)',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general_default'
      ),
      array(
        'label'       => 'Caption Overlay',
        'id'          => 'overlay',
        'type'        => 'upload',
        'desc'        => 'Upload your image for caption image overlay.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general_default'
      ),
      array(
        'label'       => 'Asset Color',
        'id'          => 'asset_color',
        'type'        => 'select',
        'desc'        => 'Select your asset color',
        'choices'     => array(
          array(
            'label'       => 'Blue',
            'value'       => 'main'
          ),
          array(
            'label'       => 'Red',
            'value'       => 'red'
          ),
          array(
            'label'       => 'Green',
            'value'       => 'green'
          ),
          array(
            'label'       => 'Orange',
            'value'       => 'orange'
          ),
          array(
            'label'       => 'Light Brown',
            'value'       => 'light-brown'
          ),
          array(
            'label'       => 'Purple',
            'value'       => 'purple'
          ),
          array(
            'label'       => 'Light Yellow',
            'value'       => 'light-yellow'
          ),
          array(
            'label'       => 'Yellow',
            'value'       => 'yellow'
          ),
        ),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general_default'
      ),
    array(
        'label'       => 'Custom Asset Color',
        'id'          => 'custom_asset_color',
        'type'        => 'colorpicker',
        'desc'        => 'If you dont like our asset color, you can create your own color.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general_default'
      ),
     array(
        'label'       => 'Boxed Layout',
        'id'          => 'boxed_layout',
        'type'        => 'checkbox',
        'desc'        => 'Check if you want to enable fixed layout',
        'choices'     => array(
          array(
            'label'       => 'Yes',
            'value'       => 'Yes'
          )
        ),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general_default'
      ),
      array(
        'label'       => 'Background Image',
        'id'          => 'body_background',
        'type'        => 'upload',
        'desc'        => 'Upload image for body background.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general_default'
      ),
      array(
        'label'       => 'Background Repeat',
        'id'          => 'background_repeat',
        'type'        => 'select',
        'desc'        => 'Select your background repeat',
        'choices'     => array(
          array(
            'label'       => 'No Repeat',
            'value'       => 'no-repeat'
          ),
          array(
            'label'       => 'Repeat',
            'value'       => 'repeat'
          ),
          array(
            'label'       => 'Repeat X',
            'value'       => 'repeat-x'
          ),
          array(
            'label'       => 'Repeat Y',
            'value'       => 'repeat-y'
          )
        ),
        'std'         => 'no-repeat',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general_default'
        ),
      array(
        'label'       => 'Disable Smooth Scroll',
        'id'          => 'disable_smooth_scrool',
        'type'        => 'checkbox',
        'desc'        => 'Check if you want to disable smooth scrool',
        'choices'     => array(
          array(
            'label'       => 'Yes',
            'value'       => 'Yes'
          )
        ),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general_default'
      ),
  
      array(
        'label'       => 'Sidebar Widget Effect',
        'id'          => 'sidebar_effect',
        'type'        => 'select',
        'desc'        => 'Select your widget effect',
        'choices'     => array(
          array(
            'label'       => 'No Animation',
            'value'       => 'no_animation'
          ),
          array(
            'label'       => 'Special Effect 1',
            'value'       => 'blogeffect4-1 blindy'
          ),
          array(
            'label'       => 'Special Effect 2',
            'value'       => 'blogeffect5-1 blindy'
          ),
          array(
            'label'       => 'Special Effect 3',
            'value'       => 'blogeffect6-1 blindy'
          ),
          array(
            'label'       => 'Tada',
            'value'       => 'tadab-1 blindy'
          ),
          array(
            'label'       => 'Flip In X',
            'value'       => 'flipInX-1 blindy'
          ),
          array(
            'label'       => 'Flip In Y',
            'value'       => 'flipInY-1 blindy'
          ),
          array(
            'label'       => 'Fade In',
            'value'       => 'fadeIn-1 blindy'
          ),
          array(
            'label'       => 'Fade In Up',
            'value'       => 'fadeInUp-1 blindy'
          ),
          array(
            'label'       => 'Fade In Down',
            'value'       => 'fadeInDown-1 blindy'
          ),
          array(
            'label'       => 'Fade In Left',
            'value'       => 'fadeInLeft-1 blindy'
          ),
          array(
            'label'       => 'Fade In Right',
            'value'       => 'fadeInRight-1 blindy'
          ),
          array(
            'label'       => 'Fade In Up Big',
            'value'       => 'fadeInUpBig-1 blindy'
          ),
          array(
            'label'       => 'Fade In Down Big',
            'value'       => 'fadeInDownBig-1 blindy'
          ),
          array(
            'label'       => 'Fade In Left Big',
            'value'       => 'fadeInLeftBig-1 blindy'
          ),
          array(
            'label'       => 'Fade In Right Big',
            'value'       => 'fadeInRightBig-1 blindy'
          ),
          array(
            'label'       => 'Bounce In',
            'value'       => 'bounceIn-1 blindy'
          ),
          array(
            'label'       => 'Bounce In Down',
            'value'       => 'bounceInDown-1 blindy'
          ),
          array(
            'label'       => 'Bounce In Left',
            'value'       => 'bounceInLeft-1 blindy'
          ),
          array(
            'label'       => 'Bounce In Right',
            'value'       => 'bounceInRight-1 blindy'
          ),
          array(
            'label'       => 'Rotate In',
            'value'       => 'rotateIn-1 blindy'
          ),
          array(
            'label'       => 'Rotate In Down Left',
            'value'       => 'bounceInDownLeft-1 blindy'
          ),
          array(
            'label'       => 'Rotate In Down Left',
            'value'       => 'rotateInDownLeft-1 blindy'
          ),
          array(
            'label'       => 'Rotate In Down Right',
            'value'       => 'rotateInDownRight-1 blindy'
          ),
          array(
            'label'       => 'Rotate In Up Left',
            'value'       => 'bounceInUpLeft-1 blindy'
          ),
          array(
            'label'       => 'Bounce In Up Right',
            'value'       => 'bounceInUpRight-1 blindy'
          ),
          array(
            'label'       => 'Light Speen In',
            'value'       => 'lightSpeedIn-1 blindy'
          ),
          array(
            'label'       => 'Roll In',
            'value'       => 'bounceInUpRight-1 blindy'
          )
        ),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general_default'
        ),
    array(
        'label'       => 'Custom CSS',
        'id'          => 'custom_css',
        'type'        => 'textarea-simple',
        'desc'        => 'If you want to customize main.css, paste your css code here. When you update the medicom, your custom css code does not disappear.',
        'std'         => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general_default'
      ),
    array(
        'label'       => 'Google Analytics',
        'id'          => 'analytics',
        'type'        => 'textarea-simple',
        'desc'        => 'Paste your Google Analytics Code',
        'std'         => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general_default'
      ),
      /* Header Settings */
      array(
        'label'       => 'Header Style',
        'id'          => 'header_style',
        'type'        => 'select',
        'desc'        => 'Select your header style from different options',
        'choices'     => array(
          array(
            'label'       => 'Header Style Classic',
            'value'       => 'header_style_1'
          ),
          array(
            'label'       => 'Header Style Plus',
            'value'       => 'header_style_2'
          ),
          array(
            'label'       => 'Header Style Easy',
            'value'       => 'header_style_8'
          ),
        ),
        'std'         => 'header_style_1',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'header_default'
      ),
      /* Blog Settings */
      array(
        'label'       => 'Blog Style',
        'id'          => 'blog_style',
        'type'        => 'select',
        'desc'        => 'Select your blog style from different options',
        'choices'     => array(
          array(
            'label'       => 'Big thumbnail with Right Sidebar',
            'value'       => 'big_thumbnail_right_sidebar'
          ),

          array(
            'label'       => 'Two Column with Right Sidebar',
            'value'       => 'two_column'
          ),
          array(
            'label'       => 'Two Column without Sidebar',
            'value'       => 'full_width'
          )
        ),
        'std'         => 'big_thumbnail_right_sidebar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'blog_default'
      ),
      array(
        'label'       => 'Default Blog Header',
        'id'          => 'blog_header',
        'type'        => 'text',
        'desc'        => 'Write a title for your blog header',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'blog_default'
      ),array(
        'label'       => 'Default Blog Caption',
        'id'          => 'blog_caption',
        'type'        => 'text',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'blog_default'
      ),
      /* Social Settings*/
            array(
        'label'       => 'Twitter User Name',
        'id'          => 'twitter_user_name',
        'type'        => 'text',
        'desc'        => 'Twitter User Name that you want show latest tweet',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'Twitter Consumer Key',
        'id'          => 'consumer_key',
        'type'        => 'text',
        'desc'        => 'Your Twitter Consumer Key',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'Twitter Consumer Secret',
        'id'          => 'consumer_secret',
        'type'        => 'text',
        'desc'        => 'Your Twitter Consumer Secret',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'Twitter Access Token',
        'id'          => 'access_token',
        'type'        => 'text',
        'desc'        => 'Your Twitter Access Token',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'Twitter Access Token Secret',
        'id'          => 'access_token_secret',
        'type'        => 'text',
        'desc'        => 'Your Twitter Access Token Secret',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'Your Social Network',
        'id'          => 'your_social_network',
        'type'        => 'textblock-titled',
        'desc'        => '<p>Paste the full url you\'d like the image to link</p>',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'Facebook',
        'id'          => 'social_facebook',
        'type'        => 'text',
        'desc'        => 'Full Url',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'Flickr',
        'id'          => 'social_flickr',
        'type'        => 'text',
        'desc'        => 'Full Url',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'Dribbble',
        'id'          => 'social_dribbble',
        'type'        => 'text',
        'desc'        => 'Full Url',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'Google+',
        'id'          => 'social_google',
        'type'        => 'text',
        'desc'        => 'Full Url',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'LinkedIn',
        'id'          => 'social_linkedin',
        'type'        => 'text',
        'desc'        => 'Full Url',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'Pinterest',
        'id'          => 'social_pinterest',
        'type'        => 'text',
        'desc'        => 'Full Url',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'Digg',
        'id'          => 'social_digg',
        'type'        => 'text',
        'desc'        => 'Full Url',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'Skype',
        'id'          => 'social_skype',
        'type'        => 'text',
        'desc'        => 'You should write as skype:username',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'Twitter',
        'id'          => 'social_twitter',
        'type'        => 'text',
        'desc'        => 'Full Url',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'Vimeo',
        'id'          => 'social_vimeo',
        'type'        => 'text',
        'desc'        => 'Full Url',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'YouTube',
        'id'          => 'social_youtube',
        'type'        => 'text',
        'desc'        => 'Full Url',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'RSS',
        'id'          => 'social_rss',
        'type'        => 'text',
        'desc'        => 'Full Url',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'Stumbleupon',
        'id'          => 'social_stumbleupon',
        'type'        => 'text',
        'desc'        => 'Full Url',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
      array(
        'label'       => 'Yahoo',
        'id'          => 'social_yahoo',
        'type'        => 'text',
        'desc'        => 'Full Url',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),
    array(
        'label'       => 'Foursquare',
        'id'          => 'social_foursquare',
        'type'        => 'text',
        'desc'        => 'Full Url',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social'
      ),  
      /* Footer Section */  
       array(
        'label'       => 'Show Widget Section',
        'id'          => 'show_widget',
        'type'        => 'checkbox',
        'desc'        => 'Check if you want to show widget section',
        'choices'     => array(
          array(
            'label'       => 'Yes',
            'value'       => 'Yes'
          )
        ),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'footer_default'
      ),
      array(
        'label'       => 'Show Copyright Section',
        'id'          => 'show_copyright',
        'type'        => 'checkbox',
        'desc'        => 'Check if you want to show copyright section',
        'choices'     => array(
          array(
            'label'       => 'Yes',
            'value'       => 'Yes'
          )
        ),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'footer_default'
      ),
       array(
        'label'       => 'Copyright Text',
        'id'          => 'copyright_text',
        'type'        => 'textarea-simple',
        'desc'        => '',
        'std'         => 'Copyright © 2013 medicom. All rights reserved.',
        'rows'        => '10',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'footer_default'
      ),
      array(
        'label'       => 'Show Logo Area',
        'id'          => 'show_logo_area',
        'type'        => 'checkbox',
        'desc'        => 'Check if you want to show logo area',
        'choices'     => array(
          array(
            'label'       => 'Yes',
            'value'       => 'Yes'
          )
        ),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'footer_default'
      ),
       array(
        'label'       => 'Footer Logo Upload',
        'id'          => 'footer_logo_upload',
        'type'        => 'upload',
        'desc'        => 'Upload your logo image. (Best 256px x 80px)',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'footer_default'
      ),
       array(
        'label'       => 'Company Text',
        'id'          => 'company_text',
        'type'        => 'textarea-simple',
        'desc'        => '',
        'std'         => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. the Lorem Ipsum has been the industry\'s standard dummy text ever since the you. Lorem Ipsum is simply dummy text of the printing and typesetting industry. the Lorem Ipsum has been the industry\'s standard dummy text ever since the you.',
        'rows'        => '10',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'footer_default'
      )
      
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}