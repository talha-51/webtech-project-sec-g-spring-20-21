<?php

session_start();
require_once('../model/incomexpModel.php');
if(isset($_POST['submit'])){	 
    
    $sources = $_POST['Sources'];
	$amount = $_POST['Amount'];
	
	if($sources == "" || $amount == ""){
		echo "null value found...";
	}else{
		$income = [	
                'Sources'	=> $sources, 
                'Amount'	=> $amount, 
            ];
        
            $status = insertIncome($income);				

                if($status){
                    echo "New Income Added";
                    header('location: ../view/incomexp.php');
                }else{
                    echo "error..try again";
                }
        }
    }
?>