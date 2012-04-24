<?
session_start();

function current_user(){
  if ($_SESSION['username'])
    return $_SESSION['username'];
  else
    return false;
}
?>
