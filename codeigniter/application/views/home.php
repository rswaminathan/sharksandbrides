<?php
//start session
session_start();
//checks if in session
if($_SESSION['username']){
$username = $_SESSION['username'];
}
//otherwise returns to login screen
else{
header("location:index.html");
}
?>

<html>
<head>
<title>Sharks and Russian Brides - Home</title>
<link rel="stylesheet" type="text/css" href="/assets/style.css" />
<script language="JavaScript" src="FusionCharts.js"></script>
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

//connect to server & selects database
mysql_connect("localhost:3306","root","homework") or die('Could not connect');
mysql_select_db("finalproject") or die('Could not select DB');

//access account based on username
$result = mysql_query("SELECT * FROM Accounts WHERE username='" . $username . "'");
//can do more stuff here! :)
?>

</body>
</html>
