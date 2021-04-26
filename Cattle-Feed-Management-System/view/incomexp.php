<?php
    $title = "Income/Expense";
	include('header.php');
	require_once('../model/incomexpModel.php');

	$income = getIncome();
	$expense = getExpense();
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
	<tr><td align="center"><input type="button" name="" value="Add New Income" onclick="Income()"> | <input type="button" name="" value="Add New Expense" onclick="Expense()"> | <input type="button" name="" value="Go Back" onclick="Return()"></td></tr>
</table>

<center><hr/><h2>Income</h2><hr/></center>

<table width = 100% border=1 cellspacing=0 cellpadding=0>
	  <tr>
		  <td align = center><b>Sources</b></td>
		  <td align = center><b>Amount</b></td>
		  <td align = center><b>Actions</b></td>
	  </tr>

<?php

    for($i = 0; $i < count($income); $i++){ ?>
		<tr>
			<td align = center><?=$income[$i]['Sources']?></td>
			<td align = center><?=$income[$i]['Amount']?></td>
			<td align = center><a href="editIncome.php?Sources=<?=$income[$i]['Sources']?>"> Edit</a> | 
				<a href="../controller/deleteIncome.php?Sources=<?=$income[$i]['Sources']?>"> Delete </a>
			</td>
		</tr>
	<?php } ?>
</table>



	<center><hr/><h2>Expense</h2><hr/></center>

<table width = 100% border=1 cellspacing=0 cellpadding=0>
	  <tr>
		  <td align = center><b>Sources</b></td>
		  <td align = center><b>Amount</b></td>
		  <td align = center><b>Actions</b></td>
	  </tr>

<?php

    for($i = 0; $i < count($expense); $i++){ ?>
		<tr>
			<td align = center><?=$expense[$i]['Sources']?></td>
			<td align = center><?=$expense[$i]['Amount']?></td>
			<td align = center><a href="editExpense.php?Sources=<?=$expense[$i]['Sources']?>"> Edit</a> | 
				<a href="../controller/deleteExpense.php?Sources=<?=$expense[$i]['Sources']?>"> Delete </a>
			</td>
		</tr>
	<?php } ?>
	</table>

<script>
    "use strict"
    function Logout(){
        location.replace("../controller/logout.php")
    }

	function Income(){
        location.replace("addIncome.php")
    }

	function Expense(){
        location.replace("addExpense.php")
    }

	function Return(){
        location.replace("home.php")
    }
</script>
	
