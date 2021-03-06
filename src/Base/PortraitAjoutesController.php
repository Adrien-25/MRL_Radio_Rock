<?php
/**
 * @package MRLRadioRock
 */

namespace RadioRock\Base;

use \RadioRock\API\SettingsApi;
use \RadioRock\Base\BaseController;
use \RadioRock\API\Callbacks\AdminCallbacks;

class PortraitAjoutesController extends BaseController
{
    public $settings;
    public $callbacks;
    public $subpages = array();

    public $custom_post_types = [];

    public function register()
    {
        
        if ( ! $this->activated( 'radio_rock_portraits_ajoutes' ) ) return;

        $this->callbacks = new AdminCallbacks;
        $this->settings = new SettingsApi;
        $this->setSubpages();
        $this->settings->addSubPages($this->subpages)->register();
    }

    public function setSubpages(){
        $this->subpages = [
            [
                'parent_slug' => 'mrl_radio_rock_plugin',
                'page_title' => 'Portrait à ajoutés',
                'menu_title' => 'Portrait à ajoutés',
                'capability' => 'manage_options',
                'menu_slug' => 'radio_rock_portraits_ajoutes',
                'callback' => [$this->callbacks, 'adminPortraitAjoutes']
            ]
        ];
    }
}