<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

        $username= $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		

		if($username == "" || $password == "" || $email == ""){
			echo "null value found...";
		}else{

			$user = [
				'username' => $username, 
				'password' => $password, 
				'email' =>$email
			];
			$status = updateUser($user);				

			if($status){
				header('location: ../view/manageUsers.php');
			}else{
				echo "error..try again";
			}
		}
	}
?>