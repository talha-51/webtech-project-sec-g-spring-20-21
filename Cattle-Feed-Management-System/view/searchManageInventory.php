<?php
	
	$search = $_REQUEST['search'];
	$conn = mysqli_connect('localhost', 'root', '', 'cattlefeedmanagementsystem');
	$sql = "select * from inventory where item like '%{$search}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						<td>Item</td>
						<td>Starting Inventory</td>
						<td>Distributed Inventory</td>
						<td>Remaining Inventory</td>
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
        $rI=$row['sInventory']-$row['dInventory'];
		$response .= 	"<tr>
							<td>{$row['item']}</td>
							<td>{$row['sInventory']}</td>
							<td>{$row['dInventory']}</td>
							<td>$rI</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>