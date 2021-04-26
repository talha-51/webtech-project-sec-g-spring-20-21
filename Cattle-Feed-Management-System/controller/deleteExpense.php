<?php
	session_start();
	require_once('../model/incomexpModel.php');
	$sources=$_GET['Sources'];
	$status = deleteExpense($sources);				

	if($status){
		header('location: ../view/incomexp.php');
	}else{
		echo "error..try again";
	}
?>