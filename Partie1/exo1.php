<h1>Exercice 1</h1>

<p>Soit la phrase "Notre formation DL commence aujourd'hui".<br>
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espace inclus).</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$longeur = strlen($phrase);
echo "La phrase « $phrase » contient $longeur caractères";