<div class="page-header">
  <h1> Search by <?= $search_type ?></h1>
</div>

<form class="well" action="/search/specs">
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
  <span class="help-inline"> In inches</span>
  <br />
  <button type="submit" class="btn">Search</button>
</form>
<?
$min_speed = $_GET['min_speed'];
$min_ram = $_GET['min_ram'];
$min_hdd = $_GET['min_hdd'];
$min_screen = $_GET['min_screen'];
if($min_speed && $min_ram && $min_hdd && $min_screen){
  $result = mysql_query("SELECT laptops.model, maker, speed, ram, hd, screen, price FROM laptops, products WHERE laptops.model = products.model AND speed > '$min_speed'
    AND ram > '$min_ram' AND hd > '$min_hdd' AND screen > '$min_screen'");
  echo mysql_error();

  if (mysql_num_rows($result) == 0) {
      echo "<div class='alert alert-error'>Nothing found</div>";
      exit;
  }

?>
<table class="table table-striped">
<thead>
<tr>
  <th>Model</th>
  <th>Maker</th>
  <th>Speed</th>
  <th>RAM</th>
  <th>HD</th>
  <th>Screen size</th>
  <th>Price</th>
</tr>
</thead>
<?  while ($row = mysql_fetch_assoc($result)) { ?>
<tr>
  <td><?= $row["model"] ?></td>
  <td><?= $row["maker"] ?></td>
  <td><?= $row["speed"] ?> Ghz</td>
  <td><?= $row["ram"] ?> GB</td>
  <td><?= $row["hd"] ?> GB</td>
  <td><?= $row["screen"] ?> in</td>
  <td>$<?= $row["price"] ?></td>
<? ;} ?>
</table>

<?  } ?>
