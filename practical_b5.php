<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical B-5</title>

    <style>
        :root {
            --dark-blue: #0099F6;
            --color: #FFF;
            --dark-color: #000;
            --light-black: rgb(60,60,60);
        }
        .dark-theme {
            --dark-blue: #F1F1F1;
            --color: #000;
            --dark-color: #f6f1f2;
            --light-black: rgb(240,240,240);
        }
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            width: 100%;
            height: 100vh;
        }
        .container {
            overflow: hidden;

            width: 100%;
            height: 100%;
            background: var(--dark-blue);
        }
        .form {
            margin: 10px 0;
            background-color: var(--light-black);
            padding: 20px;
        }
        textarea {
            padding: 10px;
        }
        .form button {
            border: none;
            outline: none;
            padding: 5px;
            margin: 5px 3px;
            text-transform: capitalize;
            cursor: pointer;
            color: white;
            background: var(--dark-color);
            border-radius: 5px;
        }
        .form div button {
            border: none;
            outline: none;
            padding: 5px;
            margin: 5px 3px;
            text-transform: capitalize;
            cursor: pointer;
            color: white;
            background: var(--dark-blue);
            border-radius: 5px;
        }
        .form button:hover{
            background: #FF1234;
        }
        .form div button:hover{
            background-color: #0077f6;
        }
        .form-data {
            color: white;
            background-color: #555;
            padding: 10px 20px;
            margin: 5px 20px;
            border-radius: 5px;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="form">
            <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <textarea name="form" id="form" cols="70" rows="10"></textarea>
                <!-- <input type="submit"> -->
                <button type="submit">String-Ops</button>
            </form>
            <div class="btn">
                <button>string-length</button>
                <button>string-reverse</button>
                <button>string-uppercase</button>
                <button>string-lowercase</button>
                <button>string-replace</button>
            </div>
        </div>

        <!-- PHP Here -->
        <div class="form-data">
            <?php
                $string = $_POST["form"];
                echo "Original String: " . $string . '<br>';
                echo "Length: " . strlen($string) . '<br>';
                echo "Reverse: " . strrev($string) . '<br>';
                echo "Uppercase: " . strtoupper($string) . '<br>';
                echo "Lowercase: " . strtolower($string) . '<br>';
                // echo "Lowercase: " . str_replace($string, "rohit", "Kozo") . '<br>';
            ?>
        </div>

    </div>

</body>
</html>