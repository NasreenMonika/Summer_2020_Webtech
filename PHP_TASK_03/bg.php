<?php

if (isset($_GET['bg']))
{
	echo $_GET['bg'];
}
else
{
	
	if(isset($_GET['submit']))
	{
		echo "PLEASE SELECT ";
	}
}
?>

<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			Blood Group 
			<select name="bg">
				<option>A+</option>
				<option>B+</option>
				<option>O+</option>
				<option>AB+</option>
				<option>A-</option>
				<option>B-</option>
				<option>O-</option>
				<option>AB-</option>
			</select>
			<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>