<?php
require_once("/opt/lampp/htdocs/coursPhp/exo-PHP/class/Employe.php");


class Cadre extends Employe {
    
    private float $salaire;
    private float $indice;

    public function __construct($matricule, $nom, $prenom, $dateNaissance, $indice) {
        parent::__construct($matricule, $nom, $prenom, $dateNaissance);
        $this->indice = $indice;
    }
    public function getSalaire(){
        switch ($indice) {
            case 1:
                echo "salaire mensuel 13000 €";
                break;
            case 2:
                echo "salaire mensuel 15000 €";
                break;
            case 3:
                echo "salaire mensuel 17000 €";
                break;
            case 4:
                echo "salaire mensuel 20000 €";
        }
    }
}