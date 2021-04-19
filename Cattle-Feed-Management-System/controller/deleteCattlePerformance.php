<?php
	session_start();
	require_once('../model/cattlePerformanceModel.php');
	$username=$_GET['fUsername'];
	$status = deleteData($username);				

	if($status){
		header('location: ../view/cattlePerformance.php');
	}else{
		echo "error..try again";
	}
?>