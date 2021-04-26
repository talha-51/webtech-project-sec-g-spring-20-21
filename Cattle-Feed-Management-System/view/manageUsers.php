<?php
    $title = "Manage Users";
	include('header.php');
	require_once('../model/userModel.php');

	$user = getAllUser();
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
</table>
<script type="text/javascript" src="manageUsers.js"></script>

<?php
	  $sql = "select * from users";
	  $conn = getConnection();
	  $result = mysqli_query($conn, $sql);

	  echo "<table width = 100% border=1 cellspacing=0 cellpadding=0>
	  <tr>
		  <td align = center><b>Username</b></td>
		  <td align = center><b>Password</b></td>
		  <td align = center><b>Email</b></td>
		  <td align = center><b>Actions</b></td>
	  </tr>";


	  for($i = 0; $i < count($user); $i++){ ?>
		<tr>
			<td><?=$user[$i]['username']?></td>
			<td><?=$user[$i]['password']?></td>
			<td><?=$user[$i]['email']?></td>
			<td> <a href="editUser.php?username=<?=$user[$i]['username']?>"> Edit</a> | 
				 <a href="../controller/deleteUser.php?username=<?=$user[$i]['username']?>"> Delete </a>
			</td>
		</tr>
	<?php } ?>
	
<center>
	<br><a href="addUser.php">Add New User</a> |
	<input type="button" name="" value="Go Back" onclick="Return()"><br>
	<hr/><h2>Users</h2><hr/>
	<form>
		<input type="text" name="search" id="search" value="" placeholder="Search by Username" onkeyup="ajax()">
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
