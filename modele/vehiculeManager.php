<?php
 require_once "Manager.php";
 require_once "vehicule.php";

class VehiculeManager extends Manager {

    private $vehicules;

    public function addvehicule($vehicule){
        $this->vehicules[] = $vehicule;
    }

    public function getvehicule(){
        return $this->vehicules;
    }

    public function loadvehicule(){
        $req = $this->getBdd()->prepare("SELECT * FROM vehicule");
        $req->execute();
        $myUsers = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($myvehicules as $vehicule){
            $v = new Vehicule($vehicule['id_vehicule'],$vehicule['marque'],$vehicule['modele'],$vehicule['couleur'],$vehicule['immatriculation']);
            $this->addUvehicule($v);
        }

    }



}