<?php
	$title = "Edit Cattle Performance Page";
	include('header.php');

	
?>

	<a href="cattlePerformance.php">Back</a>	
	<br>
	
	<marquee><h1>Edit Cattle Performance</h1></marquee>

    <form method="post" action="../controller/editCattlePerformanceCheck.php">
    	<fieldset style="width:30%">
			<table>
				<tr>
					<td>Farmer Username</td>
					<td><input type="hidden" name="fUsername" value="<?php echo $_GET['fUsername'];?>"></td>
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

	<script>

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
