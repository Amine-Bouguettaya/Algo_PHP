<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €</p>

<h2>Résultat</h2>

<?php

$montant = 26;
$recu = 100;
$rendu = ($recu - $montant);
$billet10 = 0;
$billet5 = 0;
$piece1 = 0;
$piece2 = 0;

echo "Montant à payer : $montant €<br>";
echo "Montant versé : $recu €<br>";
echo "Reste à payer : $rendu €<br>";
echo "***************************************************<br>";

while ($rendu > 10) {
    $rendu = $rendu - 10;
    $billet10 += 1;
}
if($rendu >= 5) {
    $rendu = $rendu - 5;
    $billet5 += 1;
}
while ($rendu >= 2) {
    $rendu = $rendu - 2;
    $piece2 += 1;
}


echo "Rendue de monnaie :<br>";
echo "$billet10 billets de 10 € - ";
echo "$billet5 billets de 5€ - ";
echo "$piece2 pièce de 2€ - ";
echo "$rendu pièce de 1 €<br>";