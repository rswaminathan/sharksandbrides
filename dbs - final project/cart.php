<div class="page-header">
  <h1> Your Cart </h1>
</div>

<? if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $item_id = $_POST['item_id'];
  $customer_id = current_user();
  $result = mysql_query("INSERT INTO Cart(item_id, customer_id) VALUES('$item_id', '$customer_id')");
 ?>

<div class="alert alert-success">
<?= $_POST[$item] ?> has been added to cart.
</div>
<? }
?>

<div class="well">
  <div class="row">
    <div class="span4">
      <img src="/static/shark.png">
    </div>
    <div class="span4">
      Blue Whale
    </div>
    <div class="span3">
      $29.99
    </div>
  </div>
</div>
<form class="checkout" action="/index.php/checkout/">
  <button type="submit" class="btn btn-large btn-primary" style="float:right;">Checkout</button>
</form>
<?
$input_price = $_GET['price'];
echo $input_price;
if($input_price){
  $result = mysql_query("SELECT maker, pcs.model, speed, price FROM pcs, products WHERE pcs.model = products.model ORDER BY ABS(price - '$input_price' )");
  echo mysql_error();

  if (mysql_num_rows($result) == 0) {
      echo "Nothing found";
      exit;
  }

?>
<table class="table table-striped">
<thead>
<tr>
  <th>Model</th>
  <th>Maker</th>
  <th>Speed</th>
  <th>Price</th>
</tr>
</thead>
<?  while ($row = mysql_fetch_assoc($result)) { ?>
<tr>
  <td><?= $row["model"] ?></td>
  <td><?= $row["maker"] ?></td>
  <td><?= $row["speed"] ?> Ghz</td>
  <td><?= $row["price"] ?></td>
<? break;} ?>
</table>

<?  } ?>
