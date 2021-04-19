<?php
	
	require_once('db.php');

	function getAllCattleDetails(){
		$conn = getConnection();
		$sql = "select * from cattledetails";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}

	function insertData($data){
		$conn = getConnection();
		$sql = "insert into cattledetails values('{$data['fUsername']}', '{$data['cattleAmount']}', '{$data['sickcattleAmount']}', {$data['freq']})";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateData($data){
		$conn = getConnection();
		$sql = "UPDATE cattledetails SET cAmount='{$data['cAmount']}',scAmount='{$data['scAmount']}',fReq='{$data['freq']}' WHERE fUsername='{$data['fUsername']}' ";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteData($username){
		$conn = getConnection();
		$sql = "delete from cattledetails where fUsername='{$username}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>