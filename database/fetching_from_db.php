<?php

$servername = "localhost";
$database = "db";
$username = "root";
$password = "password";
$charset = "utf8mb4";

try
{
	$conn = new PDO("mysql:host=$servername;dbname=$database",$username, $password);

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = "USE db";
	$conn->exec($query);
    $query = "SELECT * FROM db.student";
	// echo "Using Query: ";
    // $query = "SELECT PRN, First_Name FROM student";
    $query = "SELECT * FROM student;";
	$stmt = $conn->prepare($query);

	// // EXECUTING THE QUERY
	$stmt->execute();

	$r = $stmt->setFetchMode(PDO::FETCH_ASSOC);

	// FETCHING DATA FROM DATABASE
	$result = $stmt->fetchAll();

	// OUTPUT DATA OF EACH ROW
	echo "<table border=1>";
	echo "<thead style='background-color: red; color: white;' >";
	echo "<tr>";
	echo "<th>Sr No</th>";
	echo "<th>First Name</th>";
	echo "<th>Middle Name</th>";
	echo "<th>Last Name</th>";
	echo "<th>Branch</th>";
	echo "<th>PRN</th>";
	echo "<th>Email</th>";
	echo "<th>ID</th>";
	echo "<th>Year</th>";
	echo "<th>Semester</th>";
	echo "</tr>";
	echo "</thead>";
	foreach ($result as $row)
	{
		echo "<tr style='background-color: rgb(60,60,60) ; color: white; font-family: sans-serif; ' >";
		foreach($row as $item) {
			$item = is_string($item) ? ucfirst(strtolower($item)) : $item;
			echo "<td style='padding: 4px 20px; text-align: center;' >" .$item ."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
} catch(PDOException $e) {
	echo $query . "<br>" . $e->getMessage();
}

$conn = null;
?>
