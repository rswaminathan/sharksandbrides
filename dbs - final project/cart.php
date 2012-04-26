<div class="page-header">
  <h1> Your Cart </h1>
</div>

<?
$customer_id = current_user();
if (!$customer_id){ ?>
  <script type="text/javascript">
    window.location = "/index.php/ureg"
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
  //find whether shark or bride
  $item_id = $row["item_id"];
  $is_shark = mysql_query("SELECT * FROM Sharks WHERE item_id='$item_id'");

  if ($is_shark){
    $item = $is_shark;
  }
  else{
    $item = mysql_query("SELECT * FROM RussianBrides WHERE item_id='$item_id'");
  }
  $product = mysql_query("SELECT * FROM Products WHERE item_id='$item_id'");

  $price = "29.99";
  $picture = "";
?>
  <div class="row">
    <div class="span4"> <img src="/<?= $item ?>" height="100px" width="100px"> </div>
    <div class="span4"><?= $item["name"] ?></div>
    <div class="span3"> $<?= $product["price"] ?> </div>
  </div>
<? } ?>
</div>
