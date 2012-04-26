<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = $_POST["username"];
	$check = mysql_query("SELECT * FROM Accounts WHERE username='" . $username . "'");
	$row = mysql_fetch_array($check);
	if ($row) {
		echo "Your password is: </br></br>";
		echo "<b> &nbsp; &nbsp; &nbsp; &nbsp;" . $row['password'] . "</b></br></br>";
		echo "Please remember your password next time!";
	} else {
		echo "Username not found. </br></br>"; ?>
		
		<p>Enter your username associated with your account:</p>
		<p>(security question implemented in a later patch)</p>

		<form action="egetpw" method="post">
		Username: <input type="text" name="username" />
		<br />
		<input type="submit" value="Get Password!" />
		</form>
		
<?php
	}
} else { ?>
<p>Enter your username associated with your account:</p>
<p>(security question implemented in a later patch)</p>

<form action="egetpw" method="post">
Username: <input type="text" name="username" />
<br />
<input type="submit" value="Get Password!" />
</form>

<?php }
?>