<?php
if (isset($_GET['SSC']) || isset($_GET['HSC']) || isset($_GET['BSc'])) 
{
	if (!empty($_GET['SSC'])) 
	{
		echo $_GET['SSC'];
	}
	if (!empty($_GET['HSC'])) 
	{
		echo $_GET['HSC'];
	}
	if(!empty($_GET['BSc'])) 
	{
		echo $_GET['BSc'];
	}
}
else
{
	if (isset($_GET['submit']))
	{
		echo "Please select a degree";
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
			<legend>Degree</legend>
			<input type="checkbox" name="SSC" value="SSC"> SSC
			<input type="checkbox" name="HSC" value="HSC"> HSC
			<input type="checkbox" name="BSc" value="BSc"> BSc<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>