<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>practical-3b</title>
</head>
<body>
	<div class="container">
		<div class="form">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
				<label for="array">Enter the numbers: </label>
				<?php
                    echo "You are in form";
                    do {
                        $c = 'n';
                        echo 'choice: <input type="text" name="choice" >';
                        echo 'number: <input type="number" name="number" >';
                    } while ($c == 'y' || $c == 'Y');
                ?>
				<input type="submit">
			</form>
			<?php
				if($_SERVER["REQUEST_METHOD"] == "POST") {
					$pos_cnt = 0; $neg_cnt = 0; $zero_cnt = 0;
					$str = $_POST['array'];
					$arr = explode(' ', $str);
					$flag = TRUE;
				}
			?>
		</div>
	</div>
</body>
</html>