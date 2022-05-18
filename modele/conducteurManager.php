<?php
  require_once "Manager.php";
 require_once "conducteur.php";

class ConducteurManager extends Manager {

    private $conducteurs;

    public function addConducteur($conducteur){
        $this->conducteurs[] = $conducteur;
    }

    public function getConducteurs(){
        return $this->conducteurs;
    }

    public function loadConducteurs(){
        $req = $this->getBdd()->prepare("SELECT * FROM conducteur");
        $req->execute();
        $myconducteurs = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($myconducteurs as $conducteur){
            $c = new Conducteur($conducteur['id_conducteur'],$conducteur['prenom'],$conducteur['nom']);
            $this->addConducteur($c);
        }

    }
    
    public function newConducteurDB($prenom,$nom){
        $req = "INSERT INTO conducteurs (prenom, nom) VALUES (:prenom, :nom)";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":prenom",$prenom, PDO::PARAM_STR);
        $statement->bindValue(":nom",$nom, PDO::PARAM_STR);
        $result = $statement->execute();
        $statement->closeCursor();

        if ($result) {
            $c = new Conducteur($this->getBdd()->lastInsertId(),$prenom,$nom);
            $this->addConducteur($c);
        }
        
    }


}