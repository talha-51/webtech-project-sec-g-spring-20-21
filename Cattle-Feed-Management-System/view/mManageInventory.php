<?php
	$title = "Management Inventory Page";
	include('header.php');

	require_once('../model/inventoryListModel.php');

	$inventoryList = getAllInventoryList();	
?>
<center>
	<script type="text/javascript" src="managementInventoryScript.js"></script>
	<link rel="stylesheet" href="style.css">
	<a href="mHome.php">Back</a>	
	<br>
	
	<marquee><h1>Inventory list</h1></marquee>
	<h4><a href='addManagementInventory.php'>Add Data</a> </h4>

	<form>
		<input type="text" name="search" id="search" value="" placeholder="Search by Item" onkeyup="ajax()">
	</form>

	<div id='result'></div><br><br>

	<table border = 1>
	<tr>
		<td>Item</td>
		<td>Starting Inventory</td>
		<td>Distributed Inventory</td>
		<td>Remaining Inventory</td>
		<td>Operations</td>
	</tr>

	<?php for($i = 0; $i < count($inventoryList); $i++){ ?>
		<tr>
			<td><?=$inventoryList[$i]['item']?></td>
			<td><?=$inventoryList[$i]['sInventory']?></td>
			<td><?=$inventoryList[$i]['dInventory']?></td>
			<td><?=$inventoryList[$i]['sInventory'] - $inventoryList[$i]['dInventory'];?></td>
			<td><a href="editManagementInventory.php?item=<?=$inventoryList[$i]['item']?>"> Edit</a> | 
				<a href="../controller/deleteManagementInventory.php?item=<?=$inventoryList[$i]['item']?>"> Delete </a>
			</td>
		</tr>
	<?php } ?>

	</table>
	</center>
<?php include('footer.php');?>