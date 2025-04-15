<?php
$host = 'localhost';
$dbname = 'tp_php';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    echo "Connexion réussie !<br>";

    // Exercice 1 : Insertion
    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, age) VALUES (?, ?)");
    $stmt->execute(['Alice', 25]);
    echo "Nouvel utilisateur inséré avec l'ID : " . $pdo->lastInsertId() . "<br>";

    // Exercice 2 : Sélection
    $stmt = $pdo->query("SELECT * FROM utilisateurs WHERE age > 30");
    foreach ($stmt as $user) {
        echo $user['nom'] . " - " . $user['age'] . " ans<br>";
    }
    // Exercice 3 : Mise à jour
    $stmt = $pdo->prepare("UPDATE utilisateurs SET age = ? WHERE id = ?");
    $stmt->execute([35, 1]);
    echo "Mise à jour : " . $stmt->rowCount() . " ligne(s)<br>";

  
    $stmt = $pdo->prepare("DELETE FROM utilisateurs WHERE id = ?");
    $stmt->execute([2]);
    echo "Suppression : " . $stmt->rowCount() . " ligne(s)<br>";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
