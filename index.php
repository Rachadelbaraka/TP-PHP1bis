
<?php
// TP PHP 1 // 

//bouclefor// 

echo "<h3>Exercice 1 : Afficher les nombres de 1 à 10</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<h3>Exercice 2 : Somme des nombres de 1 à 100</h3>";
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo "La somme est : $sum";

   echo "<h3>Exercice 3 : Table de multiplication de 5</h3>";
$nombre = 5;
for ($i = 1; $i <= 10; $i++) {
    echo "$nombre x $i = " . ($nombre * $i) . "<br>";
}
// boucle for each // 

echo "<h3>Exercice 1 : Tableau simple</h3>";
$fruits = ["pomme", "banane", "orange", "fraise", "kiwi"];
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

echo "<h3>Exercice 2 : Tableau associatif</h3>";
$notes = ["Maths" => 15, "Français" => 12, "Histoire" => 14];
foreach ($notes as $matiere => $note) {
    echo "$matiere : $note/20<br>";
}

echo "<h3>Exercice 3 : Tableau multidimensionnel</h3>";
$etudiants = [
    ["nom" => "Martin", "note" => 15],
    ["nom" => "Durand", "note" => 12],
    ["nom" => "Petit", "note" => 18]
];
foreach ($etudiants as $etudiant) {
    echo $etudiant["nom"] . " a eu " . $etudiant["note"] . "/20<br>";
}
?>
