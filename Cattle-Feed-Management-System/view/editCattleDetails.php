<?php
	$title = "Edit Cattle Details Page";
	include('header.php');

	
?>

	<a href="cattleDetails.php">Back</a>	
	<br>
	
	<marquee><h1>Edit Cattle Details</h1></marquee>

    <form method="post" action="../controller/editCattleDetailsCheck.php">
		        <fieldset style="width:30%">
			        <legend>Edit Cattle Details</legend>
			        <table>
					<tr>
						<td>Farmer Username</td>
						<td><input type="hidden" name="fUsername" value="<?php echo $_GET['fUsername'];?>"></td>
					</tr>
						<tr>
							<td>Cattle Amount</td>
							<td><input type="number" name="cAmount" id="cattleAmount" value=""></td>
							<td><input type="submit" name="click" value="Validate" onmouseover="validateCAmount()"></td>
						</tr>
						<tr>
							<td>Sick Cattle Amount</td>
							<td><input type="number" name="scAmount" id="sickcattleAmount" value=""></td>
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

	<script>

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
