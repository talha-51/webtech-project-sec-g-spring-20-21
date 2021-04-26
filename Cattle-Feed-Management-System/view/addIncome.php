<?php
    $title = "Add Income";
	include('header.php');
	require_once('../model/incomexpModel.php');
?>

<head>
	<title>Add New Income</title>
</head>
<body>
<center>
    <h1>Cattle Feed Management System</h1>
    <form method="post" action="../controller/addIncomeCheck.php">
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <fieldset>
                        <legend><h3>ADD INCOME</h3></legend>
                        Sources<br/><input type="text" name="Sources" id="Sources" value=""><br/>
                        Amount<br/><input type="number" name="Amount" id="Amount" value=""><br/>
                        <hr/>
                        <input type="submit" name="submit" value="Save">
                    </fieldset>
                </td>
            </tr>  
            <tr>
                <td colspan="2" align="center"><br><br>
                    <a href="incomexp.php">Go Back</a><br><br>
                    Copyright @ 2021
                </td>
            </tr>	                              
        </table>
    </form>
    </center>
</body>