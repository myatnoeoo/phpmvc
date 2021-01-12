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

<h2>User Table</h2>
<button onclick="location.href='/home/create';" >Create User</button> <br><br>
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
			<button onclick="location.href='/home/view/<?php echo $user['id'] ?>';" >Detail</button>
			<button onclick="location.href='/home/edit/<?php echo $user['id'] ?>';" >Edit</button>
			<button onclick="ConfirmDelete()">Delete</button>
		</td>
	</tr>
	<?php } ?>
</table>
<script type="text/javascript">
      function ConfirmDelete()
      {
            if (confirm("Are you sure to delete?"))
                 location.href='/home/delete/<?php echo $user['id'] ?>';
      }
  </script>
</body>
</html>