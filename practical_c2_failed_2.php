<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical C2</title>

    <style>
        :root {
            --text-color: #FFF;
        }
        * {
            padding: 0;
            margin: 0;
        }
        .body {
            width: 100%;
            height: 100vh;
        }
        .container {
            width: 100%;
            height: 100%;
            background-color: rgb(60,60,60);
        }
        .dynamic {
            padding: 5px;
            margin: 2px;
        }
        .fg-color {
            color: var(--text-color);
        }
        .mg {
            margin: 10px;
        }

    </style>

</head>
<body>
    <div class="container">
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <label class="fg-color" for="dynamic-table" id="dynamic-table-label" >Enter the size: </label>
            <input type="text" name="dynamic-table-size" id="dynamic-table" >
            <input type="submit" value="add">
        </form>

        <?php
            function dynamic_input_for_table() {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $size = (int)$_POST["dynamic-table-size"];
                    for ($i=0; $i < $size; $i++) {
                        echo '<input type="text" name="country" class="dynamic" ' . 'placeholder="Country-' . $i . '" > ';
                        echo '<input type="text" name="city" class="dynamic" ' . 'placeholder="City-' . $i . '" > <br>';
                    }
                }
            }
            dynamic_input_for_table();
        ?>
    </div>
</body>
</html>