<?php 
        $nbAleatoire = rand(0,100);
        $nbessaie= 0;
        do {
                $devine= readline("Devinez le nombre: ");
                $nbessaie++;
                if($devine > $nbAleatoire){
                        echo("trop grand \n");
                }
                elseif ($devine < $nbAleatoire){
                        echo("trop petit \n");
                }
        } while($devine != $nbAleatoire and $nbessaie  <= 7);

        if($devine == $nbAleatoire){
                echo("super ! tu a gagner en $nbessaie essaie \n");
        }
        else{
                echo("pas de chance ta perdue\n");
        }
?>
      
   