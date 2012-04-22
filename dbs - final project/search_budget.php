<div class="page-header">
  <h1> Search by <?= $search_type ?></h1>
</div>

<form class="well" action="/index.php/search/budget">
  <label>Budget:</label>
  <input type="text" name="budget" class="span3" value="<?= $_GET['budget'] ?>" placeholder="200">
  <span class="help-inline">0-10000 </span>
  <br />
  <button type="submit" class="btn">Search</button>
</form>
<?
$budget = $_GET['budget'];
if($budget){
    $query = "SELECT pcs.model AS pc_model,  speed, ram, hd, pcs.price AS pc_price,
    printers.price AS printer_price, color, printers.type, pcs.price+printers.price AS total_price, printers.model AS printer_model
    FROM pcs, printers
    WHERE pcs.price+printers.price < '$budget' ORDER BY total_price ASC, color DESC";

    //echo $query;

    $result_laptops = mysql_query($query);

    echo mysql_error();

?>
<h1> System </h1>
<?
  if (mysql_num_rows($result_laptops) == 0) {
      echo "<div class='alert alert-error'>Nothing found within budget.</div>";
      exit;
  }

$row = mysql_fetch_assoc($result_laptops);

?>
<h2> PC </h2>
<table class="table table-striped">
<thead>
<tr>
  <th>Model</th>
  <th>Speed</th>
  <th>RAM</th>
  <th>HD</th>
  <th>Price</th>
</tr>
</thead>
<tr>
  <td><?= $row["pc_model"] ?></td>
  <td><?= $row["speed"] ?> Ghz</td>
  <td><?= $row["ram"] ?> GB</td>
  <td><?= $row["hd"] ?> GB</td>
  <td>$<?= $row["pc_price"] ?></td>
</table>

<h2> Printer </h2>
<table class="table table-striped">
<thead>
<tr>
  <th>Model</th>
  <th>Color</th>
  <th>Price</th>
</tr>
</thead>
  <td><?= $row["printer_model"] ?></td>
  <td><?= $row["color"] ?></td>
  <td>$<?= $row["printer_price"] ?></td>
</table>

<?  } ?>
