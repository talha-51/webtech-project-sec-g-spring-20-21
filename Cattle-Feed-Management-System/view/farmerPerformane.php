<?php
	$title = "Farmer Performance Page";
	include('header.php');

	require_once('../model/farmerPerformanceModel.php');

	$farmerPerformance = getAllFarmerPerformance();	
?>
	<script type="text/javascript" src="farmerPerformanceScript.js"></script>
	<link rel="stylesheet" href="style.css">
	<a href="mHome.php">Back</a>	
	<br>
	
	<marquee><h1>Farmer Performance</h1></marquee>
	<h4><a href='addFarmerPerformance.php'>Add Data</a> </h4>

	<form>
		<input type="text" name="search" id="search" value="" placeholder="Search by Username" onkeyup="ajax()">
	</form>

	<div id='result'></div><br><br>

	<table border = 1>
	<tr>
		<td>Farmer Username</td>
		<td>Cattle Amount</td>
		<td>Sick Cattle Amount</td>
		<td>Profit Gained Per Month</td>
		<td>Operations</td>
	</tr>

	<?php for($i = 0; $i < count($farmerPerformance); $i++){ ?>
		<tr>
			<td><?=$farmerPerformance[$i]['fUsername']?></td>
			<td><?=$farmerPerformance[$i]['cAmount']?></td>
			<td><?=$farmerPerformance[$i]['sCattle']?></td>
			<td><?=$farmerPerformance[$i]['pGained']?></td>
			<td><a href="editFarmerPerformance.php?fUsername=<?=$farmerPerformance[$i]['fUsername']?>"> Edit</a> | 
				<a href="../controller/deleteFarmerPerformance.php?fUsername=<?=$farmerPerformance[$i]['fUsername']?>"> Delete </a>
			</td>
		</tr>
	<?php } ?>

	</table>
	
<?php include('footer.php');?>