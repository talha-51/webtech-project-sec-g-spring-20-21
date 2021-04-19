<?php
	$title = "Edit Budget Report Page";
	include('header.php');

	
?>

	<a href="budgetReport.php">Back</a>	
	<br>
	
	<marquee><h1>Edit Budget Report</h1></marquee>

    <form method="post" action="../controller/editBudgetReportCheck.php">
		<fieldset style="width:30%">
			<table>
				<tr>
					<td>Item</td>
					<td><input type="hidden" name="fUsername" value="<?php echo $_GET['fUsername'];?>"></td>
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


<?php
	
	include('footer.php');

?>