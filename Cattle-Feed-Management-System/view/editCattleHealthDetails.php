<?php
	$title = "Edit Cattle Health Details Page";
	include('header.php');

	
?>
<center>
	<a href="cattleHealthDetails.php">Back</a>	
	<br>
	
	<marquee><h1>Edit Cattle Health Details</h1></marquee>

    <form method="post" action="../controller/editCattleHealthDetailsCheck.php">
		<fieldset style="width:30%">
			<table>
				<tr>
					<td>Animal Id</td>
					<td><input type="hidden" name="aId" value="<?php echo $_GET['aId'];?>"></td>
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