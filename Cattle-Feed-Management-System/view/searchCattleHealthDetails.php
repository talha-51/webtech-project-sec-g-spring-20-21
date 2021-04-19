<?php
	
	$search = $_REQUEST['search'];
	$conn = mysqli_connect('localhost', 'root', '', 'cattlefeedmanagementsystem');
	$sql = "select * from cattlehealthdetails where aId like '%{$search}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						<td>Animal Id</td>
						<td>Last Sickness Time</td>
						<td>Name of the disease</td>
						<td>Checked BY</td>
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['aId']}</td>
							<td>{$row['lSickness']}</td>
							<td>{$row['nDisease']}</td>
							<td>{$row['checked']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>