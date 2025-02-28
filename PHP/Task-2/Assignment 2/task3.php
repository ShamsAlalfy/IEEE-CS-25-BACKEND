<?php
    $num = 2;
    $val = 3;
    while ($num < 520) {
        if($val === 3){
            echo '1<br>';
            $num = 1 + $val;
            $val *= 2;
        }
        else{
            echo "$num<br>";
            $num += $val;
            $val *= 2;
        }  
    }