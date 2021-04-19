<?php
	$title = "Cattle Details Page";
	include('header.php');

	require_once('../model/cattleDetailsModel.php');

	$cattleDetails = getAllCattleDetails();	
?>
	<script type="text/javascript" src="cattleDetailsScript.js"></script>
	<link rel="stylesheet" href="style.css">
	<a href="mHome.php">Back</a>	
	<br>
	
	<marquee><h1>Cattle Details</h1></marquee>
	<h4><a href='addCattleDetails.php'>Add Data</a> </h4>


	<form>
		<input type="text" name="search" id="search" value="" placeholder="Search by Username" onkeyup="ajax()">
	</form>

	<div id='result'></div><br><br>


	<table border = 1>
	<tr>
		<td>Farmer Username</td>
		<td>Cattle Amount</td>
		<td>Sick Cattle Amount</td>
		<td>Food Amount Required Per Day (kg)</td>
		<td>Operations</td>
	</tr>

	<?php for($i = 0; $i < count($cattleDetails); $i++){ ?>
		<tr>
			<td><?=$cattleDetails[$i]['fUsername']?></td>
			<td><?=$cattleDetails[$i]['cAmount']?></td>
			<td><?=$cattleDetails[$i]['scAmount']?></td>
			<td><?=$cattleDetails[$i]['fReq']?></td>
			<td> <a href="editCattleDetails.php?fUsername=<?=$cattleDetails[$i]['fUsername']?>"> Edit</a> | 
				 <a href="../controller/deleteCattleDetails.php?fUsername=<?=$cattleDetails[$i]['fUsername']?>"> Delete </a>
			</td>
		</tr>
	<?php } ?>

	</table>
	
<?php include('footer.php');?>
