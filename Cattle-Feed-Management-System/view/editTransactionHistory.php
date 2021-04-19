<?php
	$title = "Edit Transaction History Page";
	include('header.php');

	
?>

	<a href="transactionHistory.php">Back</a>	
	<br>
	
	<marquee><h1>Edit Transaction History</h1></marquee>

    <form method="post" action="../controller/editTransactionHistoryCheck.php">
		<fieldset style="width:30%">
			<table>
				<tr>
					<td>Type</td>
					<td><input type="hidden" name="type" value="<?php echo $_GET['type'];?>"></td>
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

	<script>

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