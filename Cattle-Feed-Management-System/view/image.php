<?php
	$title = "Uploaded Image";
	include('header.php');
	
?>

	<a href="mHome.php">Back</a>	
	<br>
	
	<h1>Uploaded Image</h1>
    

<?php	
    echo '<img src=../asset/'.$_SESSION['profPic'] .' width="500" height="300">';
    include('footer.php');
?>