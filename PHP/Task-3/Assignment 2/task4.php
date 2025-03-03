<?php
    $nums = [10, 20, 30];

    // Method 1
    echo array_reduce($nums, function ($carry, $num) {return $carry + $num;}, 0) . '<br>';

    // Method 2
    echo array_sum($nums);
    
