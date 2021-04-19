<?php
	
	require_once('db.php');

	function getAllFeedMixRatio(){
		$conn = getConnection();
		$sql = "select * from cattlescheduleandfeedmixratio";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}

	function insertData($data){
		$conn = getConnection();
		$sql = "insert into cattlescheduleandfeedmixratio values('{$data['type']}', '{$data['fItems']}', '{$data['ratio']}', '{$data['schedule']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateData($data){
		$conn = getConnection();
		$sql = "UPDATE cattlescheduleandfeedmixratio SET fItems='{$data['fItems']}',ratio='{$data['ratio']}',schedule='{$data['schedule']}' WHERE type='{$data['type']}' ";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteData($username){
		$conn = getConnection();
		$sql = "delete from cattlescheduleandfeedmixratio where type='{$username}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>