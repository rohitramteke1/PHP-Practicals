<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical b-2-a</title>
</head>
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div>Number: <input type="number" name="number" > </div>
            <button type="submit" >submit</button>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                $number = $_POST['number'];
                echo "<p> Sum of digits of: ".$number . "</p>";
                $rem = 0;
                while($number) {
                    $rem += (int)$number % 10;
                    $number = (int)$number/10;
                }
                echo "<p>". $rem. "</p>";
            }
        ?>
    </div>
</body>
</html>