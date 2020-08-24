<?php

if(isset($_POST['submit']))
{
	echo $_POST['name'];
	header('location: ../email/email.html');
}

?>