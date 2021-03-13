<?php
	//session_start();
	$title = "Admin Edit Profile Page";
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
            <td align="center">
            <form method="" action="">
		        <fieldset style="width:30%">
			        <legend>EDIT User</legend>
			        <table>
				        <tr>
					        <td>Username</td>
					        <td><input type="text" name="username" value="admin"></td>
				        </tr>
				        <tr>
					        <td>Password</td>
					        <td><input type="password" name="password" value="11"></td>
				        </tr>
				
				        <tr>
					        <td>Email</td>
					        <td><input type="email" name="email" value="admin@gmail.com"></td>
				        </tr>
				        <tr>
					        <td></td>
					        <td>
						        <input type="submit" name="signup" value="Update"> 
					        </td>
				        </tr>
			        </table>
		        </fieldset>
	        </form>
			</td>
		</tr>			
	</table>



<?php
	include('footer.php');
?>
