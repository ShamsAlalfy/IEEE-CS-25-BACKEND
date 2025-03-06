<?php
    $main="Programming";
    $sub=$main."/PHP";
    if (!is_dir($main))
    {
        mkdir($main,0711,true);        
    }
    if (!is_dir($sub))
    {
        mkdir($sub,0711,true);        
    }

    if (is_dir($sub))
    {
        rmdir($sub);
        echo "Directory $sub Removed<br>";
    }
    if (is_dir($main))
    {
        rmdir($main);
        echo "Directory $main Removed<br>";
    }