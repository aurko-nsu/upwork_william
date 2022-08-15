<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
table,
td {
    border: 1px solid #333;
}

thead,
tfoot {
    background-color: #333;
    color: #fff;
}
</style>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
<table>
	<caption>All User List</caption>
	<thead>
		<th>Serial</th>
		<th>Name</th>
		<th>Email</th>
	</thead>
	<tbody>
		<?php 
		$counter = 0;
		foreach ($all_user as $db):
		$counter++
		?>
		<tr>
			<td><?php echo $counter ?></td>
			<td><?php echo $db->name ?></td>
			<td><?php echo $db->email ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>