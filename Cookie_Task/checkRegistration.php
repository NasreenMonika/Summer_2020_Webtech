<?php
	session_start();

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$uname = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$gender = $_POST['gender'];
		$day = $_POST['day'];
		$month

		if(empty($uname) || empty($password) || empty($email)){
			echo "null submission";
		}else {

			$user = [
						'uname'=>$uname,
						'email'=>$email,
						'password'=>$password
					];

			$_SESSION['uname'] 		= $uname;
			$_SESSION['email'] 		= $email;
			$_SESSION['password'] 	= $password;
			$_SESSION['user'] 		= $user;


			header('location: login.html');
		}

	}else{
		header("location: login.html");
	}


?>