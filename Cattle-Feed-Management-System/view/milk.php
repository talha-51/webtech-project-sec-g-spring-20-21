<?php
    $title = "Milk Production Page";
	include('header.php');
	require_once('../model/milkModel.php');
?>
<script type="text/javascript" src="milkScript.js"></script>	
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

	<center><hr/><h2>Milk Production</h2><hr/></center>
	<form>
		<input type="text" name="search" id="search" value="" placeholder="Search by DMProduced" onkeyup="ajax()">
	</form>

	<div id='result'></div><br><br>

<?php

	  $sql = "select * from milk";
	  $conn = getConnection();
	  $result = mysqli_query($conn, $sql);

	  echo "<table width = 100% border=1 cellspacing=0 cellpadding=0>
	  <tr>
		  <td align = center><b>Disposition of Milk Produced</b></td>
		  <td align = center><b>Volume</b></td>
          <td align = center><b>Price per unit</b></td>
	  </tr>";

	  while($row = mysqli_fetch_assoc($result)){
			echo "<tr>
					<td align = center>{$row['DMProduced']}</td>
					<td align = center>{$row['Volume']}</td>
                    <td align = center>{$row['Price per unit']}</td>
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