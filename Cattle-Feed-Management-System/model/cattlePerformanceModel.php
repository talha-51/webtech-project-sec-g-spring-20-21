<?php
	
	require_once('db.php');

	function getAllCattlePerformance(){
		$conn = getConnection();
		$sql = "select * from cattleperformance";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}

	function insertData($data){
		$conn = getConnection();
		$sql = "insert into cattleperformance values('{$data['fUsername']}', '{$data['mProduced']}', '{$data['weightGain']}', {$data['cIncrease']})";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateData($data){
		$conn = getConnection();
		$sql = "UPDATE cattleperformance SET mProduced='{$data['mProduced']}',weightGain='{$data['weightGain']}',cIncrease='{$data['cIncrease']}' WHERE fUsername='{$data['fUsername']}' ";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteData($username){
		$conn = getConnection();
		$sql = "delete from cattleperformance where fUsername='{$username}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>