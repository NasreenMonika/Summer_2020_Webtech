<?php
if(isset($_POST['submit']))
{
	if(!empty($_POST['email']))
	{
		if($_POST['email']==$_COOKIE['email'])
		{
			header('location: resetPassword.html');
		}
	}
}
?>