<?php
	
	$search = $_REQUEST['search'];
	$conn = mysqli_connect('localhost', 'root', '', 'cattlefeedmanagementsystem');
	$sql = "select * from farmerperformance where fUsername like '%{$search}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						<td>Farmer Username</td>
						<td>Cattle Amount</td>
						<td>Sick Cattle Amount</td>
						<td>Profit Gained Per Month</td>
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['fUsername']}</td>
							<td>{$row['cAmount']}</td>
							<td>{$row['sCattle']}</td>
							<td>{$row['pGained']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>