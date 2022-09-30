<?php
    // global $asc_arr;
    // global $asc_arr_2D;
    $asc_arr = array();
    $asc_arr_2D = array();

    function arrayInput() {
        // taking an array input
        $size = (int)readline("Enter the size of an Array: ");

        for ($i=0; $i < $size; $i++) { 
            $key = readline("Enter the key: ");
            $value = readline("Enter the value: ");
            $asc_arr[$key] = $value;
        }
    }

    function array2Dconvert() {
        // Converting it into the 2D array
        foreach ($asc_arr as $key => $value) { 
            array_push($asc_arr_2D, [$key, $value]);
        }
    }
        
    arrayInput();
    array2Dconvert();
    arrayPrint();
    print_r($asc_arr_2D);

?>