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

	<form action="../php/insertCompany.php" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>New Company</legend>
			<table>
				<tr>
					<td>id</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>company_name</td>
					<td><input type="text" name="company_name"></td>
				</tr>
				<tr>
					<td>profile_description</td>
					<td><input type="text" name="profile_description"></td>
				</tr>
				<tr>
					<td>industry</td>
					<td><input type="text" name="industry"></td>
				</tr>
				<tr>
					<td>company_website</td>
					<td><input type="text" name="company_website"></td>
				</tr>
				<tr>
					<td>company_logo</td>
					<td><input type="file" name="company_logo"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="insert" value="insert"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
© 2020 GitHub, Inc.