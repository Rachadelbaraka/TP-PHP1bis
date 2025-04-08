
<?php
// TP PHP 1 // 

//Boucle for each //

// Exercice 1: 
$fruits = ["pomme", "banane", "orange", "fraise", "kiwi"];
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// Exercice 2: 
$etudiants = [
    "Martin" => 15,
    "Durand" => 12,
    "Petit" => 18
];
foreach ($etudiants as $nom => $note) {
    echo "$nom : $note <br>";
}

// Exercice 3: 
$etudiants = [
    ["nom" => "Martin", "note" => 15],
    ["nom" => "Durand", "note" => 12],
    ["nom" => "Petit", "note" => 18]
];
foreach ($etudiants as $etudiant) {
    echo $etudiant['nom'] . " : " . $etudiant['note'] . "<br>";
}
?>

