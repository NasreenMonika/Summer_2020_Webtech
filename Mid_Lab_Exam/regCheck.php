<?php
if(isset($_POST['submit']))
{

	$name = $_POST['name'];
	$id = $_POST['id'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];
	$userType = $_POST['userType'];

	if(empty($id) || empty($password) || empty($email) || empty($name) || empty($confirmPassword) || empty($userType))
	{
		echo "null submission".'<a href="registration.html"><u>Home</a>';
	}
	else 
	{

		if($password!=$confirmPassword)
		{
			echo "Match Password".'<a href="registration.html"><u>Home</a>';
		}
		else
		{

		$file=fopen('user.txt','a');
		fwrite($file,$name.'|'.$id.'|'.$email.'|'.$password.'|'.$userType."/r/n");
		fclose($file);

		header('location: login.html');
		}
	}

}
else
{
	//header("location: login.html");
	echo "Not Set";
}

?>