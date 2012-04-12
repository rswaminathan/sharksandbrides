<html>
<head>
<title>Sharks and Russian Brides - Thank You for Registering!</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<h1>Sharks and Russian Brides</h1>
<ul id="list-nav">
<li><a href="home.php">Home</a></li>
<li><a href="survey.php">Add Entry</a></li>
<li><a href="welcome.php">View Data</a></li>
<li><a href="goal.php">Goal Settings</a></li>
<li><a href="reminder.php">Reminder Settings</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>

<?php

$con = mysql_connect("localhost:3306","root","homework");
if(!$con)
    {
    die('Could not connect: ' . mysqlerror());
    }
    
mysql_select_db("finalproject", $con);

$username = $_POST["username"];
$password = $_POST["password"];
$ecode = $_POST["ecode"];

if ($ecode == "qwer1234!@#$") {
    mysql_query("INSERT INTO `Accounts` (username, password, type) VALUES('" . $username 
    . "','" . $password . "','employee')");
	
	echo "<p class = \"ty-ty\">Thank You For Registering With Sharks and Russian Brides!</p>";

    $check = mysql_query("SELECT * FROM Accounts WHERE username='" . $username . "' AND password='" . $password ."'");

    while($row = mysql_fetch_array($check)) {
        echo "<p class=\"ty-info\">Your username is: " . $row['username'];
        echo "<br/>";
        echo "Your password is: " .$row['password'];
        echo "<br />";
    	echo "Don't forget to update your profile!</p>";
	}
	
    echo "<a class=\"ty-link\" href=\"index.html\">Click here to go back</a>";
} else {
    echo "<a class=\"ty-link\" href=\"registration.html\">Wrong employee code. Click here to go back.</a>";
}

?>




</body>
</html>
