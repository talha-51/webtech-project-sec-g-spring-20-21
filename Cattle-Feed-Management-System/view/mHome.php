<?php
	$title = "Manager Home Page";
	include('header.php');
?>
	
	<link rel="stylesheet" href="style.css">

	<table border="1" width="70%" align="center">
		<tr class="c1">
			<td>
				<img src="../asset/logo.png" alt="logo" width="100px" height="50px">
			</td>
			
			<td align="right">
				Loggedin as <b style="color:Tomato"> <?php echo $_SESSION['username']; ?>| <a href="../controller/logout.php"> Logout</a>
			</td>
		</tr>
		
		<tr style="height:150px;">
			<td class="c1">
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
						<a href="cattleHealthDetails.php"> View Cattle Health Details</a>
                    </li>
					<li>
						<a href="scheduleFeedMixRatio.php"> Plan Schedule,Feed Mix Ratio </a>
                    </li>
					<li>
						<a href="mManageInventory.php"> Manage Inventory</a>
                    </li>
					<li>
						<a href="farmerPerformane.php"> Farmer Performance</a>
                    </li>
					<li>
						<a href="farmerPayroll.php"> Farmer payroll</a>
                    </li>
					<li>
						<a href="budgetReport.php"> Budget Report</a>
                    </li>
                </ul>
			</td>
            <td class="c2">
				<marquee><h1>Welcome Home Manager,</h1> <h1 style="color:Tomato"> <?php echo $_SESSION['username']; ?></h1></marquee>
			</td>
		</tr>			
	</table>



<?php
	include('footer.php');
?>
