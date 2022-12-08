<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>container</title>
</head>
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" >
            username: <input type="text" name="username" >
            password: <input type="password" name="password" >
            <input type="submit">
        </form>
        <?php
            $username = $_POST["username"];
            $password = $_POST["username"];
            echo $name;
        ?>
    </div>
</body>
</html>