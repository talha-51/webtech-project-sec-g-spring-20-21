<?php
	session_start();
	require_once('../model/incomexpModel.php');

	if(isset($_POST['submit'])){
        $Sources= $_POST['Sources'];
		$Amount = $_POST['Amount'];
		

		if($Sources == "" || $Amount == ""){
			echo "null value found...";
		}else{

			$income = [	
				'Sources' => $Sources, 
				'Amount' => $Amount, 
			];
			$status = updateIncome($income);				

			if($status){
				header('location: ../view/incomexp.php');
			}else{
				echo "error..try again";
			}
		}
	}
?>