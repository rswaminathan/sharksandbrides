<div class="page-header">
  <h1>Review Purchase</h1>
</div>

<?
$username = current_user();
if (!$username){ ?>
  <script type="text/javascript">
    window.location = "/index.php/ureg"
  </script>
<?} ?>

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
  $total_price = mysql_fetch_array(mysql_query("SELECT SUM(price) FROM Cart WHERE username='$username'"));
  $total_price = $total_price["SUM(price)"];
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
  <div class="row">
    <div class="span3" style="float:right;">
    <h3>Price: $<span class="price"><?= $total_price ?></span></h3>
    Shipping: <select id="shipping">
    <? $methods = mysql_query("SELECT * From ShippingMethods");
  while ($row = mysql_fetch_assoc($methods)){
?>
  <option data-price="<?= $row["shipment_cost"] ?>"> <?= $row["shipper_name"] . " (" . $row["shipment_type"] . ") - $" . $row["shipment_cost"] ?></option>
<? } ?>
    </select>
    <h3>Total: $<span id="total_price"><?= $total_price + 1000?></span></h3>
    </div>
  </div>

<div class="checkout" style="float:right;">
<a href="/index.php/confirm" class="btn btn-large btn-primary">Confirm Purchase</a>
</div>
<script>
    $.ready(
      $("#shipping").change(function(){
        $("#total_price").text($("option:selected").data("price") + parseInt($(".price").text()))
      })
    )
</script>
