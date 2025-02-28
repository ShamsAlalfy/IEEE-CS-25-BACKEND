<?php
    $start = 10;
    $end = 0;
    $stop = 3;

    for($i = $start ; $i >= $end ; $i--){
        echo "$i<br>";
        if ($i === $stop){
            break;
        }
    }