<?php
require_once 'Vehicule.php';

class Voiture extends Vehicule {
    private $nombrePortes;
    private $typeCarburant;

    public function __construct($marque, $modele, $annee, $nombrePortes, $typeCarburant) {
        parent::__construct($marque, $modele, $annee);
        $this->nombrePortes = $nombrePortes;
        $this->typeCarburant = $typeCarburant;
    }

    public function getInfos() {
        return parent::getInfos() . " - $this->nombrePortes portes - $this->typeCarburant";
    }

    public function klaxonner() {
        return "Tut tut !";
    }
}

// Exemple
$v = new Voiture("Peugeot", "208", 2022, 5, "Essence");
echo $v->getInfos() . "<br>";
echo $v->demarrer() . "<br>";
echo $v->klaxonner();
?>
