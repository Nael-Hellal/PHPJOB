<?php
    $code = readline("Entrer le numéro de votre départements en île de France: ");
    $departement = [75, 77, 78, 91, 92, 93, 94];
    
    if (in_array($code, $departement))
        {
        echo ("fait partie de l'île de France \n");
        }
    else
        {
        echo ("ne fait pas partie de l'île de France \n");
        }
    
        if ($code > 0 and $code < 100)
        {
        echo ("département valide \n");
        }
        else
        {
        echo ("saisir un département valide \n");
        }
?>