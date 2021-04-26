<?php
	session_start();
	require_once('../model/transactionHistoryModel.php');

	if(isset($_POST['submit'])){

		$type = $_POST['type'];
		$aInvested = $_POST['aInvested'];
		$pGained = $_POST['pGained'];
		$oExpenses = $_POST['oExpenses'];
		

		if($type == "" || $aInvested == "" || $pGained == "" || $oExpenses == ""){
			echo "null value found...";
		}else{

			$data = [	
				'type' => $type, 
				'aInvested' => $aInvested, 
				'pGained' =>$pGained,
				'oExpenses' => $oExpenses
			];
		
			$status = insertData($data);				

			if($status){
				header('location: ../view/atransactionHistory.php');
			}else{
				echo "error..try again";
			}
		}
	}
?>