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
            <textarea rows="6" cols="40" name="strings" value="" > </textarea>
            <input type="submit">
        </form>
    </div>
	<?php
		if($_SERVER['REQUEST_METHOD'] == "POST") {
			$str = $_POST['strings'];
            $s = explode(" ", $str);
            $hash = array('' => '');
            foreach($s as $sub_str) {
                $count = substr_count($str, $sub_str);
                if(!array_search($sub_str, $hash)) {
                    array_push($hash, array($sub_str => $count));
                }
            }
            foreach($hash as $key => $value) {
                echo "key " . $key . " " . $value . "<br>";
            }
		}
	?>
</body>
</html>