<?php
	session_start();
	require_once('../model/farmerPerformanceModel.php');

	if(isset($_POST['submit'])){
        $fUsername= $_POST['fUsername'];
		$cAmount = $_POST['cAmount'];
		$sCattle = $_POST['sCattle'];
        $pGained = $_POST['pGained'];
		

		if($fUsername == "" || $cAmount == "" || $sCattle == "" || $pGained == ""){
			echo "null value found...";
		}else{

			$data = [	
				'fUsername' => $fUsername, 
				'cAmount' => $cAmount, 
				'sCattle' =>$sCattle,
                'pGained' =>$pGained,
			];
			$status = insertData($data);				

			if($status){
				header('location: ../view/farmerPerformane.php');
			}else{
				echo "error..try again";
			}
		}
	}
?>