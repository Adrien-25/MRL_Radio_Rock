<?php
/**
 * @package MRLRadioRock
 */

namespace RadioRock\Base;

use \RadioRock\Base\BaseController;

class Enqueue extends BaseController
{

    public function register(){
        add_action( 'admin_enqueue_scripts', [ $this, 'enqueue' ] );//Envoi le JS et CSS
    }

    function enqueue(){
        wp_enqueue_style('radio-rock-style', $this->plugin_url . 'assets/CSS/radio-rock-style.css', __FILE__ );
        wp_enqueue_script('radio-rock-script', $this->plugin_url . 'assets/JS/radio-rock-script.js', __FILE__ );
    }
}