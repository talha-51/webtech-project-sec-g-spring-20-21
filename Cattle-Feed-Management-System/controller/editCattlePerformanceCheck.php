<?php
	session_start();
	require_once('../model/cattlePerformanceModel.php');

	if(isset($_POST['submit'])){
        $fUsername= $_POST['fUsername'];
		$mProduced = $_POST['mProduced'];
		$weightGain = $_POST['weightGain'];
		$cIncrease = $_POST['cIncrease'];
		

		if($mProduced == "" || $weightGain == "" || $cIncrease == ""){
			echo "null value found...";
		}else{

			$data = [	
				'fUsername' => $fUsername, 
				'mProduced' => $mProduced, 
				'weightGain' =>$weightGain,
				'cIncrease' => $cIncrease
			];
			$status = updateData($data);				

			if($status){
				header('location: ../view/cattlePerformance.php');
			}else{
				echo "error..try again";
			}
		}
	}
?>