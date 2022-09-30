<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <table border="1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $list = array(
                            "India" => "Mumbai",
                            "Japan" => "Tokyo",
                            "U.S." => "New York",
                            "China" => "Beijing",
                            "U.K." => "London",
                            "France" => "Paris",
                            "U.A.E." => "Dubai",
                        );
                        foreach($list as $key => $value) {
                            echo "<tr>";
                                echo "<td>". $key   ."</td>";
                                echo "<td>". $value ."</td>";
                            echo "</tr>";
                        }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
