<?php
	
	$search = $_REQUEST['search'];
	$conn = mysqli_connect('localhost', 'root', '', 'cattlefeedmanagementsystem');
	$sql = "select * from transactionhistory where type like '%{$search}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						<td>Type</td>
						<td>Amount Invested Per Month</td>
						<td>Profit Gained Per Month</td>
						<td>Other Expenses Per Month</td>
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['type']}</td>
							<td>{$row['aInvested']}</td>
							<td>{$row['pGained']}</td>
							<td>{$row['oExpenses']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>