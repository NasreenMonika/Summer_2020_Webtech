<?php

	if(isset($_POST['Register'])){

		$id = $_POST['id'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$confirmPassword = $_POST['confirmPassword'];

		if(empty($id) || empty($password) || empty($email) || empty($name) || empty($confirmPassword) )
		{
			echo "null submission".'<a href="registration.html"><u>Registration</a>';
		}
		else 
		{

			if($password!=$confirmPassword)
			{
				echo "Match Password".'<a href="registration.html"><u>Registration</a>';
			}
			else
			{
			setcookie('email', $email, time()+3600, '/');
			setcookie('id', $id, time()+3600, '/');
			setcookie('password', $password, time()+3600, '/');
			setcookie('name', $name, time()+3600, '/');
			echo "Problem";

			header('location: login.html');
			}
		}

	}else{
		//header("location: login.html");
		echo "Not Set";
	}


?>