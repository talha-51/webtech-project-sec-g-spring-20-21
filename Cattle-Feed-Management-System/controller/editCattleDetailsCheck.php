<?php
	session_start();
	require_once('../model/cattleDetailsModel.php');

	if(isset($_POST['submit'])){
        $fUsername= $_POST['fUsername'];
		$cAmount = $_POST['cAmount'];
		$scAmount = $_POST['scAmount'];
		$freq = $_POST['freq'];
		

		if($cAmount == "" || $scAmount == "" || $freq == ""){
			echo "null value found...";
		}else{

			$data = [	
				'fUsername' => $fUsername, 
				'cAmount' => $cAmount, 
				'scAmount' =>$scAmount,
				'freq' => $freq
			];
			$status = updateData($data);				

			if($status){
				header('location: ../view/cattleDetails.php');
			}else{
				echo "error..try again";
			}
		}
	}
?>