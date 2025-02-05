<?php
        for($i = 0; $i < 10; $i++){
            $tab[] = rand(1, 100);
            echo array_sum($tab);
            echo min ($tab);
            echo max ($tab);
        }
?>