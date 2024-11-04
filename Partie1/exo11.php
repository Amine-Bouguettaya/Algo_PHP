<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>Résultat</h2>

<?php

$array = ["Peugoet", "Mercedes", "BMW", "Renault"];
$nb_marque = count($array);

echo "Il y a $nb_marque marques de voitures dans le tableau :<br>";
foreach ($array as $marque) {
    echo "$marque<br>";
}