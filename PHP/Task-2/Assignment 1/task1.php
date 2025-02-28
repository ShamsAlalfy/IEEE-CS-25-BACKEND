<?php
    $a = 100;
    $b = 200;
    $c = 100;

    if ($b > $a && $a === $b && $a + $c === $b):
        echo "Yes";
    else:
        echo "no";
    endif;