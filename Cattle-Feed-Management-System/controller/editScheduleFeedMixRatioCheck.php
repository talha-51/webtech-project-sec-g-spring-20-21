<?php
	session_start();
	require_once('../model/scheduleFeedMixRatioModel.php');

	if(isset($_POST['submit'])){
        $type= $_POST['type'];
		$fItems = $_POST['fItems'];
		$ratio = $_POST['ratio'];
		$schedule = $_POST['schedule'];
		

		if($fItems == "" || $ratio == "" || $schedule == ""){
			echo "null value found...";
		}else{

			$data = [	
				'type' => $type, 
				'fItems' => $fItems, 
				'ratio' =>$ratio,
				'schedule' => $schedule
			];
			$status = updateData($data);				

			if($status){
				header('location: ../view/scheduleFeedMixRatio.php');
			}else{
				echo "error..try again";
			}
		}
	}
?>