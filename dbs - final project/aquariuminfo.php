
<?php
$type = "Aquariums";
$id_type = "aquarium_id";
$id = $_GET['id'];
$result = mysql_query("SELECT * FROM $type WHERE $id_type = $id");
echo mysql_error();

if (mysql_num_rows($result) == 0) {
  echo "There are currently no aquariums.";
  exit;
}

?>


<?php while ($row = mysql_fetch_assoc($result)) { ?>
<div class="page-header">
  <h1>Aquarium <?php echo $row["name"]; ?></h1>
</div>
<div class="well">
  <h3>Founded: <?php echo $row["date_founded"]; ?></h3>
  <h3>Manager: <?php echo $row["manager"]; ?></h3>
  <h3>Trainer: <?php echo $row["trainer"]; ?></h3>
</div>
<div class="row">
  <div class="span12">
<ul class="thumbnails">
  <?php
		$sharks = mysql_query("SELECT * FROM Sharks WHERE aquarium_id='" . $row["aquarium_id"] . "'");
while ($shark = mysql_fetch_assoc($sharks)) {
  $shark_id = $shark["item_id"];
  $pictures = mysql_query("SELECT * From Pictures WHERE picture_id=(SELECT picture_id
    FROM SHARKS WHERE item_id='$shark_id')");
  if ($pictures)
    $picture = mysql_fetch_assoc($pictures);
  else
    $picture = "";
?>
<li class="span3">
<div class="thumbnail">
<img src="/<?= $picture["picture_url"] ?>" />
<div class="caption">
<h4> <?= $shark["name"] ?> </h4>
<p>
<a href="/index.php/cart?item_id=<?= $shark_id ?>" class="btn btn-primary">Add to Cart</a>
<a href="/index.php/reviews?id=<?= $shark_id ?>" class="btn">Reviews</a>
</p>
</div>
</div>
</li>
<? } ?>
</ul>
  </div>
</div>

<?php } ?>

