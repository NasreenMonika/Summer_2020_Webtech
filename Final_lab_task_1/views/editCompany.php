<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$user = getByCompanyID($_GET['id']);	
	}else{
		header('location: all_company.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<form action="../php/updateCompany.php" method="post">
		<fieldset>
			<legend>Edit Company</legend>
			<table>
				<tr>
					<td>id</td>
					<td><input type="text" name="id" value="<?=$user['id']?>"></td>
				</tr>
				<tr>
					<td>company_name</td>
					<td><input type="text" name="company_name" value="<?=$user['company_name']?>"></td>
				</tr>
				<tr>
					<td>profile_description</td>
					<td><input type="text" name="profile_description" value="<?=$user['profile_description']?>"></td>
				</tr>
				<tr>
					<td>industry</td>
					<td><input type="text" name="industry" value="<?=$user['industry']?>"></td>
				</tr>
				<tr>
					<td>company_website</td>
					<td><input type="text" name="company_website" value="<?=$user['company_website']?>"></td>
				</tr>
				<tr>
					<td>company_logo</td>
					<td><input type="file" name="company_logo" value="<?=$user['company_logo']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="edit" value="Update"> 
						<a href="all_company.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>