<?php

require_once "modele/ConducteurManager.php";
class ConducteurController {
    private $conducteurManager;


    public function __construct(){
        $this->conducteurManager = new ConducteurManager();
        $this->conducteurManager->loadConducteurs();        
    }

    public function displayconducteur(){
        $games = $this->conducteurManager->getconducteurs();
        require_once "view/conducteur.view.php";
    }

    public function newGameForm(){
        require_once "view/new.conducteur.view.php";
    }

    public function newConducteurValidation(){
      $this->conducteurManager->newConducteurDB($_POST['prenom'],$_POST['nom']);
      header('Location:' . URL . "conducteurs" );
   
    }

    public function editGameForm($id){
            echo $id;
    }

}


