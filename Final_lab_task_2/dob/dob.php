<?php

if(isset($_POST['submit']))
{
	echo $_POST['gender'];
	header('location: ../degree/degree.html');
}

?>