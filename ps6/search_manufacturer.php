<div class="page-header">
  <h1> Search by <?= $search_type ?></h1>
</div>

<form class="well" action="/search/manufacturer">
  <label>Manufacturer:</label>
  <input type="text" name="manufacturer" class="span3" value="<?= $_GET['manufacturer'] ?>" placeholder="Apple">
  <span class="help-inline"> Dell, HP, Apple etc.</span>
  <br />
  <button type="submit" class="btn">Search</button>
</form>
<?
$manufacturer = $_GET['manufacturer'];
if($manufacturer){
  $result_laptops = mysql_query("SELECT laptops.model, maker, speed, ram, hd, screen, price FROM laptops, products WHERE laptops.model = products.model AND products.maker = '$manufacturer'");
  echo mysql_error();
  $result_pcs = mysql_query("SELECT pcs.model, maker, speed, ram, hd, price FROM pcs, products WHERE pcs.model = products.model AND products.maker = '$manufacturer'");
  echo mysql_error();
  $result_printers = mysql_query("SELECT printers.model, maker, color, printers.type, price FROM printers, products WHERE printers.model = products.model AND products.maker = '$manufacturer'");
  echo mysql_error();

?>
<ul class="nav nav-tabs">
  <li><a href="#laptops" data-toggle="tab">Laptops</a></li>
  <li><a href="#pcs" data-toggle="tab">PCs</a></li>
  <li><a href="#printers" data-toggle="tab">Printers</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane active" id="laptops">
<h1> Laptops </h1>
<?
  if (mysql_num_rows($result_laptops) == 0) {
      echo "<div class='alert alert-error'>No laptops found.</div>";
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
<?  while ($row = mysql_fetch_assoc($result_laptops)) { ?>
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

</div>


<div class="tab-pane" id="pcs">
<h1> PCs </h1>
<?
  if (mysql_num_rows($result_pcs) == 0) {
      echo "<div class='alert alert-error'>No PC's found.</div>";
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
  <th>Price</th>
</tr>
</thead>
<?  while ($row = mysql_fetch_assoc($result_pcs)) { ?>
<tr>
  <td><?= $row["model"] ?></td>
  <td><?= $row["maker"] ?></td>
  <td><?= $row["speed"] ?> Ghz</td>
  <td><?= $row["ram"] ?> GB</td>
  <td><?= $row["hd"] ?> GB</td>
  <td>$<?= $row["price"] ?></td>
<? ;} ?>
</table>
</div>

<div class="tab-pane" id="printers">
<h1> Printers </h1>
<?
  if (mysql_num_rows($result_printers) == 0) {
      echo "<div class='alert alert-error'>No PC's found.</div>";
  }
?>
<table class="table table-striped">
<thead>
<tr>
  <th>Model</th>
  <th>Maker</th>
  <th>Type</th>
  <th>Color</th>
  <th>Price</th>
</tr>
</thead>
<?  while ($row = mysql_fetch_assoc($result_printers)) { ?>
<tr>
  <td><?= $row["model"] ?></td>
  <td><?= $row["maker"] ?></td>
  <td><?= $row["type"] ?></td>
  <td><?= $row["color"] ?> </td>
  <td>$<?= $row["price"] ?></td>
<? ;} ?>
</table>
</div>

</div>
<?  } ?>
