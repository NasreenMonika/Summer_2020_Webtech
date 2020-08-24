<?php

if(isset($_POST['submit']))
{
	echo $_POST['gender'];
	header('location: ../dob/dob.html');
}

?>