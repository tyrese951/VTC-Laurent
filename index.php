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

        case 'games': 
            if(empty($url[1])){
                $conducteurController->displayconducteur();
            }elseif($url[1] == "add"){
                $conducteurController->newconducteurForm();
            }elseif($url[1] == "gvalid"){
                $conducteurController->newconducteurValidation();
            }elseif($url[1] == "edit"){
                $conducteurController->editconducteurForm($url[2]); 
            }elseif($url[1] == "delete"){
                echo "Supprimer un conducteur";
            }
        break;

        
        case 'users': require_once "view/users.view.php";
        break;
    }
}












