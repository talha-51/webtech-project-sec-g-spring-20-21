<?php
	$title = "Add Data to Cattle Schedule And Feed Mix Ratio Page";
	include('header.php');

	
?>

	<a href="scheduleFeedMixRatio.php">Back</a>	
	<br>
	
	<marquee><h1>Add Data to Cattle Schedule And Feed Mix Ratio</h1></marquee>

    <form method="post" action="../controller/addScheduleFeedMixRatioCheck.php">
		<fieldset style="width:30%">
			<table>
				<tr>
					<td>Type</td>
					<td><input type="text" name="type" id ="type" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateType()"></td>
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
		function validateType(){
			let type= document.getElementById('type').value;
			
			if(type == ""){
				alert("NULL Value");
			}
			else if(type.length < 2){
				alert("Must contain atleast two characters");
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