<?php

	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];


		$jsondata = file_get_contents('../model/logInfo.json', 'r');
		$json = json_decode($jsondata,true);


		if($username == "" || $password == ""){
			echo "null input...";
		}else{

			foreach($json['users'] as $user){
				if($user['username'] == $username && $user['password'] == $password){
					if($username[0]=='a'){
						$_SESSION['flag'] = true;
						$_SESSION['username'] = $username;
						header('location: ../view/aHome.php');
					}
					else if($username[0]=='m'){
						$_SESSION['flag'] = true;
						$_SESSION['username'] = $username;
						header('location: ../view/mHome.php');
					}
					else if($username[0]=='f'){
						$_SESSION['flag'] = true;
						$_SESSION['username'] = $username;
						header('location: ../view/fHome.php');
					}
					else if($username[0]=='h'){
						$_SESSION['flag'] = true;
						$_SESSION['username'] = $username;
						header('location: ../view/hHome.php');
					}
				}else{
					echo "invalid user...";
				}
			}
			
		}
	}


?>