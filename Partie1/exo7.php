<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge.</p>

<h2>Résultat</h2>

<?php

$age = 8;

if ($age < 6) {
    echo "La catégorie de l'enfant de $age ans n'est pas gérée.<br>";
}
elseif ( $age <= 7) {
    echo "L'enfant qui a $age ans appartient à la catégorie « Poussin »<br>";
}
elseif ( $age <= 9) {
    echo "L'enfant qui a $age ans appartient à la catégorie « Pupille »<br>";
}
elseif ( $age <= 11) {
    echo "L'enfant qui a $age ans appartient à la catégorie « Minime »<br>";
}
else {
    echo "L'enfant qui a $age ans appartient à la catégorie « Cadet »<br>";
}