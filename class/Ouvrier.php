<?php   
require_once("/opt/lampp/htdocs/coursPhp/exo-PHP/class/Employe.php");

class Ouvrier extends Employe {
    private $dateEntree;
    private float $salaire;
    private $today;
    public static $SMIG = 2500;
    private $anciennete;

    public function __construct(string $matricule,string $nom,string $prenom, $dateNaissance,int $anciennete, ) 
        {
            parent::__construct($matricule, $nom, $prenom,$dateNaissance);
            $this->anciennete = $anciennete ;
            $this->today = new DateTime();
            }

    public function getSalaire() {
         $diff = date_diff($dateEntree, $today);
         $diff->y;

         $salaire = self::$SMIG + ($diff)*100;
         return $salaire;
         echo $salaire;
}
}