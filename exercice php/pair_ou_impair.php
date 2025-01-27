<?php
        $nb = readline("saisissez un chiffre: ");
        if ($nb%2==0) {
            echo("chiffre pair \n");
        }
        elseif($nb%2!=0) {
            echo("chiffre impair \n");
        }
        for ($i = $nb ; $i <= $nb + 20 ; $i +=2){
            echo("$i \n");
        }
?>
