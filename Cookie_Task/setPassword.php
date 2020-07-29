<?php
if(isset($_POST['submit'])){
	if(!empty($_POST['Password']) && !empty($_POST['newPassword']))
	{
		if($_POST['Password']==$_POST['newPassword'])
		{
			setcookie('password', $_POST['Password'], time()+3600, '/');
			header('location: login.html');
		}
	}
}
?>