<?php
/*
Plugin Name: WordPress Base Plugin (Example)
Plugin URI:  https://www.recursivo.xyz
Description: WordPress Base Plugin Header Comment
Version:     1
Author:      Recursivo.xyz
Author URI:  https://www.recursivo.xyz
*/

//define constants of the plugin_name
define('WPBP_PLUGIN_PATH', plugin_dir_url( __FILE__ ));

//add the required class file
require('includes/class-base-plugin.php');

//this method initialize the class
function wp_base_plugin_init()
{
  //instantiate the plugin class
  $plugin = new Wp_Base_Plugin();

  //start the execution of the plugin class-base-project
  $plugin->run();
}

// Now that you have declared the function, you need to call it trough the init method of wordpress
// This allow you to start the plugin after all the wordpress core functions are loaded,
// With this, you will not have problems calling methods that does not exist.
add_action( 'init', 'wp_base_plugin_init' );

//Done!
?>
