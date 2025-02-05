<?php
        $nom=readline("entrer votre nom: ");
        $prenom=readline("entrer votre prenom: ");
        $nom_MAJ = strtoupper($nom);
        $nb_nom = strlen($nom_MAJ);
        $prenom_MAJ= ucfirst($prenom);
        $nb_prenom = strlen($prenom_MAJ);
        echo("$nom_MAJ($nb_nom) $prenom_MAJ($nb_prenom) \n");
?>