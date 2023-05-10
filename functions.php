<?php
require_once dirname( __FILE__ ) . '/lib/tohid-activation.php';
require_once dirname( __FILE__ ) . '/inc/tohid-demo-import.php';

// Theme setup

function tohid_setup(){

  add_theme_support('title-tag');
  add_theme_support('post-thumbnails', array('post', 'sliders', 'teams', 'testimonials','portfolios','gallery'));
  load_theme_textdomain('tohid', get_template_directory() . '/languages');

  register_nav_menus(array(
    'primary-menu' => __('Primary Menu', 'tohid'),
  ));


}
add_action('after_setup_theme', 'tohid_setup');


// All asset style and scripts

function tohid_assets() {

  // style
  wp_enqueue_style( 'font-poppins', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'font-awesomes', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css', 'all' );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'magnific-popup', get_template_directory_uri() .'/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'owl-carousel', get_template_directory_uri() .'/assets/css/owl.carousel.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'main-style', get_template_directory_uri() .'/assets/css/style.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'responsive-css', get_template_directory_uri() .'/assets/css/responsive.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'style-theme', get_stylesheet_uri() );


  // js
  wp_enqueue_script( 'proper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'imageloaded', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'tohid_assets' );



function acf_css(){
  ?>
  <style>
    .header-top{
      background-color:<?php the_field('header_background_color', 'option'); ?>;
    } 
  </style>
  
<?php
}
add_action('wp_head', 'acf_css');


// Register the sidebar
function register_tohid_sidebar() {
  register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'tohid' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'tohid' ),
		'before_widget' => '<div class="single-sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

  // Footer Sidebar
  register_sidebar( array(
		'name'          => __( 'Footer Logo', 'tohid' ),
		'id'            => 'footer-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'tohid' ),
		'before_widget' => '<div class="single-footer footer-logo">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
  register_sidebar( array(
		'name'          => __( 'Footer Quick Link', 'tohid' ),
		'id'            => 'footer-2',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'tohid' ),
		'before_widget' => '<div class="single-footer">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
  register_sidebar( array(
		'name'          => __( 'Footer Latest Post ', 'tohid' ),
		'id'            => 'footer-3',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'tohid' ),
		'before_widget' => '<div class="single-footer">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'register_tohid_sidebar' );


// Theme Option
if( function_exists('acf_add_options_page') ) {
    
  acf_add_options_page(array(
      'page_title'    => 'Thema Option', 'tohid',
      'menu_title'    => 'Theme Option', 'tohid',
      'menu_slug'     => 'theme-option',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));
  
  acf_add_options_sub_page(array(
      'page_title'    => 'Header Setting', 'tohid',
      'menu_title'    => 'Header', 'tohid',
      'parent_slug'   => 'theme-option',
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'About Section', 'tohid',
      'menu_title'    => 'About', 'tohid',
      'parent_slug'   => 'theme-option',
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'FAQ Section', 'tohid',
      'menu_title'    => 'FAQ', 'tohid',
      'parent_slug'   => 'theme-option',
  ));
  acf_add_options_sub_page(array(
      'page_title'    => 'CTA Section', 'tohid',
      'menu_title'    => 'CTA', 'tohid',
      'parent_slug'   => 'theme-option',
  ));
  acf_add_options_sub_page(array(
      'page_title'    => 'Contact Section', 'tohid',
      'menu_title'    => 'Contact', 'tohid',
      'parent_slug'   => 'theme-option',
  ));
  
  acf_add_options_sub_page(array(
      'page_title'    => 'Footer Settings','tohid',
      'menu_title'    => 'Footer', 'tohid',
      'parent_slug'   => 'theme-option',
  ));
  
}



function move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'move_comment_field' );

/**
 * Comment Form Placeholder Author, Email, URL
 */
function placeholder_author_email_url_form_fields($fields) {
  $replace_author = __('Your Name', 'tohid');
  $replace_email = __('Your Email', 'tohid');
  $replace_url = __('Your Website', 'tohid');
  
  $fields['author'] = '<p class="comment-form-author">' . '<label for="author">' . __( 'Name', 'tohid' ) . '</label> ' . ( '<span class="required">*</span>' ) .
                  '<input id="author" name="author" type="text" placeholder="'.$replace_author.'" /></p>';
                  
  $fields['email'] = '<p class="comment-form-email"><label for="email">' . __( 'Email', 'tohid' ) . '</label> ' .
  ( '<span class="required">*</span>' ) .
  '<input id="email" name="email" type="text" placeholder="'.$replace_email.'"  /></p>';
  
  $fields['url'] = '<p class="comment-form-url"><label for="url">' . __( 'Website', 'tohid' ) . '</label>' .
  '<input id="url" name="url" type="text" placeholder="'.$replace_url.'"  /></p>';
  
  return $fields;
}
add_filter('comment_form_default_fields','placeholder_author_email_url_form_fields');


/**
* Comment Form Placeholder Comment Field
*/
function placeholder_comment_form_field($fields) {
  $replace_comment = __('Your Comment', 'tohid');
   
  $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
  '</label><textarea id="comment" name="comment" cols="45" rows="8" placeholder="'.$replace_comment.'" aria-required="true"></textarea></p>';
  
  return $fields;
}
add_filter( 'comment_form_defaults', 'placeholder_comment_form_field' );

