<?php
	$title = "Add Data to Cattle Health Details Page";
	include('header.php');

	
?>
<center>
	<a href="cattleHealthDetails.php">Back</a>	
	<br>
	
	<marquee><h1>Add Data to Cattle Health Details</h1></marquee>

    <form method="post" action="../controller/addCattleHealthDetailsCheck.php">
		<fieldset style="width:30%">
			<table>
				<tr>
					<td>Animal Id</td>
					<td><input type="text" name="aId" id="aId" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateAId()"></td>
				</tr>
				<tr>
					<td>Last Sickness Time</td>
					<td><input type="text" name="lSickness" id="lSickness" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateLSickness()"></td>
				</tr>
				<tr>
					<td>Name of the disease</td>
					<td><input type="text" name="nDisease" id="nDisease" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateNDisease()"></td>
				</tr>
				<tr>
					<td>Checked BY</td>
					<td><input type="text" name="checked" id="checked" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateChecked()"></td>
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
		function validateAId(){
			let aId= document.getElementById('aId').value;
			
			if(aId == ""){
				alert("NULL Value");
			}
			else if(aId.length < 2){
				alert("Animal Id should contain at least two characters");
			}
			else if(aId.charAt(0) >= 0 && aId.charAt(0) <= 9){
				alert("Animal Id must start with a letter");
			}
			else{
				if((aId>= 'a' && aId <= 'z') || (aId >= 'A' && aId <= 'Z') || (aId >=0 && aId <=9)){						
					alert("Validation Successfull");
				}
				else{
					alert("Animal Id can contain a-z or A-Z and first character can not be a number");
				}
			}
		}

		function validateLSickness(){
			let lSickness= document.getElementById('lSickness').value;
			
			if(lSickness == ""){
				alert("NULL Value");
			}
			else{
				alert("Validation Successfull");
			}
		}

		function validateNDisease(){
			let nDisease= document.getElementById('nDisease').value;
			
			if(nDisease == ""){
				alert("NULL Value");
			}
			else{
				alert("Validation Successfull");
			}
		}

		function validateChecked(){
			let checked= document.getElementById('checked').value;
			
			if(checked == ""){
				alert("NULL Value");
			}
			else{
				alert("Validation Successfull");
			}
		}

	</script>


<?php
	
	include('footer.php');

?>