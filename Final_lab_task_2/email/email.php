<?php

if(isset($_POST['submit']))
{
	echo $_POST['email'];
	header('location: ../gender/gender.html');
}

?>