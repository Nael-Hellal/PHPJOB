<?php 
        $mot= readline("entrer un mot: ");
        $motInverse= strrev($mot);

        if($mot == $motInverse){
            echo"$mot est un palindrome \n";
        }
        else{
            echo"$mot n'est pas un palindrome \n";
        }
?>