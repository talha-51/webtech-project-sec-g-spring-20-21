<?php
	$title = "Add Data to Cattle Performance Page";
	include('header.php');

	
?>
<center>
	<a href="cattlePerformance.php">Back</a>	
	<br>
	
	<marquee><h1>Add Data to Cattle Performance</h1></marquee>

    <form method="post" action="../controller/addCattlePerformanceCheck.php">
		<fieldset style="width:30%">
			<table>
				<tr>
					<td>Farmer Username</td>
					<td><input type="text" name="fUsername" id="fUsername" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateFUsername()"></td>
				</tr>
				<tr>
					<td>Milk Produced Per Day (kg)</td>
					<td><input type="number" name="mProduced" id="mProduced" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateMProduced()"></td>
				</tr>
				<tr>
					<td>Weight Gained Per Month (kg)</td>
					<td><input type="number" name="weightGain" id="weightGain" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateWeightGain()"></td>
				</tr>
				<tr>
					<td>Child Increase (yearly)</td>
					<td><input type="number" name="cIncrease" id="cIncrease" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateCIncrease()"></td>
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
	</center>
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

		function validateMProduced(){
			let mProduced= document.getElementById('mProduced').value;
			
			if(mProduced == ""){
				alert("NULL Value");
			}
			else if(mProduced < 0){
				alert("Can not be less than 0");
			}
			else{
				alert("Validation Successfull");
			}
		}

		function validateWeightGain(){
			let weightGain= document.getElementById('weightGain').value;
			
			if(weightGain == ""){
				alert("NULL Value");
			}
			else if(weightGain < 0){
				alert("Can not be less than 0");
			}
			else{
				alert("Validation Successfull");
			}
		}

		function validateCIncrease(){
			let cIncrease= document.getElementById('cIncrease').value;
			
			if(cIncrease == ""){
				alert("NULL Value");
			}
			else if(cIncrease < 0){
				alert("Can not be less than 0");
			}
			else{
				alert("Validation Successfull");
			}
		}

	</script>


<?php
	
	include('footer.php');

?>