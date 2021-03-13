<?php
	//session_start();
	$title = "Change Profile Picture Page";
	include('header.php');
?>
	

	<table border="1" width="70%" align="center">
		<tr>
			<td>
				<img src="../asset/logo.png" alt="logo" width="100px" height="50px">
			</td>
			
			<td align="right">
				Loggedin as <?php echo $_SESSION['username']; ?>| <a href="../controller/logout.php"> Logout</a>
			</td>
		</tr>
		
		<tr style="height:150px;">
			<td>
                <ul>
                    <li>
                        <a href="aHome.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="aEditProfile.php">Edit Profile</a>
                    </li>
                    <li>
                        <a href="aProfPicChange.php">Change Profile Picture</a>
                    </li>
					<li>
						<a href="aManageUsers.php"> Manage Users</a>
                    </li>
					<li>
						<a href="aMonitorTransactions.php"> Monitor Transactions</a>
                    </li>
					<li>
						<a href="aIssues.php"> View Reported Issues</a>
                    </li>
					<li>
						<a href="aDocument.php"> View Food Safety Document</a>
                    </li>
					<li>
						<a href="aBudget.php"> Prepare Budget Reports</a>
                    </li>
					<li>
						<a href="mManageInventory.php"> View Inventory</a>
                    </li>
                </ul>
			</td>
            <td>
                <center>
                    <form method="post" action="../controller/aProfPicCheck.php" enctype="multipart/form-data">
                         <fieldset style="width:40%">
                            <legend>PROFILE PICTURE</legend>
                            <table>
                                <tr>
                                    <td>
                                        <img src="../asset/user.png" height="100px" width="100">
                                    </td>
                                </tr>
            
                                <tr>
                                    <td>
                                        <input type="file" name="image">
                                    </td>
                                </tr>
            
                                <tr>
                                    <td>
                                        <input type="submit" name="submit" value="Upload">
                                    </td>
                                </tr>
            
                            </table>
                        </fieldset>
                    </form>
                </center>
			</td>
		</tr>			
	</table>



<?php
	include('footer.php');
?>
