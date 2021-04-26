<?php
    $title = "Business Report Page";
	include('header.php');
	require_once('../model/db.php');
?>
<center>
<script type="text/javascript" src="bussReportScript.js"></script>
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

	<center><hr/><h2>Business Report and Predictions</h2><hr/></center>
	<form>
		<input type="text" name="search" id="search" value="" placeholder="Search by Sectors" onkeyup="ajax()">
	</form>

	<div id='result'></div><br><br>


<?php

	  $sql = "select * from busreport";
	  $conn = getConnection();
	  $result = mysqli_query($conn, $sql);

	  echo "<table width = 100% border=1 cellspacing=0 cellpadding=0>
	  <tr>
		  <td align = center><b>Sectors</b></td>
		  <td align = center><b>Base Year</b></td>
		  <td align = center><b>Year 1</b></td>
		  <td align = center><b>Year 2</b></td>
          <td align = center><b>Year 3</b></td>
          <td align = center><b>Year 4</b></td>
          <td align = center><b>Year 5</b></td>
	  </tr>";

	  while($row = mysqli_fetch_assoc($result)){
			echo "<tr>
					<td align = center>{$row['Sectors']}</td>
					<td align = center>{$row['Base Year']}</td>
					<td align = center>{$row['Year 1']}</td>
					<td align = center>{$row['Year 2']}</td>
                    <td align = center>{$row['Year 3']}</td>
                    <td align = center>{$row['Year 4']}</td>
                    <td align = center>{$row['Year 5']}</td>
				</tr>";
	  }
?>
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
