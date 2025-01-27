<?php 
    $chiffre1 = readline("entrez le premier chiffre: ");
    $chiffre2 = readline("entrez le deuxieme chiffre: ");

    if ($chiffre1 < 0 and $chiffre2 < 0 or $chiffre1 > 0 and $chiffre2 > 0)
        {
        echo ("produit positif \n");
        }
    else
        {
        echo ("produit négatif \n");
        }
?>