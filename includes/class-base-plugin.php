<?php

// Class name should be capitalized words separated by underscores
class Wp_Base_Plugin
{
    /**** Plugin properties ****/

    protected $plugin_name;
    protected $version;


    /**** Custom Plugin Properties ****/

    protected $service_url_endpoint;


    /**** Plugin Constructor and Initializer(Run) ****/

    //The constructor off the class. Initialize all the basics components of the plugin.
    public function __construct()
    {
      //Initialize all the basics components of the plugin
      $this->plugin_name = 'base-plugin';
		  $this->version = '1.0.0';

      //set the variable for the example endpoint. you can use a option plugin to store it and change it later in the admin page
      $this->service_url_endpoint = "http://servicedomain.com/api/elements";
    }

    //The run method starts the execution of the plugin. Usually, calls all the following methods needed.
    public function run()
    {
      //call your methods here
      $this->add_actions();
      $this->add_filters();
    }

    /**** Plugin methods ****/

    private function add_actions()
    {
      //put your actions here

      //As an example, we will load a custom style and script for the frontend
      add_action( 'wp_enqueue_scripts', array($this,'themeslug_enqueue_style'));
      add_action( 'wp_enqueue_scripts', array($this,'themeslug_enqueue_script'));
    }

    private function add_filters()
    {
      //put your filters here

    }

    /**** Hooks methods ****/

    //enqueue a style
    function themeslug_enqueue_style() {
    	wp_enqueue_style( 'my-plugin', WPBP_PLUGIN_PATH.'public/css/style.css', false );
    }

    //enqueue a script
    function themeslug_enqueue_script() {
    	wp_enqueue_script( 'my-plugin', WPBP_PLUGIN_PATH.'public/js/script.js', false );
    }
}

?>
