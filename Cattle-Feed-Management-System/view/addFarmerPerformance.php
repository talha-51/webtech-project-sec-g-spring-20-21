<?php
	$title = "Add Data to Farmer Performance Page";
	include('header.php');

	
?>

	<a href="farmerPerformane.php">Back</a>	
	<br>
	
	<marquee><h1>Add Data to Farmer Performance</h1></marquee>

    <form method="post" action="../controller/addFarmerPerformanceCheck.php">
		<fieldset style="width:30%">
			<table>
				<tr>
					<td>Farmer Username</td>
					<td><input type="text" name="fUsername" id="fUsername" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateFUsername()"></td>
				</tr>
				<tr>
					<td>Cattle Amount</td>
					<td><input type="number" name="cAmount" id="cAmount" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateCAmount()"></td>
				</tr>
				<tr>
					<td>Sick Cattle</td>
					<td><input type="number" name="sCattle" id="sCattle" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateSCattle()"></td>
				</tr>
                <tr>
					<td>Profit Gained Per Month</td>
					<td><input type="number" name="pGained" id="pGained" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validatePGained()"></td>
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
		function validateFUsername(){
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

		function validateCAmount(){
			let cAmount= document.getElementById('cAmount').value;
			
			if(cAmount == ""){
				alert("NULL Value");
			}
			else if(cAmount > 1000 || cAmount <= 0){
				alert("Cattle Amount must be between 1-1000");
			}
			else{
				alert("Validation Successfull");
			}
		}

		function validateSCattle(){
			let sCattle= document.getElementById('sCattle').value;
			
			if(sCattle == ""){
				alert("NULL Value");
			}
			else if(sCattle < 0){
				alert("Sick Cattle Amount can not be less than 0");
			}
			else{
				alert("Validation Successfull");
			}
		}

		function validatePGained(){
			let pGained= document.getElementById('pGained').value;
			
			if(pGained == ""){
				alert("NULL Value");
			}
			else if(pGained <0 ){
				alert("Invalid Amount");
			}
			else{
				alert("Validation Successfull");
			}
		}

	</script>


<?php include('footer.php');?>