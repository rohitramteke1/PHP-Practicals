<?php

    $str = (string)readline("Enter the the three numbers: ");

    /*
        // $arr = print_r(explode(" ", $str, 3));
        $arr = explode(" ", $str, 3);

        var_dump($arr);
        // print_r($arr);

        list($a, $b, $c) = explode(" ", $str, 3);
        // echo "\nEcho: $a, $b, $c";
        // echo "\nType of a: ".gettype($a);
    */

    $int_array = array_map('intval', explode(' ', $str));

    echo $int_array[0] . " ";
    echo $int_array[1] . " ";
    echo $int_array[2] . " ";


?>