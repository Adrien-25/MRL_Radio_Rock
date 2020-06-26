<?php
/**
 * @package MRLRadioRock
 * 
 * Ici on a tous les callbacks appelé dans les fichiers contrôleur du dossier Base, représentant des pages et/ou sous pages affiché dans le tableau de bord.
 * Chaque fonction reprèsente un template correspondant aux pages/sous-pages lié au tableau de bord.
 */

namespace RadioRock\API\Callbacks;

use \RadioRock\Base\BaseController;

class AdminCallbacks extends BaseController
{
    public function adminDashboard(){
        return require_once( "$this->plugin_path/templates/admin/admin.php");
    }
    
    public function adminPortraitAjoutes(){
        return require_once( "$this->plugin_path/templates/admin/portrait-ajoutes.php");
    }

    public function adminActualites(){
        return require_once( "$this->plugin_path/templates/admin/actualites.php");
    }

    public function adminAventure(){
        return require_once( "$this->plugin_path/templates/admin/aventure.php");
    }
}
