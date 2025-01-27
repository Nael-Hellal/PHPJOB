<?php 
    $mot_clee = readline("Entrer un mot: ");
         $premiere_lettre = substr($mot_clee, 0, 1);
         $derniere_lettre = substr($mot_clee, -1, 1);
         $nb_lettre = strlen($mot_clee);
         echo("la première lettre du mot est $premiere_lettre \n");
         echo("la dernière lettre du mot est $derniere_lettre \n");
         echo("le mot fait $nb_lettre lettres \n");
?>