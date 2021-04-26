<?php
$search = $_REQUEST['search'];
	$conn = mysqli_connect('localhost', 'root', '', 'cattlefeedmanagementsystem');
	$sql = "select * from users where username like '%{$search}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
                    <td align = center><b>Username</b></td>
                    <td align = center><b>Password</b></td>
                    <td align = center><b>Email</b></td>
                    </tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
        <td align = center>{$row['username']}</td>
        <td align = center>{$row['password']}</td>
        <td align = center>{$row['email']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>