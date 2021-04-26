<?php
	$title = "Budget Report Page";
	include('header.php');

	require_once('../model/budgetReportModel.php');

	$budgetReport = getAllBudgetReport();	
?>
<center>
	<script type="text/javascript" src="budgetReportScript.js"></script>
	<link rel="stylesheet" href="style.css">
	<a href="mHome.php">Back</a>	
	<br>
	
	<marquee><h1>Budget Report</h1></marquee>
	<h4><a href='addBudgetReport.php'>Add Data</a> </h4>

	<form>
		<input type="text" name="search" id="search" value="" placeholder="Search by Username" onkeyup="ajax()">
	</form>

	<div id='result'></div><br><br>

	<table border = 1>
	<tr>
		<td>Farmer Username</td>
		<td>Starting Budget</td>
		<td>Budget Used</td>
		<td>Budget Remaining</td>
		<td>Operations</td>
	</tr>

	<?php for($i = 0; $i < count($budgetReport); $i++){ ?>
		<tr>
			<td><?=$budgetReport[$i]['fUsername']?></td>
			<td><?=$budgetReport[$i]['sBudget']?></td>
			<td><?=$budgetReport[$i]['bUsed']?></td>
			<td><?=$budgetReport[$i]['sBudget'] - $budgetReport[$i]['bUsed'];?></td>
			<td><a href="editBudgetReport.php?fUsername=<?=$budgetReport[$i]['fUsername']?>"> Edit</a> | 
				<a href="../controller/deleteBudgetReport.php?fUsername=<?=$budgetReport[$i]['fUsername']?>"> Delete </a>
			</td>
		</tr>
	<?php } ?>

	</table>
	</center>
<?php include('footer.php');?>