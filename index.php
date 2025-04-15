<?php
class Personne {
    private $nom;
    private $prenom;
    private $age;

    public function __construct($nom, $prenom, $age) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    public function sePresenter() {
        return "Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans.";
    }

    public function estMajeur() {
        return $this->age >= 18 ? "Je suis majeur." : "Je ne suis pas majeur.";
    }
}


$p = new Personne("EL BARAKA", "Rachad", );
echo $p->sePresenter() . "<br>";
echo $p->estMajeur();
