<? ob_start(); ?>
<?php

$con = mysql_connect("localhost:3306","root","homework");
if(!$con)
    {
    die('Could not connect: ' . mysqlerror());
    }
	
mysql_select_db("finalproject") or die('Could not select DB');

$username = $_POST["username"];
$password = $_POST["password"];

$result = mysql_query("SELECT * FROM Accounts WHERE username='" . $username . 
"' AND password='" . $password . "'");

$count = mysql_num_rows($result);

if($count==1){
while($row = mysql_fetch_array($result)){
session_start();
$_SESSION['username'] = $username;

echo "Login Success";
header("location:home.php");
}
}
else{
echo "Wrong Username and/or Password<br>";
echo "<a href=\"index.html\">Click here to go back</a>";
}

?>
<? ob_flush(); ?>