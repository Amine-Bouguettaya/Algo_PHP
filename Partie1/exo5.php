<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

$value1 = 100;
$value2 = round(($value1/6.56), 2);

echo "Montant en francs : $value1 <br>";
echo "$value1 francs = $value2 €";