<?php
	session_start();
	require_once('../model/cattleDetailsModel.php');
	$username=$_GET['fUsername'];
	$status = deleteData($username);				

	if($status){
		header('location: ../view/cattleDetails.php');
	}else{
		echo "error..try again";
	}
?>