<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome Home!<?=$_SESSION['username']?></h1> 
	<a href="../views/newblog.php">Create New Blog</a> |
	<a href="../php/logout.php">Logout</a> 

	<table border="1">
		<tr>
			<td>Username</td>
			<td>Blog Id</td>
			<td>Blog</td>
			<td>Action</td>
		</tr>

		<?php  
			$users = getAllblog($_SESSION['username']);
			for ($i=0; $i != count($users); $i++) {  ?>
		<tr>
			<td><?=$users[$i]['username']?></td>
			<td><?=$users[$i]['blogId']?></td>
			<td><?=$users[$i]['blogbody']?></td>
			<td>
				<a href=<?='"editblog.php?id='.$users[$i]['blogbody']."&username=".$users[$i]['username'].'"'?>>Edit</a> |
				<a href=<?="../php/deleteblog.php?id=".$users[$i]['username']?>>Delete</a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>