<?php
    $filename = 'test.txt';
    $fptr = fopen($filename, 'a+') or die("Unable to open file.");
    
    // read line at a time
    while(!feof($fptr)) {
        echo fgets($fptr);
    }

    // write line into a file
    $sentence = "\n\nAJAX = Asynchronous JavaScript and XML";
    fwrite($fptr, $sentence);
    $sentence = "\nCSS = Cascading Style Sheets";
    fwrite($fptr, $sentence);
    $sentence = "\nHTML = Hyper Text Markup Language";
    fwrite($fptr, $sentence);
    $sentence = "\nPHP = PHP Hypertext Preprocessor";
    fwrite($fptr, $sentence);
    $sentence = "\nSQL = Structured Query Language";
    fwrite($fptr, $sentence);
    $sentence = "\nSVG = Scalable Vector Graphics";
    fwrite($fptr, $sentence);
    $sentence = "\nXML = EXtensible Markup Language";
    fwrite($fptr, $sentence);
    

    fclose($fptr);
    echo "\n\n";
?>