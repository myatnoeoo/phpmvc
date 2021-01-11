<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Uses Table</h2>
<a href="/home/create">Create User</a>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
  </tr>
	<?php foreach($users as $user){ ?>
	<tr>
		<td><?php echo $user['name'] ?></td>
		<td><?php echo $user['email'] ?></td>
		<td>
			<a href="/home/view/<?php echo $user['id'] ?>">Detail</a>
			<a href="">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>

</body>
</html>