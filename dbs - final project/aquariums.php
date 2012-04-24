<div class="page-header">
  <h1>Aquariums</h1>
</div>

<?php
$result = mysql_query('SELECT * FROM Aquariums');
echo mysql_error();

if (mysql_num_rows($result) == 0) {
    echo "There are currently no aquariums.";
    exit;
}

?>

<table class="table table-striped">
<thead>
<tr>
  <th>Name</th>
  <th>Date Founded</th>
  <th>Owner</th>
  <th>Manager</th>
  <th>Number of Sharks Available</th>
</tr>
</thead>

<?php while ($row = mysql_fetch_assoc($result)) { ?>
<tr>
  <td><?php echo $row["name"]; ?></td>
  <td><?php echo $row["date_founded"]; ?></td>
  <td><?php echo $row["owner"]; ?></td>
  <td><?php echo $row["manager"]; ?></td>
  <td><?php 
		$sharks = mysql_query("SELECT * FROM Sharks WHERE aquarium_id='" . $row["aquarium_id"] . "'");
		echo mysql_num_rows($sharks); 
	  ?>
<?php } ?>
</table>