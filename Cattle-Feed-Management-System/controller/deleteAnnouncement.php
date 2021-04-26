<?php
	session_start();
	require_once('../model/announcementModel.php');
	$data=$_GET['Announcement'];
	$status = deleteAnnouncement($data);				

	if($status){
		header('location: ../view/announcement.php');
	}else{
		echo "error..try again";
	}
?>