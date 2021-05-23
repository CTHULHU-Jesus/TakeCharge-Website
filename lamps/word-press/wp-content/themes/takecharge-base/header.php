<!DOCTYPE html>
<html>
<head>
  <!-- WORDPRESS REQUIRED -->
  <?php wp_head(); ?> 
  <!-- SET UP SCSS SHEET -->
<?php
if( !is_customize_preview() ) {
  $style_sheet = get_stylesheet_uri();
  //$style_sheet = get_stylesheet_directory() . '/style.css';
  echo 
    '<link rel="stylesheet" type="text/css" 
    href="' . $style_sheet .  '" media="screen"/>';
} else {
  echo '<!-- Customizing css -->';
}
?>
</head>
<!-- WORDPRESS REQUIRED -->
<body <?php body_class(); ?>>
  <div class="menu-bar">
    <button class="menu-bar button">
      <div class="menu-bar dropdown">
        <ul>

<?php 
  $menu = walk_nav_menu_tree
    ( wp_get_nav_menu_items("Primary menu")
    , 1
    , array());
  if ( is_wp_error( $menu ) ) {
    echo "Please set the \"Primary menu\" in the theme customization.";
  } else {
    // @TODO
    // Figure out some way of takeing a html block that looks
    // like <li><a></a></li> and turn it
    // into <a><li></li></a>. Keeping all of the metadata and 
    // stuff.
    echo $menu;
  }
?>
        <ul>
      </div>
    </button>
  </div>
<!-- Banner 
  <div class="banner">
    <a href="#">
      <button class="transparent-button">
        <h2>Students or something</h2>
      </button>
    </a>
  </div> -->
