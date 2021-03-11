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
					header('location: ../view/aHome.php');
				}
				else if($username[0]=='m'){
					$_SESSION['flag'] = true;
					header('location: ../view/mHome.php');
				}
				else if($username[0]=='f'){
					$_SESSION['flag'] = true;
					header('location: ../view/fHome.php');
				}
				else if($username[0]=='h'){
					$_SESSION['flag'] = true;
					header('location: ../view/hHome.php');
				}
			}else{
				echo "invalid user...";
			}
		}
	}


?>