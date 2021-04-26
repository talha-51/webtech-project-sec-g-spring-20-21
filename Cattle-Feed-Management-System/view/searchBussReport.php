<?php
	
	$search = $_REQUEST['search'];
	$conn = mysqli_connect('localhost', 'root', '', 'cattlefeedmanagementsystem');
	$sql = "select * from busreport where Sectors like '%{$search}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
                        <td align = center><b>Sectors</b></td>
                        <td align = center><b>Base Year</b></td>
                        <td align = center><b>Year 1</b></td>
                        <td align = center><b>Year 2</b></td>
                        <td align = center><b>Year 3</b></td>
                        <td align = center><b>Year 4</b></td>
                        <td align = center><b>Year 5</b></td>
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
                            <td align = center>{$row['Sectors']}</td>
                            <td align = center>{$row['Base Year']}</td>
                            <td align = center>{$row['Year 1']}</td>
                            <td align = center>{$row['Year 2']}</td>
                            <td align = center>{$row['Year 3']}</td>
                            <td align = center>{$row['Year 4']}</td>
                            <td align = center>{$row['Year 5']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>