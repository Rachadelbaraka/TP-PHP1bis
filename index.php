<?php
echo "<h3>Exercice 1 : Message selon le jour</h3>";
$jour = date('l');
$message = "";

switch ($jour) {
    case 'Monday': $message = "Courage, c'est lundi !"; break;
    case 'Friday': $message = "C'est bientôt le week-end !"; break;
    case 'Sunday': $message = "Repose-toi bien aujourd'hui."; break;
    default: $message = "Bonne journée !"; break;
}
echo "Aujourd'hui c'est $jour : $message<br><br>";

echo "<h3>Exercice 2 : Notation</h3>";
$note = 15;
switch (true) {
    case ($note >= 16): echo "Note: $note/20 - Très bien"; break;
    case ($note >= 14): echo "Note: $note/20 - Bien"; break;
    case ($note >= 12): echo "Note: $note/20 - Assez bien"; break;
    case ($note >= 10): echo "Note: $note/20 - Passable"; break;
    default: echo "Note: $note/20 - Insuffisant"; break;
}
?>
