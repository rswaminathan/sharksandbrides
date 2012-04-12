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

echo "<h1>PART C</h1>";

$maker = $_POST['maker'];
$result = mysql_query("SELECT * FROM Products WHERE maker = '" . $maker. "'");

echo "<p>Your search: ";
echo "<p>Manufacturer (maker): " . $maker;

echo "<h2>Product Results: </h2>";
$count = 0;

while($row = mysql_fetch_array($result)) {
	$count = $count + 1;
    $pcs = mysql_query("SELECT * FROM PCs WHERE model = '" . $row['model'] . "'");
	$laptops = mysql_query("SELECT * FROM Laptops WHERE model = '" . $row['model'] . "'");
	$printers = mysql_query("SELECT * FROM Printers WHERE model = '" . $row['model'] . "'");
    $prow = mysql_fetch_array($pcs);
	if (!$prow) {
        $prow = mysql_fetch_array($laptops);
		if (!$prow) {
            $prow = mysql_fetch_array($printers);
			echo "<h3>PRODUCT " . $count . "</h3>";
			echo "<p>Model: " . $prow['model'];
			echo "<p>Color: " . $prow['color'];
			echo "<p>Type: " . $prow['type'];
			echo "<p>Price: $" . $prow['price'];
	    }
		else {
			echo "<h3>PRODUCT " . $count . "</h3>";
			echo "<p>Model: " . $prow['model'];
			echo "<p>Speed: " . $prow['speed'] . " gHZ";
			echo "<p>Hard Drive: " . $prow['hd'] . " GB";
			echo "<p>RAM: " . $prow['ram'] . " GB";
			echo "<p>Screen Size: " . $prow['screen'] . " inches";
			echo "<p>Price: $" . $prow['price'];
		}
	}
	else {
	  	echo "<h3>PRODUCT " . $count . "</h3>";
        echo "<p>Model: " . $prow['model'];
	    echo "<p>Speed: " . $prow['speed'] . " gHZ";
        echo "<p>Hard Drive: " . $prow['hd'] . " GB";
        echo "<p>RAM: " . $prow['ram'] . " GB";
        echo "<p>Price: $" . $prow['price'];  
	}
}
?>

<a href="index.php"><p>GO BACK</a>