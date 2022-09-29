<?php
    $username = $password = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = test_input($_POST["username"]);
        $password = test_input($_POST["password"]);

        if ($username == "Galgotias" && $password == "university") {
            echo "Welcome HTML";
        }
        else {
            echo "Sorry HTML";
        }
        // echo "<br>Username: ". $username;
        // echo "<br>Password: ". $password;
    }
    
    // format the user-input-string
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>