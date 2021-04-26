<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];
		

		if($username == "" || $password == "" || $email == ""){
			echo "null value found...";
		}else{
			
			if(strlen($username)<2){
				echo "Username must be atleast 2 Characters";
			}
			else if($username[0] >= 0 && $username[0] <= 9){
				echo "First character of username can not be a number";
			}
			else if(strlen($password)<4){
				echo "Password must be atleast 4 Characters";
			}
			else if(ctype_upper($password) || ctype_lower($password)){
				echo "Password must have mix of upper and lower letters";
			}
			else if($password != $repass){
				echo "password & confirm password mismatch...";
			}
			else{

				$user = [	
					'username'	=> $username, 
					'password'	=> $password, 
					'email'		=>$email
				];
		
				$status = insertUser($user);				

				if($status){
					header('location: ../view/manageUsers.php');
				}else{
					echo "error..try again";
				}
			}
		}
	}


?>