<?php
	session_start();
	require_once('../model/contactAdminModel.php');

	if(isset($_POST['submit'])){

		$text = $_POST['text'];
		

		if($text == ""){
			echo "null value found...";
		}else{
		
			$status = insertContactAdmin($text);				

			if($status){
				header('location: ../view/contactAdmin.php');
			}else{
				echo "error..try again";
			}
		}
	}
?>