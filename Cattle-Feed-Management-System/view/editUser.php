<?php
	$title = "Edit Cattle Details Page";
	include('header.php');

	
?>
<center>
	<a href="manageUsers.php">Back</a>	
	<br>
	
	<marquee><h1>Edit User</h1></marquee>

    <form method="post" action="../controller/editUserCheck.php">
		        <fieldset style="width:30%">
			        <legend>Edit Cattle Details</legend>
			        <table>
					<tr>
						<td>Username</td>
						<td><input type="hidden" name="username" value="<?php echo $_GET['username'];?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="text" name="password" value=""></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email" value=""></td>
					</tr>
					<tr>
					    <td></td>
					    <td>
						    <input type="submit" name="submit" value="Update"> 
					    </td>
				    </tr>
			        </table>
		        </fieldset>
	        </form>
			</center>
<?php
	include('footer.php');
?>
