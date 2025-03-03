<?php
    $chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

    echo ucfirst(strtolower(implode(array_map(fn($item)=> gettype($item) == "integer" ? "" : $item, $chars))));
