<?php

	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];


		if($username == "" || $password == ""){
			echo "null input...";
		}else{

			$status = validateUser($username, $password);

			if($status){
				if($username[0]== 'A'){
					$_SESSION['flag'] = true;
					$_SESSION['username'] = $username;

					header('location: ../view/home.php');
				}
				else if($username[0]== 'M'){
					$_SESSION['flag'] = true;
					$_SESSION['username'] = $username;

					header('location: ../view/mHome.php');
				}
				else{
					echo "Invalid User.";
				}
				
			}else{
				echo "invalid user...";
			}	
		}
	}
?>