<?php
	
	$search = $_REQUEST['search'];
	$conn = mysqli_connect('localhost', 'root', '', 'cattlefeedmanagementsystem');
	$sql = "select * from feedanalytics where Feedstuff like '%{$search}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
                        <td align = center><b>Feedstuff</b></td>
                        <td align = center><b>CP</b></td>
                        <td align = center><b>ME</b></td>
                        <td align = center><b>Cost/kg</b></td>
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
                            <td align = center>{$row['Feedstuff']}</td>
                            <td align = center>{$row['CP']}</td>
                            <td align = center>{$row['ME']}</td>
                            <td align = center>{$row['Cost/kg']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>