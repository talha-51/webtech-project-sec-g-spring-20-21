<?php
	
	require_once('db.php');

	function getAllTransactionHistory(){
		$conn = getConnection();
		$sql = "select * from transactionhistory";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}

	function insertData($data){
		$conn = getConnection();
		$sql = "insert into transactionhistory values('{$data['type']}', '{$data['aInvested']}', '{$data['pGained']}', {$data['oExpenses']})";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateData($data){
		$conn = getConnection();
		$sql = "UPDATE transactionhistory SET aInvested='{$data['aInvested']}',pGained='{$data['pGained']}',oExpenses='{$data['oExpenses']}' WHERE type='{$data['type']}' ";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteData($username){
		$conn = getConnection();
		$sql = "delete from transactionhistory where type='{$username}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>