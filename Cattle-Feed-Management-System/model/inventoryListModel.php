<?php
	
	require_once('db.php');

	function getAllInventoryList(){
		$conn = getConnection();
		$sql = "select * from invertory";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}

	function insertData($data){
		$conn = getConnection();
		$sql = "insert into invertory values('{$data['item']}', '{$data['sInventory']}', '{$data['dInventory']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateData($data){
		$conn = getConnection();
		$sql = "UPDATE invertory SET sInventory='{$data['sInventory']}',dInventory='{$data['dInventory']}' WHERE item='{$data['item']}' ";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteData($username){
		$conn = getConnection();
		$sql = "delete from invertory where item='{$username}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>