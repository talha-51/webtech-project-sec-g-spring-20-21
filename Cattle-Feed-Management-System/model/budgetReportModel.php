<?php
	
	require_once('db.php');

	function getAllBudgetReport(){
		$conn = getConnection();
		$sql = "select * from budgetreport";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}

	function insertData($data){
		$conn = getConnection();
		$sql = "insert into budgetreport values('{$data['fUsername']}', '{$data['sBudget']}', '{$data['bUsed']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateData($data){
		$conn = getConnection();
		$sql = "UPDATE budgetreport SET sBudget='{$data['sBudget']}',bUsed='{$data['bUsed']}' WHERE fUsername='{$data['fUsername']}' ";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteData($username){
		$conn = getConnection();
		$sql = "delete from budgetreport where fUsername='{$username}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>