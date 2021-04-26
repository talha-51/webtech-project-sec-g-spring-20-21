<?php
    $title = "Feed Analytics";
	include('header.php');
	require_once('../model/feedanalyticsModel.php');
?>

<script type="text/javascript" src="feedAnalyticsScript.js"></script>
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

<center><hr/><h2>Feed Analytics</h2><hr/></center>

	<form>
		<input type="text" name="search" id="search" value="" placeholder="Search by Feedstuff" onkeyup="ajax()">
	</form>

	<div id='result'></div><br><br>

<?php

	  $sql = "select * from feedanalytics";
	  $conn = getConnection();
	  $result = mysqli_query($conn, $sql);

	  echo "<table width = 100% border=1 cellspacing=0 cellpadding=0>
	  <tr>
		  <td align = center><b>Feedstuff</b></td>
		  <td align = center><b>CP</b></td>
          <td align = center><b>ME</b></td>
		  <td align = center><b>Cost/kg</b></td>
	  </tr>";

	  while($row = mysqli_fetch_assoc($result)){
			echo "<tr>
					<td align = center>{$row['Feedstuff']}</td>
					<td align = center>{$row['CP']}</td>
                    <td align = center>{$row['ME']}</td>
                    <td align = center>{$row['Cost/kg']}</td>
				</tr>";
	  }
?>
<script>
    "use strict"
    function Logout(){
        location.replace("../controller/logout.php")
    }

	function Return(){
        location.replace("home.php")
    }
</script>