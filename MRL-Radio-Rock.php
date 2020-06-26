<?php
/**
 * @package MRLRadioRock
 */

/*
Plugin Name: MRL Radio Rock
Description: Gestion de la parti Radio Rock.
Version: 1.0.0
Author: MRL
*/

//check si le plugin est utilisé par wordpress
if( ! defined('ABSPATH') ){
    die( "You're wrong" );
}

//check si l'autoload est ne place pour les namespace
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}


//activation et deactivation du plugin

function activate_mrl_radio_rock(){
    RadioRock\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_mrl_radio_rock' );

function deactivate_mrl_radio_rock(){
    RadioRock\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_mrl_radio_rock' );


//initialisation du Plugin
if (class_exists( 'RadioRock\\Init' ) ) {
    RadioRock\Init::register_services();
}
