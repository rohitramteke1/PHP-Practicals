<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical C4</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Orbitron:wght@400;500;600;700;900&family=Poppins:ital@0;1&display=swap');
        :root {
            --dark-blue: #0099F6;
            --color: #FFF;
            --dark-color: #000;
            --light-black: rgb(60,60,60);
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            width: 100%;
            height: 100vh;
            background-color: #f1f1f1;
            font-family: 'Poppins', sans-serif;
        }
        .container {
            width: 100%;
            height: 100%;
        }
        .login-form {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: var(--light-black);
        }
        .form {
            display: flex;
            flex-direction: column;
            background-color: var(--dark-blue);
            padding: 30px 10px;
            border-radius: 10px;
            font-size: 15px;
            box-shadow: 2px 2px 20px rgba(30,30,30, 0.9);
            transition: all .3s ease;
        }
        .form:hover{
            box-shadow: 2px 2px 20px rgba(10,10,10, 1);
            transform: scale(1.01);
        }
        .form label, input{
            padding: 2px;
            margin: 5px 10px;
            outline: none;
            border: none;
        }
        .form input{
            padding: 10px;
            padding-left: 10px;
            border-radius: 4px;
        }
        .form button {
            /* margin: top right down left */
            margin: 20px 10px 0 10px;
            padding: 10px;
            background-color: var(--light-black);
            outline: none;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }
        .form button:hover{
            background-color: rgb(40,40,40);
        }
        .form input:focus {
            outline: none;
            border: none;
        }

        /* After the Submition */
        .form-data {
            padding: 20px 40px;
            width: 100%;
            height: 50%;
            /* background-color: #ADEFD1FF;
            color: #00203FFF; */
            /* color: #101820FF;
            background-color: #FEE715FF; */
            /* color: #FCF6F5FF;
            background-color: #2BAE66FF; */
            color: whitesmoke;
            background-color: #282923;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="login-form">
            <!-- Self Page -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">

            <!-- On Another page -->
            <form action="practical_c4_another_page.php" method="post" class="form">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Username">
                <label for="password">Password</label>
                <input type="text" id="password" name="password" placeholder="Password">
                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="form-data">
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
                    echo "<br>Username: ". $username;
                    echo "<br>Password: ". $password;
                }
                
                // format the user-input-string
                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
            ?>
        </div>

    </div>
</body>
</html>