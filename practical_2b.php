<?php
    function fib($num) {
        if ($num <= 1)
            return $num;
        return fib($num-1) + fib($num-2);
    }

    function seriesOfFibonacci() {
        $offsetValue = readline("Enter the number upto which you want the fibonnaci series: ");
        for ($i=0; $i < $offsetValue; $i++) { 
            echo fib($i)." ";
        }
    }
    seriesOfFibonacci();
?>