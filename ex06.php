<?php

// Exercice 6 : Trouver le plus grand de trois nombres.
// Pseudo-code :
// si a >= b et a >= c alors
//   afficher a
// sinon si b >= a et b >= c alors
//   afficher b
// sinon
//   afficher c


$a = 5;
$b = 10;
$c = 7;

if ($a >= $b && $a >= $c)  {
    echo $a . " est le plus grand nombre.";
} else if($b >= $a && $b >= $c) {
    echo $b . " est le plus grand nombre.";
} else {
    echo $c . " est le plus grand nombre.";
}


