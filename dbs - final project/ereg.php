<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$ecode = $_POST["ecode"];

	if ($ecode == "qwer1234!@#$") {
		$check = mysql_query("SELECT * FROM Accounts WHERE username='" . $username . "'");
		$row = mysql_fetch_array($check);
		if ($row) {
			echo "Username taken.  Go back and choose a different username.";
		} else {
			mysql_query("INSERT INTO `Accounts` (username, password, type) VALUES('" . $username
			. "','" . $password . "','employee')");

			echo "<p class = \"ty-ty\">Thank You For Registering With Sharks and Russian Brides!</p>";

			$check = mysql_query("SELECT * FROM Accounts WHERE username='" . $username . "' AND password='" . $password ."'");

			while($row = mysql_fetch_array($check)) {
				echo "Your username is: " . $row['username'];
				echo "<br/>";
				echo "Your password is: " .$row['password'];
				echo "<br />";
				echo "Don't forget to update your profile!</p>";
			}
		}
	} else {
		echo "Wrong employee code. </br></br>"; ?>

		<p>Please register below: (employee code is "qwer1234!@#$")</p>

		<form action="ereg.php" method="post" >
		Create username: <input type="text" name="username" />
		<br />
		Choose password: <input type="text" name="password" />
		<br />
		Employee Code: <input type="text" name="ecode" />
		<br />
		<input type="submit" value="Register" />
		</form>

<?php
	}
} else { ?>
<p>Please register below: (employee code is "qwer1234!@#$")</p>

<form action="ereg.php" method="post">
Create username: <input type="text" name="username" />
<br />
Choose password: <input type="text" name="password" />
<br />
Employee Code: <input type="text" name="ecode" />
<br />
<input type="submit" value="Register" />
</form>

<?php }
?>
