<?php
$flag=true;
if(isset($_GET['userid']))
{
	$id=(int)$_GET['userid'];
	if ($id<=0)
	{
		$flag=false;
	}
}
if (isset($_GET['picture']))
{
	if (empty($_GET['picture']))
	{
		$flag=false;
	}
}
if (!$flag)
{
	echo "Please select a picture with proper id";
}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Profile Picture</legend>
			User Id<input type="text" name="userid"><br>
			<br>
			Picture<input type="file" name="picture"><br>
			<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>