<?php 
// navigation
function mytheme_theme_setup(){
    register_nav_menus( array(
        'header' => 'Header menu',
        'footer' => 'Footer menu'
    ));
}
add_action( 'after_setup_theme', 'mytheme_theme_setup' );

// featured image support for posts
add_theme_support( 'post-thumbnails' );

// custom footer widget
function cmsclass_widgets_init(){
    register_sidebar(array(
      'name'          => __( 'Footer Logo', 'cmsclass' ),
      'id'            => 'footer-logo',
      'description'   => __( 'This is a section for website logo', 'cmsclass' ),
      'before_widget' => '<div class="logo-widget">',
      'after_widget'  => '</div>'
    ));
    register_sidebar( array(
        'name'          => __( 'Footer Info', 'cmsclass' ),
        'id'            => 'footer-info',
        'description'   => __( 'This is a section for website info', 'cmsclass' ),
        'before_widget' => '<div class="info-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
      ));
    register_sidebar( array(
      'name'          => __( 'Footer Contact', 'cmsclass' ),
      'id'            => 'footer-contact',
      'description'   => __( 'This is a section for contact info', 'cmsclass' ),
      'before_widget' => '<div class="contact-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>',
    ));
    register_sidebar( array(
      'name'          => __( 'Footer Social Links', 'cmsclass' ),
      'id'            => 'footer-social-links',
      'description'   => __( 'This is a section for social links', 'cmsclass' ),
      'before_widget' => '<div class="social-links-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>',
    ));
  }
  add_action( 'widgets_init', 'cmsclass_widgets_init' );
?>