<?php
$search = $_REQUEST['search'];
	$conn = mysqli_connect('localhost', 'root', '', 'cattlefeedmanagementsystem');
	$sql = "select * from issues where Priority like '%{$search}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
                    <td align = center><b>Username</b></td>
		            <td align = center><b>User Type</b></td>
		            <td align = center><b>Priority</b></td>
		            <td align = center><b>Comments</b></td>
                    </tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
                    <td align = center>{$row['Username']}</td>
					<td align = center>{$row['User Type']}</td>
					<td align = center>{$row['Priority']}</td>
					<td align = center>{$row['Comments']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>