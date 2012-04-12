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

echo "<h1>PART B</h1>";

$speed = $_POST['speed'];
$ram = $_POST['ram'];
$hd = $_POST['hd'];
$screen = $_POST['screen'];

$result = mysql_query("SELECT * FROM Laptops WHERE speed >= " . $speed . " AND ram >= " . $ram . " AND hd >= " . $hd . " AND screen >= " . $screen);
echo "<p>Your search: ";
echo "<p>Min speed: " . $speed;
echo "<p>Min RAM: " . $ram;
echo "<p>Min HD Size: " . $hd;
echo "<p>Min Screen Size: " . $screen;

echo "<h2>Laptop Results: </h2>";

$count = 0;
while($row = mysql_fetch_array($result)) {
	$count = $count + 1;
    $product = mysql_query("SELECT * FROM Products WHERE model = '" . $row['model'] . "'");
    $prow = mysql_fetch_array($product);
	echo "<h3>LAPTOP " . $count . "</h3>";
    echo "<p>Maker: " . $prow['maker'];
    echo "<p>Model: " . $row['model'];
    echo "<p>Hard Drive: " . $row['hd'] . " GB";
    echo "<p>RAM: " . $row['ram'] . " GB";
    echo "<p>Screen Size: " . $row['screen'] . " inces";
    echo "<p>Price: $" . $row['price'];
}
?>

<a href="index.php"><p>GO BACK</a>