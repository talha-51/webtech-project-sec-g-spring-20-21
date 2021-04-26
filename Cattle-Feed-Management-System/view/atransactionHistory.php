<?php
	$title = "Transaction History Page";
	include('header.php');

	require_once('../model/transactionHistoryModel.php');

	$transactionHistory = getAllTransactionHistory();
?><center>
	<script type="text/javascript" src="transactionHistoryScript.js"></script>
	<link rel="stylesheet" href="style.css">
	<a href="home.php">Back</a>	
	<br>
	
	<marquee><h1>Transaction History</h1></marquee>
	<h4><a href='addTransactionHistory.php'>Add Data</a> </h4>

	<form>
		<input type="text" name="search" id="search" value="" placeholder="Search by Type" onkeyup="ajax()">
	</form>

	<div id='result'></div><br><br>

	<table width = "100%" border="1" cellspacing="0" cellpadding="0">
	<tr>
		<td align = center><b>Type</b></td>
		<td align = center><b>Amount Invested Per Month</b></td>
		<td align = center><b>Profit Gained Per Month</b></td>
		<td align = center><b>Other Expenses Per Month</b></td>
		<td align = center><b>Operations</b></td>
	</tr>

	<?php for($i = 0; $i < count($transactionHistory); $i++){ ?>
		<tr>
			<td align = center><?=$transactionHistory[$i]['type']?></td>
			<td align = center><?=$transactionHistory[$i]['aInvested']?></td>
			<td align = center><?=$transactionHistory[$i]['pGained']?></td>
			<td align = center><?=$transactionHistory[$i]['oExpenses']?></td>
			<td align = center><a href="editTransactionHistory.php?type=<?=$transactionHistory[$i]['type']?>"> Edit</a> | 
				<a href="../controller/deleteTransactionHistory.php?type=<?=$transactionHistory[$i]['type']?>"> Delete </a>
			</td>
		</tr>
	<?php } ?>

	</table>
	</center>
<?php include('footer.php');?>