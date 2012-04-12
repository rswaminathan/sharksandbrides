<div class="page-header">
  <h1> Search by <?= $search_type ?></h1>
</div>

<form class="well" action="/search/price">
  <label>Input price:</label>
  <input type="text" name="price" class="span3" value="<?= $_GET['price'] ?>" placeholder="500">
  <span class="help-inline"> In dollars</span>
  <br />
  <button type="submit" class="btn">Submit</button>
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
