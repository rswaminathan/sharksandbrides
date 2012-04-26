<?
$sql = "DELETE FROM Cart WHERE username = '" . current_user()."'";
$r = mysql_query($sql);
?>

<script type="text/javascript">
    window.location = "/index.php/cart"
</script>