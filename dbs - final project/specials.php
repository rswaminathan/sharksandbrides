<div class="page-header">
  <h1>Today's Deals</h1>
</div>

<?php
$result = mysql_query('SELECT * FROM Specials');
echo mysql_error();

if (mysql_num_rows($result) == 0) {
    echo "There are currently no specials.";
    exit;
}

?>

<table class="table table-striped">
<thead>
<tr>
  <th>Special ID</th>
  <th>Percent Off</th>
  <th>Shark ID</th>
  <th>Bride ID</th>
</tr>
</thead>

<?php while ($row = mysql_fetch_assoc($result)) { ?>
<tr>
  <td><?php echo $row["special_id"]; ?></td>
  <td><?php echo $row["percent_off"]; ?></td>
  <td><?php echo $row["shark_id"]; ?></td>
  <td><?php echo $row["bride_id"]; ?></td>
<?php } ?>
</table>