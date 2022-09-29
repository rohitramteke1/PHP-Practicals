<html>
<body>
    
    Welcome: <?php 
        $string = $_POST["form"];

        echo "Original String: " . $string . '<br>';
        echo "Lenght: " . strlen($string) . '<br>';
        echo "Reverse: " . strrev($string) . '<br>';
        echo "Uppercase: " . strtoupper($string) . '<br>';
        echo "Lowercase: " . strtolower($string) . '<br>';
        // echo "Lowercase: " . str_replace($string, "rohit", "Kozo") . '<br>';
    ?>

</body>
</html>