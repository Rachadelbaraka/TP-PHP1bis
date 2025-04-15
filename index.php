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
        return "$this->marque $this->modele ($this->annee)";
    }

    public function demarrer() {
        return "Le véhicule démarre.";
    }
}

