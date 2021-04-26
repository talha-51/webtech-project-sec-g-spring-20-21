<?php
	session_start();
	require_once('../model/transactionHistoryModel.php');
	$username=$_GET['type'];
	$status = deleteData($username);				

	if($status){
		header('location: ../view/atransactionHistory.php');
	}else{
		echo "error..try again";
	}
?>