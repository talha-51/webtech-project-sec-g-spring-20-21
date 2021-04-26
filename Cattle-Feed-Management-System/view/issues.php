<?php
    $title = "Reported Issues Page";
	include('header.php');
	require_once('../model/db.php');
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
	<tr><td colspan = "2" align ="center"><input type="button" name="" value="Go Back" onclick="Return()"><td></tr>
</table>

<script type="text/javascript" src="issues.js"></script>

<?php

    echo "<center><hr/><h2>Reported Issues</h2><hr/></center>";

	  $sql = "select * from issues";
	  $conn = getConnection();
	  $result = mysqli_query($conn, $sql);

	  echo "<table width = 100% border=1 cellspacing=0 cellpadding=0>
	  <tr>
		  <td align = center><b>Username</b></td>
		  <td align = center><b>User Type</b></td>
		  <td align = center><b>Priority</b></td>
		  <td align = center><b>Comments</b></td>
	  </tr>";

	  while($row = mysqli_fetch_assoc($result)){
			echo "<tr>
					<td align = center>{$row['Username']}</td>
					<td align = center>{$row['User Type']}</td>
					<td align = center>{$row['Priority']}</td>
					<td align = center>{$row['Comments']}</td>
				</tr>";
	  }
?>

<center>
<form>
		<input type="text" name="search" id="search" value="" placeholder="Search by Priority" onkeyup="ajax()">
		<input type="button" name="" value="Search" onclick="">
	</form>
	<div id='result'></div><br><br>
</center>

<script>
    "use strict"
    function Logout(){
        location.replace("../controller/logout.php")
    }

	function Return(){
        location.replace("home.php")
    }
</script>