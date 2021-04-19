<?php

	session_start();
	unset($_SESSION['flag']);
	unset($_SESSION['profPicName']);
	unset($_SESSION['username']);
	unset($_SESSION['profPic']);

	//setcookie('username', true, time()-10, '/');
	header('location: ../view/login.html');

?>