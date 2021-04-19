<?php
	
	$search = $_REQUEST['search'];
	$conn = mysqli_connect('localhost', 'root', '', 'cattlefeedmanagementsystem');
	$sql = "select * from cattlescheduleandfeedmixratio where type like '%{$search}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						<td>Type</td>
						<td>Food Items</td>
						<td>Ratio</td>
						<td>Schedule</td>
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['type']}</td>
							<td>{$row['fItems']}</td>
							<td>{$row['ratio']}</td>
							<td>{$row['schedule']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>