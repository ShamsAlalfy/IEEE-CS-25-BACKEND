<?php
    $mix = [1, 2, "A", "B", "C", 3, 4];

    $countNumbers = 0;
    $countLetters = 0;
    for($i = 0 ; $i < count($mix) ; $i++){
        if (gettype($mix[$i]) === "integer")
        {
            echo "{$mix[$i]}<br>";
            $countNumbers++;
        }
        else{
            $countLetters++;
        }
    }
    echo "$countNumbers Numbers Printed<br>". "$countLetters Letters Ignored";