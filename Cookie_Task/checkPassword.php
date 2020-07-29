<?php
if(isset($_POST['submit'])){
	if(!empty($_POST['Password']) && !empty($_POST['newPassword']))
	{
		if($_POST['Password']==$_POST['newPassword'])
		{
		
			if($_POST["CurrentPassword"]==$_COOKIE["password"])
			{
				setcookie('password', $_POST['Password'], time()+3600, '/');
				header('location: dashboard.php');
			}
		}
	}
}
?>