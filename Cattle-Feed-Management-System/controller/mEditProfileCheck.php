<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['signup'])){
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];
		

		if($password == "" || $email == ""){
			echo "null value found...";
		}else{
			if(strlen($password)<4){
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
                    'username'	=>$_SESSION['username'], 
					'password'	=> $password, 
					'email'		=>$email
                ];
				$status = updateUser($user);				

				if($status){
					header('location: ../view/mHome.php');
				}else{
					echo "error..try again";
				}
			}
		}
	}


?>