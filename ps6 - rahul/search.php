<div class="page-header">
  <h1> Search by <?= $search_type ?></h1>
</div>

<form class="well" action="/index.php/search/specs">
  <label>Minimum speed:</label>
  <input type="text" name="min_speed" class="span3" value="<?= $_GET['min_speed'] ?>" placeholder="1.2">
  <span class="help-inline"> In Ghz</span>
  <br />
  <label>Minimum RAM:</label>
  <input type="text" name="min_ram" class="span3" value="<?= $_GET['min_ram'] ?>" placeholder="1">
  <span class="help-inline"> In GB</span>
  <br />
  <label>Minimum HD:</label>
  <input type="text" name="min_hdd" class="span3" value="<?= $_GET['min_hdd'] ?>" placeholder="120">
  <span class="help-inline"> In GB</span>
  <br />
  <label>Minimum Screen size:</label>
  <input type="text" name="min_screen" class="span3" value="<?= $_GET['min_screen'] ?>" placeholder="12">
  <span class="help-inline"> In GB</span>
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
