<?php
	$title = "Add Data to Farmer Payroll Page";
	include('header.php');

	
?>
<center>
	<a href="farmerPayroll.php">Back</a>	
	<br>
	
	<marquee><h1>Add Data to Farmer Payroll</h1></marquee>

    <form method="post" action="../controller/addFarmerPayrollCheck.php">
		<fieldset style="width:30%">
			<table>
				<tr>
					<td>Farmer Username</td>
					<td><input type="text" name="fUsername" id="fUsername" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateFUsername()"></td>
				</tr>
				<tr>
					<td>Amount Paid</td>
					<td><input type="number" name="aPaid" id="aPaid" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateAPaid()"></td>
				</tr>
				<tr>
					<td>Withdrawal Amount</td>
					<td><input type="number" name="wAmount" id="wAmount" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateWAmount()"></td>
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

		function validateAPaid(){
			let aPaid= document.getElementById('aPaid').value;
			
			if(aPaid == ""){
				alert("NULL Value");
			}
			else if(aPaid > 50000 || aPaid <= 0){
				alert("Must be between 1-50000");
			}
			else{
				alert("Validation Successfull");
			}
		}

		function validateWAmount(){
			let wAmount= document.getElementById('wAmount').value;
			let aPaid= document.getElementById('aPaid').value;
			
			if(wAmount == ""){
				alert("NULL Value");
			}
			else if(wAmount < 0){
				alert("Withdrawal Amount can not be less than 0");
			}
			else if(wAmount > aPaid){
				alert("Withdrawal Amount can not be more than Amount Paid");
			}
			else{
				alert("Validation Successfull");
			}
		}

	</script>


<?php include('footer.php');?>