<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

$array = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$moyenne = round((array_sum($array) / count($array)), 2);


echo "Les notes obtenues par l'élève sont :";
foreach ($array as $note) {
    echo "$note ";
}
echo "<br>Sa moyenne générale est donc de : $moyenne";