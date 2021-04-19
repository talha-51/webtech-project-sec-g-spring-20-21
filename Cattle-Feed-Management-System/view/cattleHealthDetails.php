<?php
	$title = "Cattle Health Details Page";
	include('header.php');

	require_once('../model/cattleHealthDetailsModel.php');

	$cattleHealthDetails = getAllCattleHealthDetails();
?>
	<script type="text/javascript" src="cattleHealthDetailsScript.js"></script>
	<link rel="stylesheet" href="style.css">
	<a href="mHome.php">Back</a>	
	<br>
	
	<marquee><h1>Cattle Health Details</h1></marquee>
	<h4><a href='addCattleHealthDetails.php'>Add Data</a> </h4>

	<form>
		<input type="text" name="search" id="search" value="" placeholder="Search by Animal Id" onkeyup="ajax()">
	</form>

	<div id='result'></div><br><br>

	<table border = 1>
	<tr>
		<td>Animal Id</td>
		<td>Last Sickness Time</td>
		<td>Name of the disease</td>
		<td>Checked BY</td>
		<td>Operations</td>
	</tr>

	<?php for($i = 0; $i < count($cattleHealthDetails); $i++){ ?>
		<tr>
			<td><?=$cattleHealthDetails[$i]['aId']?></td>
			<td><?=$cattleHealthDetails[$i]['lSickness']?></td>
			<td><?=$cattleHealthDetails[$i]['nDisease']?></td>
			<td><?=$cattleHealthDetails[$i]['checked']?></td>
			<td><a href="editCattleHealthDetails.php?aId=<?=$cattleHealthDetails[$i]['aId']?>">Edit </a> | 
				<a href="../controller/deleteCattleHealthDetails.php?aId=<?=$cattleHealthDetails[$i]['aId']?>"> Delete</a>
			</td>
		</tr>
	<?php } ?>

	</table>
	
<?php include('footer.php');?>