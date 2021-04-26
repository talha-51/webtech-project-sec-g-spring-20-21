<?php
	
require_once('db.php');

function getAnnouncement(){
	$conn = getConnection();
	$sql = "select * from announcement";
	$result = mysqli_query($conn, $sql);
	$users = [];

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}

	return $users;
}

function insertAnnouncement($data){
	$conn = getConnection();
	$sql = "insert into announcement values('{$data['Announcement']}')";

	if(mysqli_query($conn, $sql)){
		return true;
	}else{
		return false;
	}
}

function deleteAnnouncement($data){
    $conn = getConnection();
    $sql = "delete from announcement where Announcement='{$data}'";
        
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

?>