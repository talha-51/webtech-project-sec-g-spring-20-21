<?php
    $title = "Admin Home Page";
	include('header.php');
?>
	
<table width = "100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
        <td colspan = "2" align = "center">
            <h1>Cattle Feed Management System</h1>
        </td>
    </tr>
        
    <tr>
		<td colspan = "2" align ="center">
			<form>
                Logged in as <?php echo $_SESSION['username']; ?> | 
                <input type="button" name="" value="Logout" onclick="Logout()">
            </form>
		</td>
	</tr>
		
	<tr valign = "middle">
        <td width = "200">
            <ul>
                <li><a href="home.php">Dashboard</a></li>
                <li><a href="manageUsers.php">Manage Users</a></li>
                <li><a href="issues.php">Reported Issues</a></li>
                <li><a href="aManageInv.php">Inventory</a></li>
                <li><a href="feedanalytics.php">Feed Analytics</a></li>
                <li><a href="incomexp.php">Income/Expense</a></li>
                <li><a href="safetydoc.php">Safety Documents</a></li>
                <li><a href="milk.php">Milk Production</a></li>
                <li><a href="questionairre.php">Questionairre</a></li>
                <li><a href="atransactionHistory.php">Transactions</a></li>
                <li><a href="announcement.php">Announcements</a></li>
                <li><a href="workreport.php">Productivity Report</a></li>
                <li><a href="businessreport.php">Business Report</a></li>
				<li><a href="aContactAdmin.php"> Check Notifications</a></li>
            </ul>
        </td>

        <td align="center">
			<h1>Welcome to the Admin Home Page, <?php echo $_SESSION['username']; ?></h1>
		</td>
	</tr>
    
    <tr>
     <td colspan = "2">
            <center>
            <?php include('footer.php'); ?>
            </center>
        </td>
    </tr>
</table>
<script>
    "use strict"
    function Logout(){
        location.replace("../controller/logout.php")
    }
</script>
