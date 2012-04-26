<?php function update_form(){
  require_once('account_form.php');
}
?>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $address = $_POST["address"];

  $result = mysql_query("SELECT * FROM Customers WHERE username='" . current_user() . "'");
  if (mysql_num_rows($result) > 0) { 
	$sql = mysql_query("UPDATE Customers SET address=".$address.", last_name=".$lastname.", firstname=".$firstname." WHERE username='" . current_user() . "'");
  } else {
    $sql = mysql_query("INSERT INTO Customers (username, address, last_name, first_name) VALUES ( '".current_user()."','".$address."','".$lastname."', '".$firstname." ')");
  }
}

$result = mysql_query("SELECT * FROM Customers WHERE username='" . current_user() . "'");
if (mysql_num_rows($result) > 0) { 
  $row = mysql_fetch_assoc($result);
  echo "<h1>Current Info:</h1>";
  echo "Your firstname is: </br>";
  echo "<b>".$row["first_name"]."</b> </br>";
  echo "Your lastname is: </br>";
  echo "<b>".$row["last_name"]."</b> </br>";
  echo "Your address is: </br>";
  echo "<b>".$row["address"]."</b> </br> </br> </br> </br>";
} else {
  echo "You don't have a profile yet! Update your info now!";
}

update_form();
?>
