
<?php
// TP PHP 1 // 

// Boucle for //

// Exercice 1 //

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