<?php
	$title = "Add Data to Cattle Details Page";
	include('header.php');

	
?>
<center>
	<a href="cattleDetails.php">Back</a>	
	<br>
	
	<marquee><h1>Add Data to Cattle Details</h1></marquee>

    <form method="post" action="../controller/addCattleDetailsCheck.php">
		<fieldset style="width:30%">
			<table>
				<tr>
					<td>Farmer Username</td>
					<td><input type="text" name="fUsername" id="fUsername" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateFUsername()"></td>
				</tr>
				<tr>
					<td>Cattle Amount</td>
					<td><input type="number" name="cattleAmount" id="cattleAmount" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateCAmount()"></td>
				</tr>
				<tr>
					<td>Sick Cattle Amount</td>
					<td><input type="number" name="sickcattleAmount" id="sickcattleAmount" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateSCAmount()"></td>
				</tr>
				<tr>
					<td>Food Amount Required Per Day (kg)</td>
					<td><input type="number" name="freq" id="freq" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateFReq()"></td>
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

		function validateCAmount(){
			let cattleAmount= document.getElementById('cattleAmount').value;
			
			if(cattleAmount == ""){
				alert("NULL Value");
			}
			else if(cattleAmount > 1000 || cattleAmount <= 0){
				alert("Cattle Amount must be between 1-1000");
			}
			else{
				alert("Validation Successfull");
			}
		}

		function validateSCAmount(){
			let sickcattleAmount= document.getElementById('sickcattleAmount').value;
			let cattleAmount= document.getElementById('cattleAmount').value;
			
			if(sickcattleAmount == ""){
				alert("NULL Value");
			}
			else if(sickcattleAmount <= 0){
				alert("Sick Cattle Amount can not be less than 0");
			}
			else if(sickcattleAmount > cattleAmount){
				alert("Sickcattle Amount can not be more than Cattle Amount");
			}
			else{
				alert("Validation Successfull");
			}
		}

		function validateFReq(){
			let freq= document.getElementById('freq').value;
			
			if(freq == ""){
				alert("NULL Value");
			}
			else if(freq <=0 ){
				alert("Invalid Amount");
			}
			else{
				alert("Validation Successfull");
			}
		}

	</script>


<?php
	
	include('footer.php');

?>