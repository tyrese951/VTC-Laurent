<?php
 require_once "Manager.php";
 require_once "vehicule.php";

class VehiculeManager extends Manager {

    private $vehicules;

    public function addUser($vehicule){
        $this->vehicules[] = $vehicule;
    }

    public function getvehicules(){
        return $this->vehicules;
    }

    public function loadvehicules(){
        $req = $this->getBdd()->prepare("SELECT * FROM vehicule");
        $req->execute();
        $myUsers = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($myUsers as $user){
            $v = new User($user['id_vehicule'],$user['marque'],$user['modele'],$user['couleur'],$user['immatriculation']);
            $this->addUser($v);
        }

    }

    


}