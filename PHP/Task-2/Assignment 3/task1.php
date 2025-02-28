<?php
    function greeting($name,$gender=" "){
        if ($gender === "Male"){
            $gender = " Mr ";
        }
        else if($gender === "Female"){
            $gender = " Miss ";
        }
        
        echo "Hello".$gender.$name.'<br>'; 
    }

    echo greeting("Osama", "Male"); // Hello Mr Osama
    echo greeting("Eman", "Female"); // Hello Miss Eman
    echo greeting("Sameh"); // Hello Sameh