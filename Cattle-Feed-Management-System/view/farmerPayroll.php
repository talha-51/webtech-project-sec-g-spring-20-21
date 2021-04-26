<?php
	$title = "Farmer Payroll Page";
	include('header.php');

	require_once('../model/farmerPayrollModel.php');

	$farmerPayroll = getAllFarmerPayroll();	
?>
<center>
	<script type="text/javascript" src="farmerPayrollScript.js"></script>
	<link rel="stylesheet" href="style.css">
	<a href="mHome.php">Back</a>	
	<br>
	
	<marquee><h1>Farmer Payroll</h1></marquee>
	<h4><a href='addFarmerPayroll.php'>Add Data</a> </h4>

	<form>
		<input type="text" name="search" id="search" value="" placeholder="Search by Username" onkeyup="ajax()">
	</form>

	<div id='result'></div><br><br>

	<table border = 1>
	<tr>
		<td>Farmer Username</td>
		<td>Amount Paid</td>
		<td>Withdrawal Amount</td>
		<td>Remaining</td>
		<td>Operations</td>
	</tr>

	<?php for($i = 0; $i < count($farmerPayroll); $i++){ ?>
		<tr>
			<td><?=$farmerPayroll[$i]['fUsername']?></td>
			<td><?=$farmerPayroll[$i]['aPaid']?></td>
			<td><?=$farmerPayroll[$i]['wAmount']?></td>
			<td><?=$farmerPayroll[$i]['aPaid'] - $farmerPayroll[$i]['wAmount'];?></td>
			<td><a href="editFarmerPayroll.php?fUsername=<?=$farmerPayroll[$i]['fUsername']?>"> Edit</a> | 
				<a href="../controller/deleteFarmerPayroll.php?fUsername=<?=$farmerPayroll[$i]['fUsername']?>"> Delete </a>
			</td>
		</tr>
	<?php } ?>

	</table>
	</center>
<?php include('footer.php');?>