<?php
function additional_admin_color_schemes() {
  //Get the theme directory
  $theme_dir = get_template_directory_uri();
 
  //Ocean
  wp_admin_css_color( 'custom', __( 'custom' ),
    $theme_dir . '/admin-colors/custom/colors.css',
    array( '#009d88', '#00baa0', '#738e96', '#f2fcff' )
  );
}
add_action('admin_init', 'additional_admin_color_schemes');