<?php
	session_start();
	require_once('../model/cattleHealthDetailsModel.php');

	if(isset($_POST['submit'])){
        $aId= $_POST['aId'];
		$lSickness = $_POST['lSickness'];
		$nDisease = $_POST['nDisease'];
		$checked = $_POST['checked'];
		

		if($lSickness == "" || $nDisease == "" || $checked == ""){
			echo "null value found...";
		}else{

			$data = [	
				'aId' => $aId, 
				'lSickness' => $lSickness, 
				'nDisease' =>$nDisease,
				'checked' => $checked
			];
			$status = updateData($data);				

			if($status){
				header('location: ../view/cattleHealthDetails.php');
			}else{
				echo "error..try again";
			}
		}
	}
?>