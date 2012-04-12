<div class="page-header">
  <h1>Insert new PC</h1>
</div>

<form class="well" action="/create">
  <label> Model #:</label>
  <input type="text" name="model" class="span3" value="<?= $_GET['model'] ?>" placeholder="1001">
  <span class="help-inline"> </span>
  <br />
  <label> Speed:</label>
  <input type="text" name="speed" class="span3" value="<?= $_GET['speed'] ?>" placeholder="1.2">
  <span class="help-inline"> In Ghz</span>
  <br />
  <label> RAM:</label>
  <input type="text" name="ram" class="span3" value="<?= $_GET['ram'] ?>" placeholder="1">
  <span class="help-inline"> In GB</span>
  <br />
  <label> HD:</label>
  <input type="text" name="hdd" class="span3" value="<?= $_GET['hdd'] ?>" placeholder="120">
  <span class="help-inline"> In GB</span>
  <br />
  <label> Manufacturer:</label>
  <input type="text" name="man" class="span3" value="<?= $_GET['man'] ?>" placeholder="Apple">
  <span class="help-inline"> </span>
  <br />
  <label> Price:</label>
  <input type="text" name="price" class="span3" value="<?= $_GET['price'] ?>" placeholder="1000">
  <span class="help-inline"> In dollars</span>
  <br />
  <button type="submit" class="btn">Insert</button>
</form>
<?
$speed = $_GET['speed'];
$ram = $_GET['ram'];
$hdd = $_GET['hdd'];
$man = $_GET['man'];
$price = $_GET['price'];
$model = $_GET['model'];

if($price){
  $result = mysql_query("INSERT INTO products(maker, model, type) VALUES('$man', '$model', '$type')");
  if (!$result) {
    echo "<div class='alert alert-error'> Could not insert into database</div>";
    exit;
  }
  else{
    $result = mysql_query("INSERT INTO pcs(model, speed, ram, hd, price) VALUES('$model', '$speed', '$ram', '$hdd', '$price')");
    echo "<div class='alert alert-success'> Inserted new product.";
  }

  echo mysql_error();

?>
<?  } ?>
