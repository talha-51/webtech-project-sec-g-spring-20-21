<?php
	//session_start();

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $password == "" || $email == ""){
			echo "null value found...";
		}else{
			if($password == $repass){

				$current_data = file_get_contents('../model/logInfo.json');
				$array_data = json_decode($current_data,true);
				$new_data = array(
							'username' => $username,
							'password' => $password,
							'email' => $email
				);

				$array_data["users"][] =$new_data;
				$json_data = json_encode($array_data, JSON_PRETTY_PRINT);

				if(file_put_contents('../model/logInfo.json', $json_data)){
					header('location: ../view/login.html');
				}else{
					echo "error";
				}

				
			}else{
				echo "password & confirm password mismatch...";
			}
		}
	}


?>