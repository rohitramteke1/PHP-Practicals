<?php
    function callByReferenceSwap(&$string1, &$string2) {
        $temp = $string1;
        $string1 = $string2;
        $string2 = $temp;
    }

    function callByValueSwap($string1, $string2) {
        $temp = $string1;
        $string1 = $string2;
        $string2 = $temp;
    }

    function displayString($string1, $string2) {
        echo "\n String-1: " . $string1 . "\n String-2: " . $string2; 
    }

    $string1 = readline("Enter the string-1: ");
    $string2 = readline("Enter the string-2: ");

    echo "\n\n------------------------- Call by Value ------------------------- ";
    echo "\nBefore Swap\n String-1: " . $string1 . "\n String-2: " . $string2; 
    callByValueSwap($string1, $string2);
    echo "\nAfter Swap";
    displayString($string1, $string2);

    echo "\n\n------------------------- Call by Reference ------------------------- ";
    echo "\nBefore Swap\n String-1: " . $string1 . "\n String-2: " . $string2; 
    callByReferenceSwap($string1, $string2);
    echo "\nAfter Swap";
    displayString($string1, $string2);
?>