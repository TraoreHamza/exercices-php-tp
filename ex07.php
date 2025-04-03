<?php

// Exercice 7 : Calculer la factorielle d'un nombre.
// Pseudo-code :
// fact = 1
// pour i de 1 à n faire
//   fact *= i
// afficher fact

$fact = 1;

$n = 5;

for($i = 1; $i <= $n; $i++) {
    $fact *= $i;
    echo "la factorielle de " . $n . " est " . $fact . "<br>";
}


