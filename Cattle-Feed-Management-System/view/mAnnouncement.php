<?php
    $title = "Admin Home Page";
	include('header.php');
    require_once('../model/announcementModel.php');

    $data = getAnnouncement();	
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
</table><br><br>



<body>
<center>
<table width = 100% border=1 cellspacing=0 cellpadding=0>
	  <tr>
		  <td align = center><b><h2>Announcement</h2></b></td>
	  </tr>

<?php

    for($i = 0; $i < count($data); $i++){ ?>
		<tr>
			<td align = center><?=$data[$i]['Announcement']?></td>
		</tr>
	<?php } ?>
</table>

</center>
</body>


<script>
    "use strict"
    function Logout(){
        location.replace("../controller/logout.php")
    }
    
	function Return(){
        location.replace("mhome.php")
    }
</script>
