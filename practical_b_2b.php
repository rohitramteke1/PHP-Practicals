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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >
            <div> Number: <input type="number" name="number" > </div>
            <input type="submit">
        </form>
    </div>
	<?php
		if($_SERVER['REQUEST_METHOD'] == "POST") {
			$num = $_POST['number'];
            $prev = 0;
            $curr = 1;
            $next = 0;
            echo "<h3>Fibbonacci series upto ". $num. "</h3>";
            for ($i=0; $i < $num; $i++) { 
                echo "<span>" . $next. ' ';
                $next = $prev + $curr;
                $prev = $curr;
                $curr = $next;
            }
            echo "</span>";
		}
	?>
</body>
</html>