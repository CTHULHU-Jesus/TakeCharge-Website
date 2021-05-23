<?php

// INCLUDE
require_once(get_stylesheet_directory() . '/scssphp/scss.inc.php');

// OPTIONS
add_action('customize_register', function($wp_customize) {
  $wp_customize->add_section('Color Settings', [
    'title' => __('Color Settings', 'txtdomain'),
    'priority' => 1
  ]);

  $wp_customize->add_setting('theme-primary', ['default' => '#FF851A']);
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme-primary', [
    'section' => 'Color Settings',
    'label' => __('Primary theme color', 'txtdomain'),
    'priority' => 3
  ]));
 
  $wp_customize->add_setting('theme-secondary', ['default' => '#82ECFC']);
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme-secondary', [
    'section' => 'Color Settings',
    'label' => __('Secondary theme color', 'txtdomain'),
    'priority' => 4
  ]));
 
  $wp_customize->add_setting('theme-secondaryDark', ['default' => '#0FA7FF']);
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme-secondaryDark', [
    'section' => 'Color Settings',
    'label' => __('Secondary dark theme color', 'txtdomain'),
    'priority' => 5
  ]));

  $wp_customize->add_setting('theme-white', ['default' => '#FFFFFF']);
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme-white', [
    'section' => 'Color Settings',
    'label' => __('White theme color', 'txtdomain'),
    'priority' => 6
  ]));

  $wp_customize->add_setting('theme-lightGrey', ['default' => '#F0F0F0']);
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme-lightGrey', [
    'section' => 'Color Settings',
    'label' => __('Light grey theme color', 'txtdomain'),
    'priority' => 7
  ]));

  $wp_customize->add_setting('theme-darkGrey', ['default' => '#D0D0D0']);
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme-darkGrey', [
    'section' => 'Color Settings',
    'label' => __('Dark grey theme color', 'txtdomain'),
    'priority' => 8
  ]));

  $wp_customize->add_setting('theme-textWhite', ['default' => '#FFFFFF']);
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme-textWhite', [
    'section' => 'Color Settings',
    'label' => __('White text theme color', 'txtdomain'),
    'priority' => 9
  ]));

  $wp_customize->add_setting('theme-textBlack', ['default' => '#000000']);
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme-textBlack', [
    'section' => 'Color Settings',
    'label' => __('Black text theme color', 'txtdomain'),
    'priority' => 10
  ]));
 

  $wp_customize->add_section('Background Settings', [
    'title' => __('Background Settings', 'txtdomain'),
    'priority' => 2
  ]);
/*
  $wp_customize->add_setting('theme-backgroundImage', 
    ['default' => get_stylesheet_directory() . '/images/lines.png']);
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'theme-backgroundImage', [
    'section' => 'Background Settings',
    'label' => __('Background Image', 'txtdomain'),
    'priority' => 1
  ]));
*/


/* 
  $wp_customize->add_setting('theme-text-size', ['default' => '12']);
  $wp_customize->add_control('theme-text-size', [
    'section' => 'Color Settings',
    'label' => __('Text size', 'txtdomain'),
    'type' => 'number',
    'priority' => 4,
    'input_attrs' => ['min' => 8, 'max' => 20, 'step' => 1]
  ]);
*/
});

// FUNCTIONS
function set_variables() {
  return
  [
    // BACKGROUND
    /* 'backgroundImage'        => get_theme_mod('theme-backgroundImage', 'images/lines.png'),
    'backgroundSize'         => get_theme_mod('theme-backgroundSize', '25') . '%',
    'backgroundGradiantStart'=> get_theme_mod('theme-backgroundGradiantStart', '25') . '%',
     */
    // COLORS
    'primary'                => get_theme_mod('theme-primary'       , '#FF851A'),
    'secondary'              => get_theme_mod('theme-secondary'     , '#82ECFC'),
    'secondaryDark'          => get_theme_mod('theme-secondaryDark' , '#0FA7FF'),
    'white'                  => get_theme_mod('theme-white'         , '#FFFFFF'),
    'lightGrey'              => get_theme_mod('theme-lightGrey'     , '#F0F0F0'),
    'darkGrey'               => get_theme_mod('theme-darkGrey'      , '#D0D0D0'),
    'textWhite'              => get_theme_mod('theme-textWhite'     , '#FFFFFF'),
    'textBlack'              => get_theme_mod('theme-textBlack'     , '#000000')
  ];
}

// UPDATE SETTINGS

if (is_customize_preview()) {
	add_action('wp_head', function() {
		$compiler = new ScssPhp\ScssPhp\Compiler();
 
		$source_scss = get_stylesheet_directory() . '/style.scss';
		$scssContents = file_get_contents($source_scss);
		$import_path = get_stylesheet_directory();
		$compiler->addImportPath($import_path);
 
		$variables = set_variables();
		$compiler->setVariables($variables);
 
		$css = $compiler->compile($scssContents);
		if (!empty($css) && is_string($css)) {
			echo '<style type="text/css">' . $css . '</style>';
		}
	});
}

// SAVE SETTINGS
// posiple hooks:
// customize_save
// customize_save_after
// customize_register
// wp_head
add_action('customize_save_after', function() {
  $compiler = new ScssPhp\ScssPhp\Compiler();
 
  $source_scss = get_stylesheet_directory() . '/style.scss';
  $scssContents = file_get_contents($source_scss);
  $import_path = get_stylesheet_directory();
  $compiler->addImportPath($import_path);

   $target_css = get_stylesheet_directory() . '/style.css';

  $variables = set_variables();	
  $compiler->setVariables($variables);
 
  $css = $compiler->compile($scssContents);
  $css = $css . "\n //Did Work";
  if (!empty($css) && is_string($css)) {
    file_put_contents($target_css, $css);
    echo "<!-- DID WORK " . file_get_contents($target_css) . "-->";
  } 
});

?>
