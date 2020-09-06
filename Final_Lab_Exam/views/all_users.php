<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<a href="adminhome.php">Back</a> |
	<a href="../php/logout.php">Logout</a> 
	
	<h3>User list</h3>

	<table border="1">
		<tr>
			<td>Username</td>
			<td>Name</td>
			<td>Password</td>
			<td>Contact</td>
			<td>Type</td>
			<td>Action</td>
		</tr>

		<?php  
			$users = getAllUser();
			for ($i=0; $i != count($users); $i++) {  ?>
		<tr>
			<td><?=$users[$i]['username']?></td>
			<td><?=$users[$i]['name']?></td>
			<td><?=$users[$i]['password']?></td>
			<td><?=$users[$i]['contact']?></td>
			<td><?=$users[$i]['type']?></td>
			<td>
				<a href=<?="edit.php?id=".$users[$i]['username']?>>Edit</a> |
				<a href=<?="../php/delete.php?id=".$users[$i]['username']?>>Delete</a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>