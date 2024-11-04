<h1>Exercice 12</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>Résultat</h2>

<?php

$array = [ 
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

foreach ($array as $prenom => $langue) {
    switch ($array[$prenom]) {
        case "FRA":
            echo "Salut $prenom<br>";
            break;
        case "ESP":
            echo "Hola $prenom<br>";
            break;
        case "ENG":
            echo "Hello $prenom<br>";
            break;
    }
}

ksort ($array);
echo "<br><br>";

foreach ($array as $prenom => $langue) {
    switch ($array[$prenom]) {
        case "FRA":
            echo "Salut $prenom<br>";
            break;
        case "ESP":
            echo "Hola $prenom<br>";
            break;
        case "ENG":
            echo "Hello $prenom<br>";
            break;
    }
}
