<?php
	session_start();
	require_once('../model/farmerPayrollModel.php');
	$username=$_GET['fUsername'];
	$status = deleteData($username);				

	if($status){
		header('location: ../view/farmerPayroll.php');
	}else{
		echo "error..try again";
	}
?>