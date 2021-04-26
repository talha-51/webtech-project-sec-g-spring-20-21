<?php
	
require_once('db.php');

function getAllContactAdmin(){
	$conn = getConnection();
	$sql = "select * from contactadmin";
	$result = mysqli_query($conn, $sql);
	$users = [];

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}

	return $users;
}

function insertContactAdmin($text){
	$conn = getConnection();
	$sql = "insert into contactadmin values('$text')";

	if(mysqli_query($conn, $sql)){
		return true;
	}else{
		return false;
	}
}

function deleteContactAdmin($text){
    $conn = getConnection();
    $sql = "delete from contactadmin where text= '$text' ";
        
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

?>