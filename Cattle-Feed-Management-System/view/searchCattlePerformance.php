<?php
	
	$search = $_REQUEST['search'];
	$conn = mysqli_connect('localhost', 'root', '', 'cattlefeedmanagementsystem');
	$sql = "select * from cattleperformance where fUsername like '%{$search}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						<td>Farmer Username</td>
						<td>Milk Produced Per Day (kg)</td>
						<td>Weight Gained Per Month (kg)</td>
						<td>Child Increase (yearly)</td>
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['fUsername']}</td>
							<td>{$row['mProduced']}</td>
							<td>{$row['weightGain']}</td>
							<td>{$row['cIncrease']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>