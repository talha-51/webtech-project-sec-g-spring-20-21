<?php
	session_start();
	require_once('../model/userModel.php');
	$username=$_GET['username'];
	$status = deleteUser($username);				

	if($status){
		header('location: ../view/manageUsers.php');
	}else{
		echo "error..try again";
	}
?>