<?php 
    $age = readline("entrer votre âge: ");
    if ($age <= 26 or $age >= 65) {
        echo("vous avez droit au tarif réduit \n");
        
    }

    else {
        echo("vous n'avez pas accès au tarif réduit \n");
    }