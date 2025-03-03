<?php
    $friends = [
        "Ahmed Gamal" => "AG",
        "Osama Mohamed" => "OM",
        "Mahmoud Gamal" => "MG",
        "Ahmed Samy" => "AS"
    ];

    echo "<pre>";
    print_r(array_change_key_case(array_flip(array_reverse($friends, true))));
    echo "</pre>";
