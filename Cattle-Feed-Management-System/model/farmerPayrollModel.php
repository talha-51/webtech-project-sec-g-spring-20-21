<?php
	
	require_once('db.php');

	function getAllFarmerPayroll(){
		$conn = getConnection();
		$sql = "select * from farmerpayroll";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}

	function insertData($data){
		$conn = getConnection();
		$sql = "insert into farmerpayroll values('{$data['fUsername']}', '{$data['aPaid']}', '{$data['wAmount']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateData($data){
		$conn = getConnection();
		$sql = "UPDATE farmerpayroll SET aPaid='{$data['aPaid']}',wAmount='{$data['wAmount']}' WHERE fUsername='{$data['fUsername']}' ";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteData($username){
		$conn = getConnection();
		$sql = "delete from farmerpayroll where fUsername='{$username}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>