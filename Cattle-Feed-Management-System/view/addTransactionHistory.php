<?php
	$title = "Add Data to Transaction History Page";
	include('header.php');

	
?>
<center>
	<a href="atransactionHistory.php">Back</a>	
	<br>
	
	<marquee><h1>Add Data to Transaction History</h1></marquee>

    <form method="post" action="../controller/addTransactionHistoryCheck.php">
		<fieldset style="width:30%">
			<table>
				<tr>
					<td>Type</td>
					<td><input type="text" name="type" id="type" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateType()"></td>
				</tr>
				<tr>
					<td>Amount Invested Per Month</td>
					<td><input type="number" name="aInvested" id="aInvested" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateAInvested()"></td>
				</tr>
				<tr>
					<td>Profit Gained Per Month</td>
					<td><input type="number" name="pGained" id="pGained" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validatePGained()"></td>
				</tr>
				<tr>
					<td>Other Expenses Per Month</td>
					<td><input type="number" name="oExpenses" id="oExpenses" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateOExpenses()"></td>
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
		function validateType(){
			let type= document.getElementById('type').value;
			
			if(type == ""){
				alert("NULL Value");
			}
			else if(type.length < 2){
				alert("Type should contain at least two characters");
			}
			else if(type.charAt(0) >= 0 && type.charAt(0) <= 9){
				alert("Type must start with a letter");
			}
			else{
				if((type>= 'a' && type <= 'z') || (type >= 'A' && type <= 'Z') || (type >=0 && type <=9)){						
					alert("Validation Successfull");
				}
				else{
					alert("Type can contain a-z or A-Z and first character can not be a number");
				}
			}
		}

		function validateAInvested(){
			let aInvested= document.getElementById('aInvested').value;
			
			if(aInvested == ""){
				alert("NULL Value");
			}
			else if(aInvested > 20000 || aInvested < 0){
				alert("Cattle Amount must be between 0-20000");
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
			else if(pGained <= 0){
				alert("Can not be less than 0");
			}
			else{
				alert("Validation Successfull");
			}
		}

		function validateOExpenses(){
			let oExpenses= document.getElementById('oExpenses').value;
			
			if(oExpenses == ""){
				alert("NULL Value");
			}
			else if(oExpenses <0 ){
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