<?
$sql = "DELETE FROM Cart WHERE username = '" . current_user()."'";
$r = mysql_query($sql);
?>

<div class="page-header">
  <h1>Checkout complete</h1>
</div>
<h3> Thanks for using Sharks&Brides </h3>
