<div class="page-header">
  <h1> Computers</h1>
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
