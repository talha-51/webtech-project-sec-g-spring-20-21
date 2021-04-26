<?php
	$title = "Transaction History Page";
	include('header.php');

	require_once('../model/transactionHistoryModel.php');

	$transactionHistory = getAllTransactionHistory();
?>
<center>
	<script type="text/javascript" src="transactionHistoryScript.js"></script>
	<link rel="stylesheet" href="style.css">
	<a href="mHome.php">Back</a>	
	<br>
	
	<marquee><h1>Transaction History</h1></marquee>

	<form>
		<input type="text" name="search" id="search" value="" placeholder="Search by Type" onkeyup="ajax()">
	</form>

	<div id='result'></div><br><br>

	<table border = 1>
	<tr>
		<td>Type</td>
		<td>Amount Invested Per Month</td>
		<td>Profit Gained Per Month</td>
		<td>Other Expenses Per Month</td>
	</tr>

	<?php for($i = 0; $i < count($transactionHistory); $i++){ ?>
		<tr>
			<td><?=$transactionHistory[$i]['type']?></td>
			<td><?=$transactionHistory[$i]['aInvested']?></td>
			<td><?=$transactionHistory[$i]['pGained']?></td>
			<td><?=$transactionHistory[$i]['oExpenses']?></td>
		</tr>
	<?php } ?>

	</table>
	</center>
<?php include('footer.php');?>