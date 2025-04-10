# TP-PHP1bis
git add bouclefor.php
git commit -m "Exercices boucle for"
git push -u origin bouclefor

    // Exercice 3 : Mise à jour
    $stmt = $pdo->prepare("UPDATE utilisateurs SET age = ? WHERE id = ?");
    $stmt->execute([35, 1]);
    echo "Mise à jour : " . $stmt->rowCount() . " ligne(s)<br>";

    // Exercice 4 : Suppression
    $stmt = $pdo->prepare("DELETE FROM utilisateurs WHERE id = ?");
    $stmt->execute([2]);
    echo "Suppression : " . $stmt->rowCount() . " ligne(s)<br>";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
