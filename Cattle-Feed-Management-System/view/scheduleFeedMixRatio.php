<?php
	$title = "Cattle Schedule And Feed Mix Ratio";
	include('header.php');

	require_once('../model/scheduleFeedMixRatioModel.php');

	$cattleFeedMixRatio = getAllFeedMixRatio();	
?>
<center>
	<script type="text/javascript" src="scheduleFeedMixRatioScript.js"></script>
	<link rel="stylesheet" href="style.css">
	<a href="mHome.php">Back</a>	
	<br>
	
	<marquee><h1>Cattle Schedule And Feed Mix Ratio</h1></marquee>
	<h4><a href='addScheduleFeedMixRatio.php'>Add Data</a> </h4>

	<form>
		<input type="text" name="search" id="search" value="" placeholder="Search by Type" onkeyup="ajax()">
	</form>

	<div id='result'></div><br><br>

	<table border = 1>
	<tr>
		<td>Type</td>
		<td>Food Items</td>
		<td>Ratio</td>
		<td>Schedule</td>
		<td>Operations</td>
	</tr>

	<?php for($i = 0; $i < count($cattleFeedMixRatio); $i++){ ?>
		<tr>
			<td><?=$cattleFeedMixRatio[$i]['type']?></td>
			<td><?=$cattleFeedMixRatio[$i]['fItems']?></td>
			<td><?=$cattleFeedMixRatio[$i]['ratio']?></td>
			<td><?=$cattleFeedMixRatio[$i]['schedule']?></td>
			<td><a href="editScheduleFeedMixRatio.php?type=<?=$cattleFeedMixRatio[$i]['type']?>"> Edit</a> | 
				<a href="../controller/deleteScheduleFeedMixRatio.php?type=<?=$cattleFeedMixRatio[$i]['type']?>"> Delete </a>
			</td>
		</tr>
	<?php } ?>

	</table>
	</center>
<?php include('footer.php');?>