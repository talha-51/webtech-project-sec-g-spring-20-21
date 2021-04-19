<?php
	session_start();
	require_once('../model/budgetReportModel.php');
	$username=$_GET['fUsername'];
	$status = deleteData($username);				

	if($status){
		header('location: ../view/budgetReport.php');
	}else{
		echo "error..try again";
	}
?>