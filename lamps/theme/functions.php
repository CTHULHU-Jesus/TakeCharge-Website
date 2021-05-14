<?php
  $another_args = array(
    'default-color'      => '0000ff',
    'default-image'      => get_template_directory_uri() . '/images/lines.png',
    'default-repeat'     => 'repeat',     
    'default-size'       => '25%, auto;'
  );
  // Add support for custom backgrounds
  add_theme_support( 'custom-background', $another_args);
?>
