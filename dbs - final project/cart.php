<div class="page-header">
  <h1> Your Cart </h1>
</div>

<?
$customer_id = current_user();
if (!$customer_id){ ?>
  <script type="text/javascript">
    window.location = "/index.php/home"
  </script>
<?}
if (isset($_GET['item_id'])) {
  $item_id = $_GET['item_id'];
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
    <h3>Item</h3>
    </div>
    <div class="span4">
  <h3>Description</h3>
    </div>
    <div class="span3">
  <h3>Price</h3>
    </div>
  </div>
<? $items = mysql_query("SELECT * FROM Cart WHERE customer_id='$customer_id'");
while ($row = mysql_fetch_assoc($items)){
  $item = "Shark";
  $price = "29.99";
  $picture = "";
?>
  <div class="row">
    <div class="span4">
      <img src="/<?= $item ?>" height="100px" width="100px">
    </div>
    <div class="span4">
      <?= $item ?>
    </div>
    <div class="span3">
    $<?= $price ?>
    </div>
  </div>
<? } ?>
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
