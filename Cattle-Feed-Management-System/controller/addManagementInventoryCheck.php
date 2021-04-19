<?php
	session_start();
	require_once('../model/inventoryListModel.php');

	if(isset($_POST['submit'])){
        $item= $_POST['item'];
		$sInventory = $_POST['sInventory'];
		$dInventory = $_POST['dInventory'];
		

		if($item == "" || $sInventory == "" || $dInventory == ""){
			echo "null value found...";
		}else{

			$data = [	
				'item' => $item, 
				'sInventory' => $sInventory, 
				'dInventory' =>$dInventory
			];
			$status = insertData($data);				

			if($status){
				header('location: ../view/mManageInventory.php');
			}else{
				echo "error..try again";
			}
		}
	}
?>