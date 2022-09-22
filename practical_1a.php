<?php
	// echo "Enter the number of products and rate per products: ";
	// fscanf('./input.txt', "%d %f", $num_of_products, $rate); 
	$num_of_products = (float)readline("Enter the number of products: ");
	$rate = (float)readline("Enter the rate of products: ");
	if ($num_of_products > 100) {
		echo "Congratulations...!\nYou have got the 10% discount. ";

		$netAmount = $rate * ($num_of_products - ($num_of_products * 0.1));
		echo "Your total price is $netAmount";
	} 
	else {
		$netAmount = $rate * $num_of_products;
		echo "Your total price is $netAmount";
	}
?>