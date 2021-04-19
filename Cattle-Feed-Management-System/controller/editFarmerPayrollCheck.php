<?php
	session_start();
	require_once('../model/farmerPayrollModel.php');

	if(isset($_POST['submit'])){
        $fUsername= $_POST['fUsername'];
		$aPaid = $_POST['aPaid'];
		$wAmount = $_POST['wAmount'];
		

		if($aPaid == "" || $wAmount == ""){
			echo "null value found...";
		}else{

			$data = [	
				'fUsername' => $fUsername, 
				'aPaid' => $aPaid, 
				'wAmount' =>$wAmount
			];
			$status = updateData($data);				

			if($status){
				header('location: ../view/farmerPayroll.php');
			}else{
				echo "error..try again";
			}
		}
	}
?>