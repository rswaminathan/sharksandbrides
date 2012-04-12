<?php
/*
Richard Truong
40115583
richard_truong@hmc.edu
*/

$con = mysql_connect("localhost:3306","root","homework");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("rdtps6", $con);

$price = $_POST['price'];
$result = mysql_query("SELECT * FROM PCs");

echo "<h1>PART A</h1>";
echo "<p>Your price search: " . $price;
echo "<h2>Closest PC Result: </h2>";

$dist = 9001;
while($row = mysql_fetch_array($result)) {
	if (abs($row['price']-$price) < $dist) {
	    $dist = abs($row['price']-$price);
		$bestrow = $row;
	}
}

$product = mysql_query("SELECT * FROM Products WHERE model = '" . $bestrow['model'] . "'");
$row = mysql_fetch_array($product);

echo "<p>Maker: " . $row['maker'];
echo "<p>Model: " . $row['model'];
echo "<p>Speed: " . $bestrow['speed'] . " gHZ";

echo "<h3>OTHER SPECS:</h3>";
echo "<p>Model: " . $bestrow['model'];
echo "<p>Hard Drive: " . $bestrow['hd'] . " GB";
echo "<p>RAM: " . $bestrow['ram'] . " GB";
echo "<p>Price: $" . $bestrow['price'];

?>

<a href="index.php"><p>GO BACK</a>