<?php
define("URL" , str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http") . 
"://".$_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ));

require_once "controller/conducteurController.php";
$conducteurController = new conducteurController();

if(empty($_GET['page'])){
    require_once "view/home.view.php";
}else{
    $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL) );
    switch ($url[0]) {
        case 'accueil': require_once "view/home.view.php";
        break;


        case 'Conducteur': 
            if(empty($url[1])){
                $conducteurController->displayConducteur();
            }elseif($url[1] == "add"){
                $conducteurController->newConducteurForm();
            }elseif($url[1] == "gvalid"){
                $conducteurController->newConducteurValidation();
            }elseif($url[1] == "edit"){
                $conducteurController->editConducteurForm($url[2]); 
            }elseif($url[1] == "delete"){
                // echo "Supprimer un conducteur";
            }
            break;
            
            case 'conducteur': require_once "view/conducteur.view.php";

        case 'Vehicule': 
            if(empty($url[1])){
                $vehiculeController->displayVehicule();
            }elseif($url[1] == "add"){
                $vehiculeController->newVehiculeForm();
            }elseif($url[1] == "gvalid"){
                $vehiculeController->newVehiculeValidation();
            }elseif($url[1] == "edit"){
                $vehiculeController->editvehiculeForm($url[2]); 
            }elseif($url[1] == "delete"){
                // echo "Supprimer un vehicule";
            }
        break;
        // case 'vehicule': require_once "view/vehicule.view.php";
        // break;
        
    
    case 'association_vehicule_conducteur': 
        if(empty($url[1])){
            $association_vehicule_conducteurController->displayassociation_vehicule_conducteur();
        }elseif($url[1] == "add"){
            $association_vehicule_conducteurController->newassociation_vehicule_conducteurForm();
        }elseif($url[1] == "gvalid"){
            $association_vehicule_conducteurController->newassociation_vehicule_conducteurValidation();
        }elseif($url[1] == "edit"){
            $association_vehicule_conducteurController->editassociation_vehicule_conducteurForm($url[2]); 
        }elseif($url[1] == "delete"){
            // echo "Supprimer l'association";
        }
    break;
    // case 'association_vehicule_conducteur': require_once "view/association_vehicule_conducteur.view.php";
    // break;
}






}

