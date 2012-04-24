<? function register_form(){
  require_once('register_form.php');
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysql_query("SELECT * FROM Accounts WHERE username='" . $username . "' AND " . "password='" . $password . "'");
  if (mysql_num_rows($result) > 0) { ?>

  <div class="alert alert-error">
  Username/password is taken.
  </div>

<?
    register_form();
  } else{
    mysql_query("INSERT INTO `Accounts` (username, password, type) VALUES('" . $username
      . "','" . $password . "','customer')");
    $_SESSION['username'] = $username;
  }
}

else{
    register_form();
  }
?>
