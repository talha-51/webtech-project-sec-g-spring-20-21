<?php
	
	$search = $_REQUEST['search'];
	$conn = mysqli_connect('localhost', 'root', '', 'cattlefeedmanagementsystem');
	$sql = "select * from budgetreport where fUsername like '%{$search}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						<td>Farmer Username</td>
						<td>Starting Budget</td>
						<td>Budget Used</td>
						<td>Budget Remaining</td>
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
        $bRemaining=$row['sBudget']-$row['bUsed'];
		$response .= 	"<tr>
							<td>{$row['fUsername']}</td>
							<td>{$row['sBudget']}</td>
							<td>{$row['bUsed']}</td>
							<td>$bRemaining</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>