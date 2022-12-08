<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical-b-1a</title>
</head>
<body>
    <div class="container">
        <div class="form">
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >
                number: <input type="number" name="number" id="number">
                <button type="submit" >submit</button>
            </form>

        </div>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $num = $_POST["number"];
                // echo $num;
                if( (int)$num %2 ==  1) echo "<p>".$num." is odd </p> <br>";
                else echo "<p>".$num." is even </p> <br>";
            }
        ?>
    </div>
</body>
</html>