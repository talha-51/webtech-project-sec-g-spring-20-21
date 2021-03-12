<?php

	session_start();
	unset($_SESSION['flag']);
	unset($_SESSION['profPicName']);
	unset($_SESSION['username']);
	header('location: ../view/login.html');

?>