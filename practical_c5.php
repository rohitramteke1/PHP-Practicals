<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical-C5</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Orbitron:wght@400;500;600;700;900&family=Poppins:ital@0;1&display=swap');
        :root {
            --hover-color: white; 
        }
        * {
            font-family: "Poppins", sans-serif; 
            padding: 0;
            margin: 0;
        }
        body {
            width: 100%;
            height: 100vh;
        }
        .container {
            width: 100%;
            height: 100%;
            position: relative;
            background: linear-gradient(to bottom, rgb(0,0,0), rgb(40,40,40), rgb(90,90,90), rgb(200,200,200));
        }
        .bg{
            width: 100%;
            height: 50%;
            filter: blur(1px);
            background: linear-gradient(rgb(10,10,10, 0.5), rgb(30,30,30, 0.9)), url("https://images.pexels.com/photos/13263102/pexels-photo-13263102.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1") 50% 75%;
            border-bottom: 2px solid white;
        }
        .box {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .box h3 {
            color: white;
            padding: 20px;
            margin:  5px 20px;
            background-color: rgb(40,40,40);
            border-radius: 5px;
            box-shadow: 0 0 5px rgb(255,255,255, 0.5);
        }
        form {
            padding: 20px;
            margin: 20px;
            background-color: rgb(50,50,50);
            border-radius: 10px;
            box-shadow: 0 0 2px rgba(255,255,255);
            color: white;
            height: 300px;
        }
        form input, label, button{
            border: none;
            outline: none;
            padding: 5px;
            margin: 0 5px;
        }
        form button {
            color: white;
            background-color: transparent;
            cursor: pointer;
            padding: 5px 10px;
            position: relative;
            border-radius: 2px;
            outline: 1px solid var(--hover-color);
            z-index: 1;
            transition: all 0.3s ease;
        }
        form button:hover {
            outline: none;
            color: black;
        }
        form button:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0%;
            height: 100%;
            background-color: var(--hover-color);
            border-radius: 2px;
            z-index: -1;
            transition: all 0.3s ease;
        }
        form button:hover:before {
            width: 100%;
        }

    </style>
</head>
<body>
    <div class="container">
        
        <div class="bg"></div>
        <div class="box ">
            <h3>Decimal To Binary</h3>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" >
                <label for="decimal">Decimal</label>
                <input type="text" name="decimal" id="decimal" class="cool" >
                <button type="submit">Submit</button>
            </form>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num = (int)$_POST["decimal"];
                    $binary = '';
                    while($num != 0) {
                        $rem = $num % 2;
                        $binary = $binary . $rem;
                        $num =  (int)($num / 2);
                    }
                    echo "<h3>Binary: ".strrev($binary)."</h3><br>";
                }
            ?>

        </div>

    <!-- Container Ends here -->
    </div>

</body>

<!-- Script Here -->
<script>
    console.log("Hello world");        
</script>

</html>