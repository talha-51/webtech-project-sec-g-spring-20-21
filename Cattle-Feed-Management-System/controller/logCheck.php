<?php

	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null input...";
		}else{

			$user = $_SESSION['current_user'];

			if($user['username'] == $username && $user['password'] == $password){
				if($username[0]=='a'){
					$_SESSION['flag'] = true;
					header('location: ../view/adminHome.php');
				}
				else if($username[0]=='m'){
					$_SESSION['flag'] = true;
					header('location: ../view/managerHome.php');
				}
				else if($username[0]=='f'){
					$_SESSION['flag'] = true;
					header('location: ../view/farmerHome.php');
				}
				else if($username[0]=='h'){
					$_SESSION['flag'] = true;
					header('location: ../view/healthExpertHome.php');
				}
			}else{
				echo "invalid user...";
			}
		}
	}


?>