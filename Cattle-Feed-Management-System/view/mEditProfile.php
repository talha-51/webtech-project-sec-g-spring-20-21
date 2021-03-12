<?php
	//session_start();
	$title = "Manager Edit Profile Page";
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
                        <a href="mHome.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="mEditProfile.php">Edit Profile</a>
                    </li>
                    <li>
                        <a href="mProfPicChange.php">Change Profile Picture</a>
                    </li>
					<li>
						<a href="cattleDetails.php"> View Cattle Details</a>
                    </li>
					<li>
						<a href="cattlePerformance.php"> View Cattle Performance</a>
                    </li>
					<li>
						<a href="transactionHistory.php"> View Transaction History</a>
                    </li>
					<li>
						<a href="transactionHistory.php"> View Transaction History</a>
                    </li>
					<li>
						<a href="cattleHealthDetails.php"> View Cattle Health Details</a>
                    </li>
					<li>
						<a href="cattleHealthDetails.php"> View Cattle Health Details</a>
                    </li>
					<li>
						<a href="scheduleFeedMixRatio.php"> Plan Schedule,Feed Mix Ratio </a>
                    </li>
					<li>
						<a href="mManageInventory.php"> Manage Inventory</a>
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
					        <td><input type="text" name="username" value="m-100"></td>
				        </tr>
				        <tr>
					        <td>Password</td>
					        <td><input type="password" name="password" value="12"></td>
				        </tr>
				
				        <tr>
					        <td>Email</td>
					        <td><input type="email" name="email" value="m1@gmail.com"></td>
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
