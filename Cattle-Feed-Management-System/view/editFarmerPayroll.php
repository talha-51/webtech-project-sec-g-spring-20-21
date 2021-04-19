<?php
	$title = "Edit Farmer Payroll Page";
	include('header.php');

	
?>

	<a href="farmerPayroll.php">Back</a>	
	<br>
	
	<marquee><h1>Edit Farmer Payroll</h1></marquee>

    <form method="post" action="../controller/editFarmerPayrollCheck.php">
		<fieldset style="width:30%">
            <table>
				<tr>
					<td>Farmer Username</td>
					<td><input type="hidden" name="fUsername" value="<?php echo $_GET['fUsername'];?>"></td>
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

	<script>

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


<?php
	
	include('footer.php');

?>