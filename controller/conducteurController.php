<?php

require_once "modele/conducteurManager.php";
class GameController {
    private $conducteurManager;


    public function __construct(){
        $this->conducteurManager = new conducteurManager();
        $this->conducteurManager->loadconducteur();        
    }

    public function displayconducteur(){
        $games = $this->conducteurManager->getconducteur();
        require_once "view/conducteur.view.php";
    }

    public function newconducteurForm(){
        require_once "view/new.conducteur.view.php";
    }

}


// $games = $gameManager->getGames();