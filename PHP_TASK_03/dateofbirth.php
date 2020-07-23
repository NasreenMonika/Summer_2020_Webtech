<?php
$flag=true;

if (isset($_GET['day'])) 
{
	$date=(int)$_GET['day'];
	if ($date>0 && $date<=31) {
		echo $date;
	}
	else
	{
		$flag=false;
	}
}

if (isset($_GET['month'])) 
{
	$month=(int)$_GET['month'];
	if ($month>0 && $month<=12) 
	{
		echo $month;
	}
	else
	{
		$flag=false;
	}
}
if (isset($_GET['year']))
{
	$year=(int)$_GET['year'];
	if ($year>=1900 && $year<=2016) {
		echo $year;
	}
	else
	{
		$flag=false;
	}
}
if ($flag==false)
{
	echo "invalid";
}

?>


<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Date of Birth</legend>
			<pre class="tab">      dd                           mm                      yyyy</pre><br>
			<input type="text" name="day">/
			<input type="text" name="month">/
			<input type="text" name="year"><br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>