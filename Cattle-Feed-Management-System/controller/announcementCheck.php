<?php

session_start();
require_once('../model/announcementModel.php');
if(isset($_POST['submit'])){	 
    
    $announcement = $_POST['Announcement'];
	
	if($announcement == ""){
		echo "null value found...";
	}else{
		$data = [	
                'Announcement'	=> $announcement, 

            ];
        
            $status = insertAnnouncement($data);				

                if($status){
                    echo "New Announcement Added";
                    header('location: ../view/announcement.php');
                }else{
                    echo "error..try again";
                }
        }
    }
?>
