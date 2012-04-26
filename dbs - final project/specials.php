<div class="page-header">
  <h1>Today's Deals</h1>
</div>

<?php
$result = mysql_query('SELECT * FROM Specials');
echo mysql_error();

if (mysql_num_rows($result) == 0) {
    echo "There are currently no specials.";
    exit;
}

?>

<table class="table table-striped">
<thead>
<tr>
</tr>
</thead>

<?php while ($row = mysql_fetch_assoc($result)) {
  $shark_id = $row["shark_id"];
  $shark_pic = mysql_query("SELECT * From Pictures WHERE picture_id=(SELECT picture_id
    FROM SHARKS WHERE item_id='$shark_id')");
  $shark_pic = mysql_fetch_array($shark_pic);
  $shark_pic = $shark_pic["picture_url"];
  $shark_price = mysql_query("SELECT price From Products WHERE item_id=$shark_id AND type='shark'");
  $shark_price = mysql_fetch_array($shark_price);
  $shark_price = $shark_price["price"];
  $bride_id = $row["bride_id"];
  $bride_pic = mysql_query("SELECT * From Pictures WHERE picture_id=(SELECT picture_id
    FROM RussianBrides WHERE item_id='$bride_id')");
  $bride_pic = mysql_fetch_array($bride_pic);
  $bride_pic = $bride_pic["picture_url"];
  $bride_price = mysql_query("SELECT price From Products WHERE item_id=$bride_id AND type='bride'");
  $bride_price = mysql_fetch_array($bride_price);
  $bride_price = $bride_price["price"];
 ?>
<tr>
  <td>
  <?php echo $row["percent_off"]; ?> % Off <br />
  Was: <del><?= $shark_price + $bride_price ?></del><br />
  Now: <?= ($shark_price + $bride_price)*(100-$row["percent_off"])/100 ?><br />
<a href="/index.php/cart?special_id=<?php echo $row["special_id"]; ?>" class="btn btn-primary">Add Special to Cart</a></td>
  <td><img src="/<?php echo $shark_pic; ?>"></td>
  <td><img src="/<?php echo $bride_pic; ?>"></td>
<?php } ?>
</table>
