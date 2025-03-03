<?php
    $num1 = 11.5; 
    $num2 = 9.4898; 
    $num3 = -7.5; 
    
    echo round($num1, 0, PHP_ROUND_HALF_DOWN) . "<br>"; // 11
    echo round($num2, 1) . "<br>"; // 9.5
    echo round($num3, 0, PHP_ROUND_HALF_DOWN) . "<br>"; // -7
    