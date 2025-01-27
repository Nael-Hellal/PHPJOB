<?php
    $annee = readline("entrez une annee: ");

    if ($annee%4==0 or $annee%400==0){
        echo("sait une annee bissextile \n");
    }
    elseif ($annee%100!=0){
        echo("se n'est pas une annee bissextile \n");
    }
?>