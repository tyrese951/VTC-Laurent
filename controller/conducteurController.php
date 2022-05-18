<?php

require_once "modele/ConducteurManager.php";
class ConducteurController {
    private $conducteurManager;


    public function __construct(){
        $this->conducteurManager = new ConducteurManager;
        $this->conducteurManager->loadConducteur();
    }

    public function displayConducteurs(){
        $conducteurs = $this->conducteurManager->getConducteurs();
        require_once "view/conducteurs.view.php";
    }

    public function newConducteurForm(){
        require_once "view/new.Conducteur.view.php";
    }

    public function newConducteurValidation(){
       $this->conducteurManager->newConducteurDB($_POST['prenom'],$_POST['nom']);
       header('Location:'. URL . "conducteurs");
    }

    public function editConducteurForm($id){
        $conducteur = $this->conducteurManager->getConducteurById($id);
        require_once "view/edit.conducteur.view.php";
    }
    
   
    public function deleteConducteur($id){
        $this->ConducteurManager->deleteConducteurBD($id);
        header("Location: " . URL . "conducteurs");
    }



}


