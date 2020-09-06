<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$deleted=delete($_GET['id']);	
	}
	header('location: ../views/all_users.php');

?>