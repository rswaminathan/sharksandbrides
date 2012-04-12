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

echo "<h1>PART D</h1>";

$budget = $_POST['budget'];
$speed = $_POST['speed'];

$resultpcs = mysql_query("SELECT * FROM PCs");
$resultprinters = mysql_query("SELECT * FROM Printers");

echo "<p>Your search: ";
echo "<p>Budget: " . $budget;
echo "<p>Speed: " . $speed;

echo "<h2>Laptop Results: </h2>";

$mincolor = 9001;
$minbw = 9001;
$colorpc = FALSE;
$bwpc = FALSE;

while($row = mysql_fetch_array($resultpcs)) {
    while($rowj = mysql_fetch_array($resultprinters)) {
		if ($row['price'] + $rowj['price'] <= $budget) {
		    $cost = $row['price'] + $rowj['price'];
			if ($rowj['color']) {
			    if ($cost < $mincolor) {
				    $mincolor = $cost;
					$colorpc = $row;
					$colorprinter = $rowj;
				}
			}
			else{
			    if ($cost < $minbw) {
				    $minbw = $cost;
					$bwpc = $row;
					$bwprinter = $rowj;
				}
			}
		}
	}
	$resultprinters = mysql_query("SELECT * FROM Printers");
}

echo "<h3>CHEAPEST COLOR</h3>";
if ($colorpc == FALSE) {
	echo "no color printer/pc combo";
}
else {
	echo "<h4>PC</h4>";
    echo "<p>Model: " . $colorpc['model'];
	echo "<h4>Printer</h4>";
    echo "<p>Model: " . $colorprinter['model'];
}
echo "<h3>CHEAPEST BLACK</h3>";
if ($bwpc == FALSE) {
	echo "no color printer/pc combo";
}
else {
	echo "<h4>PC</h4>";
    echo "<p>Model: " . $bwpc['model'];
	echo "<h4>Printer</h4>";
    echo "<p>Model: " . $bwprinter['model'];
}

?>

<a href="index.php"><p>GO BACK</a>