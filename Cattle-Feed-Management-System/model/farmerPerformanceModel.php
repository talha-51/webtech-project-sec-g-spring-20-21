<?php
	
	require_once('db.php');

	function getAllFarmerPerformance(){
		$conn = getConnection();
		$sql = "select * from farmerperformance";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}

	function insertData($data){
		$conn = getConnection();
		$sql = "insert into farmerperformance values('{$data['fUsername']}', '{$data['cAmount']}', '{$data['sCattle']}', '{$data['pGained']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateData($data){
		$conn = getConnection();
		$sql = "UPDATE farmerperformance SET cAmount='{$data['cAmount']}',sCattle='{$data['sCattle']}',pGained='{$data['pGained']}' WHERE fUsername='{$data['fUsername']}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteData($username){
		$conn = getConnection();
		$sql = "delete from farmerperformance where fUsername='{$username}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>