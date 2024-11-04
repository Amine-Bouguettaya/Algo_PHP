<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

function is_palindrome($phrase) {
    $phrase = strtolower($phrase);
    $phrase = str_replace(" ", "", $phrase);
    if (strrev($phrase) == $phrase) {
        return true;
    }
    return false;
}

$phrase = "Engage le jeu que je le gagne";

if (is_palindrome($phrase) == true) {
    echo "La phrase « $phrase » est palindrome.";
}
else {
    echo "La phrase « $phrase » n'est pas palindrome.";
}