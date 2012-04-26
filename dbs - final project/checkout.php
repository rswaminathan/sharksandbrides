<div class="page-header">
  <h1> Your Cart </h1>
</div>

<?
$username = current_user();
if (!$username){ ?>
  <script type="text/javascript">
    window.location = "/index.php/ureg"
  </script>
<?}
if (isset($_GET['item_id'])) {
  $item_id = $_GET['item_id'];
  $item_type = $_GET['type'];
  $result = mysql_query("INSERT INTO Cart(item_id, username, type) VALUES('$item_id', '$username', '$item_type')");
?>

<div class="alert alert-success">
Item has been added to cart.
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
<? $items = mysql_query("SELECT * FROM Cart WHERE username='$username'");
while ($row = mysql_fetch_assoc($items)){
  //get either shark or bride
  $item_id = $row["item_id"];

  if ($row["type"] == "shark"){
    $item = mysql_query("SELECT * FROM Sharks WHERE item_id='$item_id'");
    $type = "Sharks";
  }
  else{
    $item = mysql_query("SELECT * FROM RussianBrides WHERE item_id='$item_id'");
    $type = "RussianBrides";
  }
  $item = mysql_fetch_array($item);
  $product = mysql_fetch_array(mysql_query("SELECT * FROM Products WHERE item_id='$item_id'"));
  $item_id = $item["item_id"];
  $pictures = mysql_query("SELECT * From Pictures WHERE picture_id=(SELECT picture_id FROM $type WHERE item_id='$item_id')");
  $picture = mysql_fetch_array($pictures);
  $picture_url = $picture["picture_url"];
?>
  <div class="row">
    <div class="span4"> <img src="/<?= $picture_url ?>" height="100px" width="100px"> </div>
    <div class="span4"><?= $item["name"] ?></div>
    <div class="span3"> $<?= $product["price"] ?> </div>
  </div>
<? } ?>
</div>

<div class="checkout" style="float:right;">
<a href="/index.php/checkout" class="btn btn-large btn-primary">Checkout</a>
</div>
