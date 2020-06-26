<?php
/**
 * @package MRLRadioRock
 */

namespace RadioRock\Base;

class BaseController
{

    public $plugin_path;
    public $plugin_url;
    public $plugin;
    public $managers_admin = array();

    public function __construct(){
        $this->plugin_path = plugin_dir_path( dirname( __FILE__, 2 ) );
        $this->plugin_url = plugin_dir_url( dirname( __FILE__, 2 ) );
        $this->plugin = plugin_basename( realpath(__DIR__ . '/../..') );// link settings marche pas la con de ses mort

        /*Représente les différentes sous-pages qui vont servir à créer les checkbox
        La clés représente l'id et la valeur le titre de la sous-page*/
        $this->managers_admin = [
            'radio_rock_actualites' => 'Actualités',
            'radio_rock_portraits_ajoutes' => 'Portrait Ajoutés',
            'radio_rock_aventure' => 'L\'Aventure',
            'radio_rock_son_histoire' => 'Son Histoire'
        ];
    }

    //Vérification dans la base de donné si la sous page a été checké
    public function activated(  string $key )
    {
        $option = get_option('mrl_radio_rock_plugin');
        return isset($option[$key]) ? $option[$key] : false;

    }
}
;