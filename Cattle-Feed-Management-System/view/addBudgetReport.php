<?php
	$title = "Add Data to Budget Report Page";
	include('header.php');

	
?>

	<a href="budgetReport.php">Back</a>	
	<br>
	
	<marquee><h1>Add Data to Budget Report</h1></marquee>

    <form method="post" action="../controller/addBudgetReportCheck.php">
		<fieldset style="width:30%">
			<table>
				<tr>
					<td>Farmer Username</td>
					<td><input type="text" name="fUsername" id="fUsername" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateFName()"></td>
				</tr>
				<tr>
					<td>Starting Budget</td>
					<td><input type="number" name="sBudget" id="sBudget" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateSBudget()"></td>
				</tr>
				<tr>
					<td>Budget Used</td>
					<td><input type="number" name="bUsed" id="bUsed" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateBUsed()"></td>
				</tr>
				<tr>
					<td></td>
					<td>
					    <input type="submit" name="submit" value="Update">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>

	<script>
		function validateFName(){
			let fUsername= document.getElementById('fUsername').value;
			
			if(fUsername == ""){
				alert("NULL Value");
			}
			else if(fUsername.length < 2){
				alert("Username should contain at least two characters");
			}
			else if(fUsername.charAt(0) >= 0 && fUsername.charAt(0) <= 9){
				alert("Username must start with a letter");
			}
			else{
				if((fUsername>= 'a' && fUsername <= 'z') || (fUsername >= 'A' && fUsername <= 'Z') || (fUsername >=0 && fUsername <=9)){						
					alert("Validation Successfull");
				}
				else{
					alert("Username can contain a-z or A-Z and first character can not be a number");
				}
			}
		}

		function validateSBudget(){
			let sBudget= document.getElementById('sBudget').value;
			
			if(sBudget == ""){
				alert("NULL Value");
			}
			else if(sBudget > 20000 || sBudget<=0){
				alert("Starting Budget must be between 1-20000");
			}
			else{
				alert("Validation Successfull");
			}
		}

		function validateBUsed(){
			let bUsed= document.getElementById('bUsed').value;
			let sBudget= document.getElementById('sBudget').value;
			
			if(bUsed == ""){
				alert("NULL Value");
			}
			else if(bUsed < 0){
				alert("Used Budget can not be less than 0");
			}
			else if(bUsed > sBudget){
				alert("Used Budget can not be more than Starting Budget");
			}
			else{
				alert("Validation Successfull");
			}
		}

	</script>


<?php include('footer.php');?>