<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

require './class/Habitation.php';
require './class/Appartement.php';
require './class/Maison.php';

$maison1 = new Maison("France", "Béziers", 34500, 2, 7, true, 2, false);
echo $maison1->getChambres();
echo $maison1->getCodePostal();
echo $maison1->getPays();
echo $maison1->getPieces();
echo $maison1->getVille();
echo $maison1->hasGarage();
echo $maison1->hasEtages();
echo $maison1->hasJardin();

$maison2 = new Maison("France", "Wignehies", 59212, 1, 4, false, 0, true);
echo $maison2->getChambres();
echo $maison2->getCodePostal();
echo $maison2->getPays();
echo $maison2->getPieces();
echo $maison2->getVille();
echo $maison2->hasGarage();
echo $maison2->hasEtages();
echo $maison2->hasJardin();

$appart = new Appartement("Belgique", "Momignies", 10101, 1, 3, false);
echo $appart->hasGarage();
echo $appart->getVille();
echo $appart->getPieces();
echo $appart->getPays();
echo $appart->getChambres();
echo $appart->getCodePostal();
$appart->setGarage(true);
$appart->setCodePostal(53435);
$appart->setVille("Cazouls");
$appart->setPays("France");
$appart->setChambres(4);
$appart->setPieces(5);
