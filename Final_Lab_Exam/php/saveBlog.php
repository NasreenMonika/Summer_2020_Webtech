<?php

	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	$username=$_SESSION['username'];
	$blogId=$_POST['blogId'];
	$blogbody=$_POST['blogbody'];

	$user = [
				'username'=> $username,
				'blogId'=> $blogId,
				'blogbody'=> $blogbody,
			];

	$status=insertBlog($user);

	if($status=="Success")
	{
		header("location: ../views/authorhome.php");
	}
	else
	{
		echo "error";
	}


?>