<?php
	
require_once('db.php');

function getQuestion(){
	$conn = getConnection();
	$sql = "select * from question";
	$result = mysqli_query($conn, $sql);
	$users = [];

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}

	return $users;
}

function insertQuestion($data){
	$conn = getConnection();
	$sql = "insert into question values('{$data['Question']}', '{$data['AnswerA']}', '{$data['AnswerB']}', '{$data['AnswerC']}')";

	if(mysqli_query($conn, $sql)){
		return true;
	}else{
		return false;
	}
}

function deleteQuestion($data){
    $conn = getConnection();
    $sql = "delete from question where Question='{$data}'";
        
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

?>