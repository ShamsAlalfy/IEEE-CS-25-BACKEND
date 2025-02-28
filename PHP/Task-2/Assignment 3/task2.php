<?php
    function get_arguments(...$args){
        $all = "";
        foreach($args as $arg){
            $all = $all . " ". $arg;
        }
        return $all;
    }
    echo get_arguments("Hello", "Elzero", "Web", "School").'<br>'; // Hello Elzero Web School
    echo get_arguments("I", "Love", "PHP").'<br>'; // I Love PHP    