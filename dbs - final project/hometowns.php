<div class="page-header">
  <h1>Hometowns</h1>
</div>

<?php
$result = mysql_query('SELECT * FROM Hometowns');
echo mysql_error();

if (mysql_num_rows($result) == 0) {
    echo "There are currently no hometowns.";
    exit;
}

?>

<table class="table table-striped">
<thead>
<tr>
  <th>Name</th>
  <th>Population</th>
  <th>Mayor</th>
  <th>Number of Brides Available</th>
</tr>
</thead>

<?php while ($row = mysql_fetch_assoc($result)) { ?>
<tr>
  <td> <a href="/index.php/hometowninfo?id=<?= $row["city_id"]?>"> <?php echo $row["name"]; ?> </a> </td>
  <td><?php echo $row["population"]; ?></td>
  <td><?php echo $row["mayor"]; ?></td>
  <td><?php
		$brides = mysql_query("SELECT * FROM RussianBrides WHERE city_id='" . $row["city_id"] . "'");
		echo mysql_num_rows($brides);
	  ?>
<?php } ?>
</table>
