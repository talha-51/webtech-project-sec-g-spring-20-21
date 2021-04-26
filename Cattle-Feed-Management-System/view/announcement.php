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
</table>


<body>
<center>
    <form method="post" action="../controller/announcementCheck.php">
		<table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align = center>
                    <fieldset>
                        <legend><h3>SET ANNOUNCEMENT</h3></legend>
                        <input type="text" name="Announcement" id="Announcement" value="" placeholder="Enter Announcement Here..."><br/><br/>
                        <hr/>
                        <input type="submit" name="submit" id="submit" value="Send">
                    </fieldset>
                </td>
            </tr>
		</table>
		</form>
    
<br><br><h2>Announcements</h2>
<table width = 100% border=1 cellspacing=0 cellpadding=0>
	  <tr>
		  <td align = center><b>Announcement</b></td>
	  </tr>

<?php

    for($i = 0; $i < count($data); $i++){ ?>
		<tr>
			<td align = center><?=$data[$i]['Announcement']?></td>
			<td align = center><a href="../controller/deleteAnnouncement.php?Announcement=<?=$data[$i]['Announcement']?>"> Delete </a>
			</td>
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
        location.replace("home.php")
    }
</script>
