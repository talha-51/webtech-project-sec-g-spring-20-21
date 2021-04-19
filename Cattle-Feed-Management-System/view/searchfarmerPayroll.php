<?php
	
	$search = $_REQUEST['search'];
	$conn = mysqli_connect('localhost', 'root', '', 'cattlefeedmanagementsystem');
	$sql = "select * from farmerpayroll where fUsername like '%{$search}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						<td>Farmer Username</td>
						<td>Amount Paid</td>
						<td>Withdrawal Amount</td>
						<td>Remaining</td>
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
        $remaining=$row['aPaid']-$row['wAmount'];
		$response .= 	"<tr>
							<td>{$row['fUsername']}</td>
							<td>{$row['aPaid']}</td>
							<td>{$row['wAmount']}</td>
							<td>$remaining</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>