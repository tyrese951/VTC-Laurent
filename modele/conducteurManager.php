<?php
 require_once "Manager.php";
 require_once "conducteur.php";

class GameManager extends Manager {

    private $conducteurs;

    public function addGame($conducteur){
        $this->conducteurs[] = $conducteur;
    }

    public function getconducteurs(){
        return $this->conducteurs;
    }

    public function loadconducteurs(){
        $req = $this->getBdd()->prepare("SELECT * FROM games");
        $req->execute();
        $myGames = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($myGames as $game){
            $g = new Game($game['id'],$game['title'],$game['nb_players']);
            $this->addGame($g);
        }

    }


}