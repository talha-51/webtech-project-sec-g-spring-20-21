<?php
	session_start();
	require_once('../model/scheduleFeedMixRatioModel.php');
	$username=$_GET['type'];
	$status = deleteData($username);				

	if($status){
		header('location: ../view/scheduleFeedMixRatio.php');
	}else{
		echo "error..try again";
	}
?>