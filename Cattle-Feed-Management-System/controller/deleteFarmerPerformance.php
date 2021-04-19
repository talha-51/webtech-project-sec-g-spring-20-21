<?php
	session_start();
	require_once('../model/farmerPerformanceModel.php');
	$username=$_GET['fUsername'];
	$status = deleteData($username);				

	if($status){
		header('location: ../view/farmerPerformane.php');
	}else{
		echo "error..try again";
	}
?>