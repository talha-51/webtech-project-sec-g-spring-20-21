<?php
	session_start();
	require_once('../model/questionModel.php');
	$data=$_GET['Question'];
	$status = deleteQuestion($data);				

	if($status){
		header('location: ../view/questionairre.php');
	}else{
		echo "error..try again";
	}
?>