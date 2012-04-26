<div class="banner">
  <div class="row">
    <div class="span4">
    </div>
    <div class="span8">
    <div id="myCarousel" class="carousel">
      <div class="carousel-inner">
        <div class="active item">…</div>
        <div class="item">…</div>
        <div class="item">…</div>
      </div>
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
    </div>
  </div>
</div>

<?
$result = mysql_query('SELECT * FROM products');
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
  <th>Type</th>
</tr>
</thead>
<?  while ($row = mysql_fetch_assoc($result)) { ?>
<tr>
  <td><?= $row["model"] ?></td>
  <td><?= $row["maker"] ?></td>
  <td><?= $row["type"] ?></td>
<? } ?>
</table>
