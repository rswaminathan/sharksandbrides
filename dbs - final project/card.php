<?php function update_form(){
  require_once('card_form.php');
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $type = $_POST["type"];
  $cardnumber = $_POST["cardnumber"];

  $sql = mysql_query("INSERT INTO creditcards (username, type, first_name, last_name, card_number) VALUES ( '".current_user()."','".$type."','".$firstname."', '".$lastname." ', '".$cardnumber."')");
}

echo "<h1>Current Info:</h1>";
$result = mysql_query("SELECT * FROM creditcards WHERE username='" . current_user() . "'");
$cardnum=1;
if (mysql_num_rows($result) > 0) { 
	while ($row = mysql_fetch_assoc($result)) {
	  echo "Card # ". $cardnum."<br>";
	  echo "Your firstname is: </br>";
	  echo "<b>".$row["first_name"]."</b> </br>";
	  echo "Your lastname is: </br>";
	  echo "<b>".$row["last_name"]."</b> </br>";
	  echo "Card type: </br>";
	  echo "<b>".$row["type"]."</b> </br>";
	  echo "Card number: </br>";
	  echo "<b>".$row["card_number"]."</b> </br> </br> </br> </br>";
	  $cardnum=$cardnum+1;
	}
}

update_form();
?>
