<?php
    $a = (float)readline("entrez un nombre a virgule positif: ");
    $b = (float)readline("entrez un nombre a virgule positif: ");
    $y = $a*$b;

    if ($a < 0 or $b < 0 ) {
        echo("erreur nombre négatif saisi  veuillez saisir un nombre positif \n");
    }
    else {
        echo(sqrt($y));
    }
?>