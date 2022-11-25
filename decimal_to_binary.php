<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Decimal to binary</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .body {
            width: 100vw;
            height: 100vh;
        }
        .container {
            /* width: 600px; */
            height: 100vh; 
            background: #424344;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .form {
            width: 200px;
            height: 200px;
            background: #0096fe;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border-radius: 5px;
        }
        .form label, input {
            padding: 5px;
            margin: 5px;
        }
        .text-color {
            color: whitesmoke;
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class='text-color'>Decimal To Binary</h1>
        <?php

            echo "
                <hr>
                <form method='POST' onsubmit='return false' class='form'>
                    <label class='text-color' for='input'>INPUT : </label>
                    <input type='number' name='number' id='number'>
                    <input type='submit' name='submit' onclick='convert();' />
                </form>
                
                <p id='alert' class='text-color'></p>
                <p id='output' class='text-color' ></p>
            " ;

            echo '
                <script type="text/javascript">
                
                    setTimeout(convert, 30000);
                    function convert(event)
                    {
                        var x = document.getElementById("number").value ;
                        document.getElementById("alert").innerHTML = "<br>User input : " + x ;
                        const num = parseInt(x) ;
                        const res = num.toString(2) ;
                        document.getElementById("output").innerHTML = "Binary : " + res  ;
                        event.preventDefault();
                    }
                </script>
            ';
        ?>
    </div>

</body>
</html>