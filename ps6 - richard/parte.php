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

echo "<h1>PART E</h1>";

$maker = $_POST['maker'];
$model = $_POST['model'];
$speed = $_POST['speed'];
$ram = $_POST['ram'];
$hd = $_POST['hd'];
$price = $_POST['price'];

$result = mysql_query("SELECT * FROM Products WHERE model = '" . $model . "'");
$row = mysql_fetch_array($result);
if (!$row) {
	mysql_query("INSERT INTO Products (maker, model, type) VALUES( \"" . $maker . "\", \"" . $model . "\", \"PC\" )");
	mysql_query("INSERT INTO PCs (model, speed, ram, hd, price) VALUES( \"" . $model . "\", " . $speed . ", " . $ram . ", " . $hd . ", " . $price . " )");
	echo "added to database";
}
else {
	echo "model already in database";
}
?>

<a href="index.php"><p>GO BACK</a>