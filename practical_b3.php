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
				<textarea name="array" id="array" cols="20" rows="5"></textarea>
				<input type="submit">
			</form>
			<?php
				if($_SERVER["REQUEST_METHOD"] == "POST") {
					$pos_cnt = 0; $neg_cnt = 0; $zero_cnt = 0;
					$str = $_POST['array'];
					$arr = explode(' ', $str);
					$flag = TRUE;
					foreach($arr as $number) {
						// check if it is a number or not
						try {
							if(!is_numeric($number)) throw new Exception("Enter the valid number");
							$flag = TRUE;
						}
						catch (Exception $e) {
							echo $e->getMessage() . "<br>";
							$flag = FALSE;
						}

						if ($number > 0)
							$pos_cnt++;
						elseif ($number < 0)
							$neg_cnt++;
						else
							$zero_cnt++;
					}
					if($flag) {
						echo "pos count: " . "<span>" . $pos_cnt. "</span> <br>";
						echo "zero count: ". "<span>" . $zero_cnt. "</span> <br>";
						echo "neg count: " . "<span>" . $neg_cnt. "</span> <br>";
					}
				}
			?>
		</div>
	</div>
</body>
</html>