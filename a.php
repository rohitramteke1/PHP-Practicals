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
        <form action="<?php 
		echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >
            
        </form>
    </div>
	<?php
		if($_SERVER['REQUEST_METHOD'] == "POST") {
			$quantity = $_POST['quantity'];
		}
	?>
</body>
</html>