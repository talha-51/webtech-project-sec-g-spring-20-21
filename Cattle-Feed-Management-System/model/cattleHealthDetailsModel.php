<?php
	
	require_once('db.php');

	function getAllCattleHealthDetails(){
		$conn = getConnection();
		$sql = "select * from cattlehealthdetails";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}

	function insertData($data){
		$conn = getConnection();
		$sql = "insert into cattlehealthdetails values('{$data['aId']}', '{$data['lSickness']}', '{$data['nDisease']}', '{$data['checked']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateData($data){
		$conn = getConnection();
		$sql = "UPDATE cattlehealthdetails SET lSickness='{$data['lSickness']}',nDisease='{$data['nDisease']}',checked='{$data['checked']}' WHERE aId='{$data['aId']}' ";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteData($username){
		$conn = getConnection();
		$sql = "delete from cattlehealthdetails where aId='{$username}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>