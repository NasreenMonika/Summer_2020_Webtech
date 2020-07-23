<?php
if(isset($_GET['gender']))
{
	echo $_GET['gender'];
}
if(isset($_GET['submit']) && !isset($_GET['gender']))
	{
		echo "Gender Required";
	}
?>

<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Gender</legend>
			<input type="radio" name="gender" value="Male"> Male
			<input type="radio" name="gender" value="Female">Female
			<input type="radio" name="gender" value="Other"> Other
			<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>