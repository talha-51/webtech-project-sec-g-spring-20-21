<?php
	session_start();
	require_once('../model/cattleHealthDetailsModel.php');
	$username=$_GET['aId'];
	$status = deleteData($username);				

	if($status){
		header('location: ../view/cattleHealthDetails.php');
	}else{
		echo "error..try again";
	}
?>