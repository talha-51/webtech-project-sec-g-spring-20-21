<?php
    $title = "Questionairre";
	include('header.php');
	require_once('../model/questionModel.php');
	$data = getQuestion();
?>

<table width = "100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
        <td colspan = "2" align = "center">
            <h1>Cattle Feed Management System</h1>
        </td>
    </tr>
        
	<tr>
		<td colspan = "2" align ="center">
		<form>
                Logged in as <?php echo $_SESSION['username']; ?> | 
                <input type="button" name="" value="Logout" onclick="Logout()">
            </form>
		</td>
	</tr>
	<tr><td colspan = "2" align ="center"><input type="button" name="" value="Go Back" onclick="Return()"><td></tr>
</table><br>



<body>
<center>
    <form method="post" action="../controller/questionCheck.php">
		<table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <fieldset>
                        <legend><h3>CREATE QUESTIONAIRRE</h3></legend>
                        Enter a Question<br/><input type="text" name="Question" id="Question" value="" placeholder="What is the Question?"><br/><br/>
                        Answer A: <input TYPE = 'text' name ='AnswerA' id="AnswerA"  value="" placeholder="Option A"><br/>
						Answer B: <input TYPE = 'text' name ='AnswerB' id="AnswerB"  value="" placeholder="Option B"><br/>
						Answer C: <input TYPE = 'text' name ='AnswerC' id="AnswerC"  value="" placeholder="Option C"><br/>
                        <hr/>
                        <input type="submit" name="submit" id="submit" value="Set this Question">
                    </fieldset>
                </td>
            </tr>
		</table>
		</form>
    
<br><br><h2>Set Questions List</h2>
<table width = 100% border=1 cellspacing=0 cellpadding=0>
	  <tr>
		  <td align = center><b>Question</b></td>
		  <td align = center><b>AnswerA</b></td>
		  <td align = center><b>AnswerB</b></td>
		  <td align = center><b>AnswerC</b></td>
		  <td align = center><b>Actions</b></td>
	  </tr>

<?php

    for($i = 0; $i < count($data); $i++){ ?>
		<tr>
			<td align = center><?=$data[$i]['Question']?></td>
			<td align = center><?=$data[$i]['AnswerA']?></td>
			<td align = center><?=$data[$i]['AnswerB']?></td>
			<td align = center><?=$data[$i]['AnswerC']?></td>
			<td align = center><a href="../controller/deleteQuestion.php?Question=<?=$data[$i]['Question']?>"> Delete </a>
			</td>
		</tr>
	<?php } ?>
</table>

</center>
</body>

<script>
    "use strict"
    function Logout(){
        location.replace("../controller/logout.php")
    }

	function Return(){
        location.replace("home.php")
    }
</script>
</body>
</html>