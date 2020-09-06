<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>

	<form action="../php/regCheck.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Author Name</td>
					<td><input type="text" name="authorName"></td>
				</tr>
				<tr>
					<td>Contact Number</td>
					<td><input type="text" name="number"></td>
				</tr>
				<tr>
					<td>User Name</td>
					<td><input type="text" name="userName"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" name="submit" value="Submit"> 
						<a href="login.php" style="display: none">LogIn</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>