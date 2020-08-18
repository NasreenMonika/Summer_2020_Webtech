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
	<title>Delete Company</title>
</head>
<body>

	<form action="../php/updateCompany.php" method="post">
		<fieldset>
			<legend>Delete Company</legend>
			<table>
				<tr>
					<td></td>
					<td>
						Do you want to delete?
						<input type="submit" name="delete" value="Delete">
						<input type="hidden" name="id" value="<?=$user['id']?>"> 
						<a href="all_company.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>