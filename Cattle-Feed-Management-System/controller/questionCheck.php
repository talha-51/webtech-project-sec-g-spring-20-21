<?php

session_start();
require_once('../model/questionModel.php');
if(isset($_POST['submit'])){	 
    
    $question = $_POST['Question'];
	$answerA = $_POST['AnswerA'];
	$answerB = $_POST['AnswerB'];
	$answerC = $_POST['AnswerC'];
	
	if($question == "" || $answerA == "" || $answerB == "" || $answerC == "" ){
		echo "null value found...";
	}else{
		$data = [	
                'Question'	=> $question, 
                'AnswerA'	=> $answerA,
                'AnswerB'	=> $answerB,
                'AnswerC'	=> $answerC, 
            ];
        
            $status = insertQuestion($data);				

                if($status){
                    echo "New Question Added";
                    header('location: ../view/questionairre.php');
                }else{
                    echo "error..try again";
                }
        }
    }
?>
