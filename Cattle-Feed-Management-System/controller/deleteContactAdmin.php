<?php
	session_start();
	require_once('../model/contactAdminModel.php');
	$text=$_GET['text'];
	$status = deleteContactAdmin($text);				

	if($status){
		header('location: ../view/contactAdmin.php');
	}else{
		echo "error..try again";
	}
?>