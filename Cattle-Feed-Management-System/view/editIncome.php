<?php
    $title = "Edit Income";
	include('header.php');
	require_once('../model/incomexpModel.php');
?>

<head>
	<title>Edit Income</title>
</head>
<body>
<center>
    <h1>Cattle Feed Management System</h1>
    <h3>EDIT INCOME</h3>
    <a href="incomexp.php">Go Back</a><br><br>
    <form method="post" action="../controller/editIncomeCheck.php">
        <table border="1" cellspacing="0" cellpadding="0">
            <tr>
				<td>Sources</td>
				<td><input type="hidden" name="Sources" value="<?php echo $_GET['Sources'];?>"></td>
			</tr>
			<tr>
				<td>Amount</td>
				<td><input type="number" name="Amount" id="Amount" value=""></td>
			</tr>           
            <tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Save"> 
				</td>
			</tr>	                              
        </table>
    </form>
</center>
</body>