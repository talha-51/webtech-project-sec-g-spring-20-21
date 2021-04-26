<?php
	
	$search = $_REQUEST['search'];
	$conn = mysqli_connect('localhost', 'root', '', 'cattlefeedmanagementsystem');
	$sql = "select * from milk where DMProduced like '%{$search}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
                        <td align = center><b>Disposition of Milk Produced</b></td>
                        <td align = center><b>Volume</b></td>
                        <td align = center><b>Price per unit</b></td>
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
                            <td align = center>{$row['DMProduced']}</td>
                            <td align = center>{$row['Volume']}</td>
                            <td align = center>{$row['Price per unit']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>