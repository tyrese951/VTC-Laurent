<?php

class Conducteur {


    private $id;
    private $prenom;
    private $nom;

    public function __construct($id,$prenom,$nom){

        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
        
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getprenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setprenom($title)
    {
        $this->prenom = $prenom;

        return $this;
    }


    /**
     * Get the value of nbPlayers
     */ 
    public function getnom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nbPlayers
     *
     * @return  self
     */ 
    public function setnom($nbPlayers)
    {
        $this->nom = $nom;

        return $this;
    }
}