<?php
	$title = "Contact Admin Page";
	include('header.php');

	require_once('../model/contactAdminModel.php');

	$contactAdmin = getAllContactAdmin();	
?>
<center>
	<a href="mHome.php">Back</a>	
	<br>
	
	<marquee><h1>Contact Admin</h1></marquee>


    <form method="post" action="../controller/addContactAdminCheck.php">
		<fieldset style="width:30%">
			<table>
				<tr>
					<td>Text</td>
				</tr>
				<tr>
					<td><input type="text" name="text" value=""></td>
				</tr>
				<tr>
					<td>
					    <input type="submit" name="submit" value="Send">
					</td>
				</tr>
			</table>
		</fieldset>
	</form><br><br><br>



	<table border = 1>
	<tr>
		<td>Texts</td>
		<td>Operation</td>
	</tr>

	<?php for($i = 0; $i < count($contactAdmin); $i++){ ?>
		<tr>
			<td><?=$contactAdmin[$i]['text']?></td>
			<td><a href="../controller/deleteContactAdmin.php?text=<?=$contactAdmin[$i]['text']?>"> Delete </a>
			</td>
		</tr>
	<?php } ?>

	</table>
	</center><br><br>
<?php include('footer.php');?>
