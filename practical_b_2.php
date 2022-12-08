<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical-b-1b</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            display: flex;
            flex-direction: column;
        }
        form input{
            width: 200px;
            height: 20px;
            margin: 2px;
        }
        form button {
            width: 208px;
            margin-left: 47px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" >
                <div> num1: <input type="number" name="num1" > </div>
                <div> num2: <input type="number" name="num2" > </div>
                <div> num3: <input type="number" name="num3" > </div>
                <button type="submit">Submit</button>
            </form>
        </div>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
                $max = $num1 > $num2 ? num1 : $num2;
                $max = $num3 > $max ? $num3 : $max;
                echo '<p>numbers ' . $num1 . ' ' . $num2 . ' ' . $num3 . '</p>';
                echo '<p> max of above three is '.$max.'</p>';
            }
        ?>
    </div>
</body>
</html>