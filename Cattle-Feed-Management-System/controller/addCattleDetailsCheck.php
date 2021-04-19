<?php
	session_start();
	require_once('../model/cattleDetailsModel.php');

	if(isset($_POST['submit'])){

		$fUsername = $_POST['fUsername'];
		$cattleAmount = $_POST['cattleAmount'];
		$sickcattleAmount = $_POST['sickcattleAmount'];
		$freq = $_POST['freq'];
		

		if($fUsername == "" || $cattleAmount == "" || $sickcattleAmount == "" || $freq == ""){
			echo "null value found...";
		}else{

			$data = [	
				'fUsername' => $fUsername, 
				'cattleAmount' => $cattleAmount, 
				'sickcattleAmount' =>$sickcattleAmount,
				'freq' => $freq
			];
		
			$status = insertData($data);				

			if($status){
				header('location: ../view/cattleDetails.php');
			}else{
				echo "error..try again";
			}
		}
	}
?>