<?php
    date_default_timezone_set("Africa/Cairo");
    $date = "1990-10-01";
    $epoch = strtotime($date);
    $diff_seconds = $epoch - 0;
    $days = $diff_seconds / (60 * 60 * 24);
    $years = $days / 365;
    
    echo "From Epoch Time Till $date Is Approximately " . number_format($days, 1) . " Days<br>";
    echo "From Epoch Time Till $date Is Approximately " . number_format($years, 1) . " Years<br>";

    