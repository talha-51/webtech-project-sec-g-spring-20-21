<?php
	$title = "Edit Management Inventory Page";
	include('header.php');

	
?>
<center>
	<a href="mManageInventory.php">Back</a>	
	<br>
	
	<marquee><h1>Edit Inventory List</h1></marquee>

    <form method="post" action="../controller/editManagementInventoryCheck.php">
		<fieldset style="width:30%">
			<table>
				<tr>
					<td>Item</td>
					<td><input type="hidden" name="item" value="<?php echo $_GET['item'];?>"></td>
				</tr>
				<tr>
					<td>Starting Inventory</td>
					<td><input type="number" name="sInventory" id="sInventory" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateSInventory()"></td>
				</tr>
				<tr>
					<td>Distributed Inventory</td>
					<td><input type="number" name="dInventory" id="dInventory" value=""></td>
					<td><input type="submit" name="click" value="Validate" onmouseover="validateDInventory()"></td>
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
		
		function validateSInventory(){
			let sInventory= document.getElementById('sInventory').value;
			
			if(sInventory == ""){
				alert("NULL Value");
			}
			else if(sInventory > 1000 || sInventory < 0){
				alert("Cattle Amount must be between 1-1000");
			}
			else{
				alert("Validation Successfull");
			}
		}

		function validateDInventory(){
			let dInventory= document.getElementById('dInventory').value;
			let sInventory= document.getElementById('sInventory').value;
			
			if(dInventory == ""){
				alert("NULL Value");
			}
			else if(dInventory < 0){
				alert("Can not be less than 0");
			}
			else if(dInventory > sInventory){
				alert("Can not be more than Starting Inventory");
			}
			else{
				alert("Validation Successfull");
			}
		}

	</script>


<?php
	
	include('footer.php');

?>