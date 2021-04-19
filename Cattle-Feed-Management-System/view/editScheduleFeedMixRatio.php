<?php
	$title = "Edit Data to Cattle Schedule And Feed Mix Ratio Page";
	include('header.php');

	
?>

	<a href="scheduleFeedMixRatio.php">Back</a>	
	<br>
	
	<marquee><h1>Edit Data to Cattle Schedule And Feed Mix Ratio</h1></marquee>

    <form method="post" action="../controller/editScheduleFeedMixRatioCheck.php">
		<fieldset style="width:30%">
			<table>
				<tr>
					<td>Type</td>
					<td><input type="hidden" name="type" value="<?php echo $_GET['type'];?>"></td>
				</tr>
				<tr>
					<td>Food Items</td>
					<td><input type="text" name="fItems" id="fItems" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateFItems()"></td>
				</tr>
				<tr>
					<td>Ratio</td>
					<td><input type="text" name="ratio" id="ratio" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateRatio()"></td>
				</tr>
				<tr>
					<td>Schedule</td>
					<td><input type="text" name="schedule" id="schedule" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateSchedule()"></td>
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

		function validateFItems(){
			let fItems= document.getElementById('fItems').value;
			
			if(fItems == ""){
				alert("NULL Value");
			}
			else{
				alert("Validation Successfull");
			}
		}

		function validateRatio(){
			let ratio= document.getElementById('ratio').value;
			
			if(ratio == ""){
				alert("NULL Value");
			}
			else{
				alert("Validation Successfull");
			}
		}

		function validateSchedule(){
			let schedule= document.getElementById('schedule').value;
			
			if(schedule == ""){
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