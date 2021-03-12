<?php

	session_start();
	unset($_SESSION['flag']);
	unset($_SESSION['profPicName']);
	header('location: ../view/login.html');

?>