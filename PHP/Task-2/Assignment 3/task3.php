<?php
    function sum_all(...$numbers) {
        $sum = 0;
        foreach ($numbers as $num) {
            if ($num == 5) {
                continue;
            } elseif ($num == 10) {
                $sum += 20;
            } else {
                $sum += $num;
            }
        }
        return $sum;
    }

    echo sum_all(10, 12, 5, 6, 6, 10).'<br>'; // 64
    echo sum_all(5, 10, 5, 10).'<br>'; // 40