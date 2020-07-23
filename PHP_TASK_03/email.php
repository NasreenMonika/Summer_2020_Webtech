<?php
if(isset($_GET['Email']))
{
	if(empty($_GET['Email']))
	{
		echo "Invalid";
	}
	else
	{
		echo $_GET['Email'];
	}
}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		Email <br>
		<input type="email" name="Email"><br>
		<input type="submit" name="submit">
	</form>

</body>
</html>