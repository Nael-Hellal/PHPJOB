<?php
    $eleves = array('adrien'=>12, 'jemuel'=>8, 'tristan'=>18, 'alice'=>19);

    foreach($eleves as $nom=>$notes){
        echo("$nom a eu $notes en math \n");
    }
    $moyenne = array_sum($eleves)/count($eleves);
        echo "la moyenne de la classe est: $moyenne \n";

        $elevesSio = array('adrien'=>array(12, 10, 8), 'jemuel'=>array(8, 13, 15), 'tristan'=>array(18, 5, 9), 'alice'=>array(19, 15, 10));

        foreach($elevesSio as $nom=>$lesNotes){
            echo"$nom: \n";
            foreach($lesNotes as $note){
                echo"$note \n";
            }
            $moyenne = array_sum($lesNotes)/count($lesNotes);
            echo"la moyenne est $moyenne \n";
        }
?>