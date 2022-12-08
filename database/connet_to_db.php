<?php
    $servername = "localhost";
    $database = "db";
    $username = "root";
    $password = "password";
    $charset = "utf8mb4";

    try{        
        // create connection
        $conn = new PDO("mysql:host=$servername", $username, $password);
        
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "CREATE DATABASE employee";
        
        // using exec() because no results are returned
        $conn->exec($sql);

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

?>