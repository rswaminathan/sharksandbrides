<?
function current_user(){
  session_start();
  if ($_SESSION['user_id'])
    return $_SESSION['user_id'];
  else
    return false;
}
?>
