<?php
/**
 * @package MRLRadioRock
 */

namespace RadioRock\Base;

class Activate
{
    //On lance la fonction à l'activation
    public static function activate(){
        flush_rewrite_rules();

        /*Si cette option est déjà enregistrer
        en base de donnée dans la table WP_Option
        alors on fais rien, sinon on update*/
        if (get_option( 'mrl_radio_rock_plugin' )){
            return;
        }

        $default = [];

        update_option( 'mrl_radio_rock_plugin', $default);
    }
}