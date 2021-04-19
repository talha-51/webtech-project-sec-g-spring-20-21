<?php
	session_start();
	require_once('../model/inventoryListModel.php');
	$username=$_GET['item'];
	$status = deleteData($username);				

	if($status){
		header('location: ../view/mManageInventory.php');
	}else{
		echo "error..try again";
	}
?>