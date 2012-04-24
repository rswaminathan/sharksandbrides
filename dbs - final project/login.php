<? function login_form(){
  require_once('login_form.php');
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysql_query("SELECT * FROM Accounts WHERE username='" . $username . "' AND " . "password='" . $password . "'");
  if (mysql_num_rows($result) == 0) { ?>

  <div class="alert alert-error">
  Username/password is invalid.
  </div>

<?
  login_form();
  } else{
  $_SESSION['username'] = $username;
  }
}

else{
  login_form();
}
?>
