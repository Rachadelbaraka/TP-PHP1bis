<?php

class Vehicule {
    protected $marque;
    protected $modele;
    protected $annee;
    
    public function __construct($marque, $modele, $annee) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }
    
    public function getInfos() {
        return "Marque : $this->marque, Modèle : $this->modele, Année : $this->annee";
    }
    
    public function demarrer() {
        return "Le véhicule démarre.";
    }
}


class Voiture extends Vehicule {
    private $nombrePortes;
    private $typeCarburant;
    
    public function __construct($marque, $modele, $annee, $nombrePortes, $typeCarburant) {
     
        parent::__construct($marque, $modele, $annee);
        
       
        $this->nombrePortes = $nombrePortes;
        $this->typeCarburant = $typeCarburant;
    }
    
  
    public function getInfos() {
        return parent::getInfos() . ", Portes : $this->nombrePortes, Carburant : $this->typeCarburant";
    }
    
   
    public function klaxonner() {
        return "Bip Bip !";
    }
}


class Moto extends Vehicule {
    private $cylindree;
    
    public function __construct($marque, $modele, $annee, $cylindree) {
        parent::__construct($marque, $modele, $annee);
        $this->cylindree = $cylindree;
    }


    public function getInfos() {
        return parent::getInfos() . ", Cylindrée : $this->cylindree cc";
    }

    public function faireWheelie() {
        return "La moto fait un wheeling !";
    }
}


$voiture = new Voiture("Renault", "Clio", 2020, 5, "Essence");
$moto = new Moto("Yamaha", "MT-07", 2022, 689);


echo "<h2>Voiture</h2>";
echo $voiture->getInfos() . "<br>";
echo $voiture->demarrer() . "<br>";
echo $voiture->klaxonner() . "<br><br>";

echo "<h2>Moto</h2>";
echo $moto->getInfos() . "<br>";
echo $moto->demarrer() . "<br>";
echo $moto->faireWheelie();
