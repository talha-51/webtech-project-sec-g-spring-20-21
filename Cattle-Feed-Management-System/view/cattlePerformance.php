<?php
	$title = "Cattle Performance Page";
	include('header.php');

	require_once('../model/cattlePerformanceModel.php');

	$cattlePerformance = getAllCattlePerformance();	
?>
	<script type="text/javascript" src="cattlePerformanceScript.js"></script>
	<link rel="stylesheet" href="style.css">
	<a href="mHome.php">Back</a>	
	<br>
	
	<marquee><h1>Cattle Performance</h1></marquee>
	<h4><a href='addCattlePerformance.php'>Add Data</a> </h4>

	<form>
		<input type="text" name="search" id="search" value="" placeholder="Search by Username" onkeyup="ajax()">
	</form>

	<div id='result'></div><br><br>

	<table border = 1>
	<tr>
		<td>Farmer Username</td>
		<td>Milk Produced Per Day (kg)</td>
		<td>Weight Gained Per Month (kg)</td>
		<td>Child Increase (yearly)</td>
		<td>Operations</td>
	</tr>

	<?php for($i = 0; $i < count($cattlePerformance); $i++){ ?>
		<tr>
			<td><?=$cattlePerformance[$i]['fUsername']?></td>
			<td><?=$cattlePerformance[$i]['mProduced']?></td>
			<td><?=$cattlePerformance[$i]['weightGain']?></td>
			<td><?=$cattlePerformance[$i]['cIncrease']?></td>
			<td><a href="editCattlePerformance.php?fUsername=<?=$cattlePerformance[$i]['fUsername']?>"> Edit</a> | 
				<a href="../controller/deleteCattlePerformance.php?fUsername=<?=$cattlePerformance[$i]['fUsername']?>"> Delete </a>
			</td>
		</tr>
	<?php } ?>

	</table>
	
<?php include('footer.php');?>
