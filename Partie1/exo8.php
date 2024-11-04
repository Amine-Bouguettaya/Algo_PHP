<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre</p>
<h2>Résultat</h2>

<?php

$value = 8;
$i = 1;

echo "Table de $value :<br>";

while ($i <= 10) {
    $calc = $i * $value;
    echo "$i x $value = $calc<br>";
    $i += 1;
}

echo "<br><br>";

for ($f = 1; $f < 11; $f++) {
    $calc2 = $f * $value;
    echo "$f x $value = $calc2<br>";
}