<?php

if(isset($_POST['submit']))
{
	if (isset($_POST['ssc'])) 
	{
		echo $_POST['ssc'];
	}
	if (isset($_POST['hsc'])) 
	{
		echo $_POST['hsc'];
	}
	if (isset($_POST['bsc'])) 
	{
		echo $_POST['bsc'];
	}
	header('location: ../bg/bg.html');
	
}

?>