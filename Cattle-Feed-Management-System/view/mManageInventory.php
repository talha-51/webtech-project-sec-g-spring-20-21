<?php
	$title = "Management Inventory Page";
	include('header.php');

	
?>

	<a href="mHome.php">Back</a>	
	<br>
	
	<h1>Invertory list</h1>

<?php
	$jsondata = file_get_contents('../model/mManageInventory.json', 'r');
	$json = json_decode($jsondata,true);

	echo "<h4>Ingredient</h4>";

	foreach($json['inventory'] as $usr){

			echo "<li>Item: ".$usr['itmName']."</li>";
			echo "<li>Starting Invetory: ".$usr['stInv']."</li>";
			echo "<li>Distributed Invetory: ".$usr['disInv']."</li>";
			echo "<li>Remaining Invetory: ".$usr['remainInv']."</li><br>";
	}
	
	include('footer.php');

	
?>