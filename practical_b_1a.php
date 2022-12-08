<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical-b-1b</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" >
                Quantity: <input type="number" name="quantity" min=0>
                Price: <input type="number" name="price" min="0" >
                <input type="submit">
            </form>
        </div>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                $quantity = $_POST['quantity'];
                $price = $_POST['price'];
                $net = $quantity * $price;
                echo "<p>Tatal quantity ".$quantity."</p>";
                echo "<p>Price each item ".$price."</p>";
                if($quantity > 100) {
                    $net =  $net = $quantity * $price;
                    echo "<h1>Congratulations...! You've got the 10% instant discount.</h1>";
                    echo "<p> Your Bill ".$net."</p>";
                    echo "<p> Your new bill ". $net - ($net*.1) ."</p>";
                } else {
                    echo "<p> Your Bill ".$net."</p>";
                }
            }
        ?>
    </div>
</body>
</html>