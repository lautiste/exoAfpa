<?php
abstract class Employe {
    protected $matricule;
    protected $nom;
    protected $prenom;
    protected $dateNaissance;

    public function __construct($matricule, $nom, $prenom, $dateNaissance) {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function __toString() {
        return 
        "Matricule: $this->matricule,
         Nom: $this->nom, 
         Prénom: $this->prenom,
         Date de Naissance: $this->dateNaissance";
    }

    abstract public function getSalaire();
}

