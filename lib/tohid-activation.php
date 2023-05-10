<?php
// Tgm activation
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'tohid_tgm_plugins_active' );

function tohid_tgm_plugins_active(){
    $plugins = array(
      array(
        'name'        => __('One Click Demo Import', 'tohid'),
        'slug'        => 'one-click-demo-import',
        'required'    => true,
      ),
      array(
        'name'        => __('Widget Importer & Exporter', 'tohid'),
        'slug'        => 'widget-importer-exporter',
        'required'    => true,
      ),
      array(
        'name'        => __('Contact Form 7', 'tohid'),
        'slug'        => 'contact-form-7',
        'required'    => true,
      ),
      array(
        'name'        => __('Advanced Custom Fields: Font Awesome','tohid'),
        'slug'        => 'advanced-custom-fields-font-awesome',
        'required'    => true,
      ),
      array(
        'name'        => __('Tohid Custom Post', 'tohid'),
        'slug'        => 'tohid_custom_post',
        'source'      => get_template_directory_uri() . '/lib/plugins/tohid-custom-post.zip',
        'required'    => true,
      ),
      array(
        'name'        => __('Advance Custom Fields', 'tohid'),
        'slug'        => 'advanced-custom-fields-pro',
        'source'      => get_template_directory_uri() . '/lib/plugins/advanced-custom-fields-pro.zip',
        'required'    => true,
      ),
    );
  
    $config = array(
      'id'           => 'tohid-plugin-active',
      'menu'         => 'Tohid Plugin Activation',
      'parent_slug'  => 'themes.php',
      'has_notices'  => true,
    );
    
    tgmpa( $plugins, $config );
  
  }
  