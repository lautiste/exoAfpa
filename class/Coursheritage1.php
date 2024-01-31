Coursheritage1



//OUVRIER

class Employe extends Personne {
private float $salaire;
public function __construct(string $nom, string $prenom, DateTime $dateDeNaissance, string $genre, float $salaire)
{
parent::__construct($nom, $prenom, $dateDeNaissance,$genre);
$this->salaire = $salaire;
}
public function afficherSalaire(): float {
return $this->salaire;
}
}

class Ouvrier extends Employe {
    private $dateEntree;
    const SMIG = 2500;

    public function __construct($matricule, $nom, $prenom, $dateNaissance, $dateEntree) {
        parent::__construct($matricule, $nom, $prenom, $dateNaissance);
        $this->dateEntree = $dateEntree;
    }

    public function getSalaire() {
        $anciennete = date("Y") - date("Y", strtotime($this->dateEntree));
        $salaire = self::SMIG + ($anciennete * 100);
        return min($salaire, self::SMIG * 2);
    }

    public function __toString() {
        return parent::__toString() . ", Date d'entrée: $this->dateEntree";
    }
}
/////////////////-
<?php

class Ouvrier extends Employe {
    private $dateEntree;
    private $salaire;
    private $today; // Removed the initialization here
    public $SMIG = 2500;
    private $anciennete;

    public function __construct(string $matricule, string $nom, string $prenom, $dateNaissance, int $anciennete) {
        parent::__construct($matricule, $nom, $prenom, $dateNaissance);
        $this->anciennete = $anciennete;
        $this->today = new DateTime(); // Initialize $today with a new DateTime object
    }

    public function getSalaire() {
        $dateEntree = new DateTime($this->dateEntree); // Assuming $dateEntree is set elsewhere
        $diff = $this->today->diff($dateEntree); // Use $this->today for the current date

        // Calculate salary based on your formula
        $this->salaire = $this->SMIG + ($diff->y * 100); // Assuming you want to calculate salary based on years of difference
        return $this->salaire;
    }
}
///////////////////////////////////////////

//Cadre

<?php
class Cadre extends Employe {
    private $indice;

    public function __construct($matricule, $nom, $prenom, $dateNaissance, $indice) {
        parent::__construct($matricule, $nom, $prenom, $dateNaissance);
        $this->indice = $indice;
    }

    public function getSalaire() {
        switch($this->indice) {
            case 1: return 13000;
            case 2: return 15000;
            case 3: return 17000;
            case 4: return 20000;
            default: return 0;
        }
    }

    public function __toString() {
        return parent::__toString() . ", Indice: $this->indice";
    }
}
?>


//PATROUNE

<?php
class Patron extends Employe {
    private $pourcentage;
    static $CA;

    public function __construct($matricule, $nom, $prenom, $dateNaissance, $pourcentage) {
        parent::__construct($matricule, $nom, $prenom, $dateNaissance);
        $this->pourcentage = $pourcentage;
    }

    public function getSalaire() {
        return self::$CA * $this->pourcentage / 100;
    }

    public function __toString() {
        return parent::__toString() . ", Pourcentage: $this->pourcentage";
    }
}
?>
