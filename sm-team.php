<?php 
/*
Plugin Name: SM Team
Plugin URI:https://wordpress.org/plugins/sm-team/
Author:Mahabubur Rahman
Author URI:http://mahabub.me
Description: A wordpress plugin for manage and display team member list.
Version:2.0.0
*/



if ( ! defined('ABSPATH')) exit;

/**
* 
*/
class SMTeam
{
  
  function __construct()
  {
    define( 'SM_TEAM_PATH', plugin_dir_path( __FILE__ ) );
    define( 'SM_TEAM_URL', plugin_dir_url( __FILE__ ));


    require(SM_TEAM_PATH.'includes/class/sm-team-post-type.php'); 
    require(SM_TEAM_PATH.'includes/class/sm-team-post-meta.php');

    require(SM_TEAM_PATH.'includes/sm-team-settings.php'); 
    require(SM_TEAM_PATH.'includes/sm-team-shortcoads.php'); 


    add_action( 'wp_enqueue_scripts', array($this,'sm_team_scripts_enqueue' ));
    add_action( 'admin_enqueue_scripts', array($this,'sm_team_scripts_enqueue' ));
  }


  public function sm_team_scripts_enqueue() {
      wp_register_script( 'bootstrap-js', SM_TEAM_URL.'/js/bootstrap.min.js', array('jquery'), NULL, true );
      wp_register_style( 'bootstrap-css', SM_TEAM_URL.'/css/bootstrap.wp.css', false, '1.0.0', 'all' );
      wp_register_style( 'custom-css', SM_TEAM_URL.'/css/custom.css', false, null, 'all' );
      wp_register_style( 'font-awesome-css', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.css", false, null, 'all' );
      wp_enqueue_script( 'bootstrap-js' );
      wp_enqueue_style( 'bootstrap-css' );
      wp_enqueue_style( 'custom-css' );
      wp_enqueue_style( 'font-awesome-css' );

      do_action('sm_team_action_scripts_enqueue');
  }
}

new SMTeam();