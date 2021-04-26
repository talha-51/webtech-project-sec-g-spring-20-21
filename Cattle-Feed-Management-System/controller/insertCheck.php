<?php

session_start();
require_once('../model/userModel.php');
if(isset($_POST['save'])){	 
    
    $username = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
    $fullname = $_POST['fullname'];
	$email = $_POST['email'];
    $usertype = $_POST['usertype'];
    //$gender = $_POST['gender'];

	if($username == "" || $password == "" || $email == "" || $fullname == "" || $usertype == ""){
		echo "null value found...";
	}else{
		if($password == $repassword){

			$user = [	
                'username'	=> $username, 
                'password'	=> $password, 
                'fullname'	=> $fullname, 
                'email'		=> $email, 
                'usertype'	=>$usertype,
                //'gender'	=> $gender,
            ];
        
            $status = insertUser($user);				

                if($status){
                    echo "New user Added";
                    header('location: ../view/manageUsers.php');
                }else{
                    echo "error..try again";
                }
            }
        else {
		    echo "password & confirm password mismatch...";
            }
    }
}
?>