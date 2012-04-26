<?php
$type = "Hometowns";
$id_type = "city_id";
$id = $_GET['id'];
$result = mysql_query("SELECT * FROM $type WHERE $id_type = $id");
echo mysql_error();

if (mysql_num_rows($result) == 0) {
  echo "There are currently no hometowns.";
  exit;
}

?>


<?php while ($row = mysql_fetch_assoc($result)) { ?>
<div class="page-header">
  <h1 style="font-size:58px;">City of <?php echo $row["name"]; ?></h1>
</div>
<div class="well">
  <h3>Population: <?php echo $row["population"]; ?></h3>
  <h3>Mayor: <?php echo $row["mayor"]; ?></h3>
</div>
<div class="row">
<div class="page-header">
  <h1 >Browse Brides:</h1>
</div>
  <div class="span12">
<ul class="thumbnails">
  <?php
		$brides = mysql_query("SELECT * FROM RussianBrides WHERE city_id='" . $row["city_id"] . "'");
while ($bride = mysql_fetch_assoc($brides)) {
  $bride_id = $bride["item_id"];
  $pictures = mysql_query("SELECT * From Pictures WHERE picture_id=(SELECT picture_id
    FROM RussianBrides WHERE item_id='$bride_id')");
  if ($pictures)
    $picture = mysql_fetch_assoc($pictures);
  else
    $picture = "";
?>
<li class="span3">
<div class="thumbnail">
<img src="/<?= $picture["picture_url"] ?>" />
<div class="caption">
<h4> <?= $bride["name"] ?> </h4>
<p>
<a href="/index.php/cart?item_id=<?= $bride_id ?>" class="btn btn-primary">Add to Cart</a>
<a href="/index.php/reviews?id=<?= $bride_id ?>" class="btn">Reviews</a>
</p>
</div>
</div>
</li>
<? } ?>
</ul>
  </div>
</div>

<?php } ?>

