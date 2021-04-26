<?php
    $title = "Notification Page";
	include('header.php');
    require_once('../model/contactAdminModel.php');

	$contactAdmin = getAllContactAdmin();	
?>
	
<table width = "100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
        <td colspan = "2" align = "center">
            <h1>Notifications</h1>
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
		  <td align = center><b><h2>Texts</h2></b></td>
	  </tr>

<?php

    for($i = 0; $i < count($contactAdmin); $i++){ ?>
		<tr>
			<td align = center><?=$contactAdmin[$i]['text']?></td>
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
