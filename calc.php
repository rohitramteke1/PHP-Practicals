<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Calculator Php</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            width: 100vw;
            height: 100vh;
        }
        .container {
            width: 100%;
            height: 100%;
            /* background: #0096fe; */
            background: #434246;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .text-color {
            color: white;
            font-family: 'Roboto', sans-serif;
        }
        .btn-text-color {
            color: black;
            font-family: 'Roboto', sans-serif;
            padding: 5px; cursor: pointer;
            border-radius: 5px; outline: none; border: none;
        }
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: #121314;
            padding: 10px;
            width: 500px;
            height: 250px;
            margin: 5px; border-radius: 20px;
            border-radius: 90px;
        }
    </style>
</head>
<body>
    <div class="container" >
        <form method="post" action="calc.php">
            <label class="text-color" for="a" >First Number: </label>
            <input class="btn-text-color" type="number" name ="a" id='a' value="<?php if(isset($_POST['a'])) { echo $_POST['a']; } ?>"><br>
            <label class="text-color" for="b" >Second Number: </label>
            <input class="btn-text-color" type="number" name ="b" id='b' value="<?php if(isset($_POST['b'])) { echo $_POST['b']; } ?>">
            <br><br>
            <div class="btn">
                <button class="btn-text-color" type="submit" name="add">Addition </button>&emsp;
                <button class="btn-text-color" type="submit" name="sub">Subtraction </button>&emsp;
                <button class="btn-text-color" type="submit" name="mul">Multiply </button>&emsp;
                <button class="btn-text-color" type="submit" name="div">Divide </button>&emsp;
                <button class="btn-text-color" type="submit" name="rem">Reminder </button>&emsp;
            </div>
            <hr>
        </form>

        <?php
            if(isset($_POST['add']))
            {
                $a = $_POST['a'] ;
                $b = $_POST['b'] ;
                $c = $a + $b ;
                echo "<div class='text-color'> ADDITION : " .$c. "</div>" ;
            }

            else if(isset($_POST['sub']))
            {
                $a = $_POST['a'] ;
                $b = $_POST['b'] ;
                $c = $a - $b ;
                echo "<div class='text-color'> SUBTRACTION : " .$c. "</div>" ;
            }

            else if(isset($_POST['mul']))
            {
                $a = $_POST['a'] ;
                $b = $_POST['b'] ;
                $c = $a * $b ;
                echo "<div class='text-color'> MULTIPLICATION : " .$c. "</div>" ;
            }

            else if(isset($_POST['div']))
            {
                $a = $_POST['a'] ;
                $b = $_POST['b'] ;
                $c = $a / $b ;
                echo "<div class='text-color'> DIVISION : " .$c. "</div>" ;
            }

            else if(isset($_POST['rem']))
            {
                $a = $_POST['a'] ;
                $b = $_POST['b'] ;
                $c = $a % $b ;
                echo "<div class='text-color'> REMINDER : " .$c. "</div>" ;
            }
        ?>
    </div>
</body>
</html>