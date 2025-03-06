<?php
    $drives = ["C:","D:","E:"];
    $space = 0;
    foreach($drives as $driver){
        $space += disk_total_space($driver);
    }
    echo round($space/1024/1024/1024/1024,2) . " Terabyte" ;