<?php 
        $phrase= readline("entrer une phrase: ");
        
        if(strlen($phrase) > 10) {
                $phraseCoupee = substr($phrase, 0, 10).'...';
                echo "$phraseCoupee \n";
        }
        else {
                echo"$phrase \n";
        }
?>