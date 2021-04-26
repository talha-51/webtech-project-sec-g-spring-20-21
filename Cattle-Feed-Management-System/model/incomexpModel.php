<?php
	
require_once('db.php');

function getIncome(){
	$conn = getConnection();
	$sql = "select * from income";
	$result = mysqli_query($conn, $sql);
	$users = [];

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}

	return $users;
}

function getExpense(){
	$conn = getConnection();
	$sql = "select * from expense";
	$result = mysqli_query($conn, $sql);
	$users = [];

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}

	return $users;
}

function insertIncome($income){
	$conn = getConnection();
	$sql = "insert into income values('{$income['Sources']}', '{$income['Amount']}')";

	if(mysqli_query($conn, $sql)){
		return true;
	}else{
		return false;
	}

}

function insertExpense($expense){
	$conn = getConnection();
	$sql = "insert into expense values('{$expense['Sources']}', '{$expense['Amount']}')";

	if(mysqli_query($conn, $sql)){
		return true;
	}else{
		return false;
	}
	
}

function updateIncome($income){
	$conn = getConnection();
	$sql = "UPDATE income SET Amount='{$income['Amount']}' WHERE Sources='{$income['Sources']}' ";

	if(mysqli_query($conn, $sql)){
		return true;
	}else{
		return false;
	}
}

function updateExpense($expense){
	$conn = getConnection();
	$sql = "UPDATE expense SET Amount='{$expense['Amount']}' WHERE Sources='{$expense['Sources']}' ";

	if(mysqli_query($conn, $sql)){
		return true;
	}else{
		return false;
	}
}

function deleteIncome($sources){
	$conn = getConnection();
	$sql = "delete from income where Sources='{$sources}'";
	
	if(mysqli_query($conn, $sql)){
		return true;
	}else{
		return false;
	}
}

function deleteExpense($sources){
	$conn = getConnection();
	$sql = "delete from expense where Sources='{$sources}'";
	
	if(mysqli_query($conn, $sql)){
		return true;
	}else{
		return false;
	}
}

?>