<?php
    $title = "Manage Users";
	include('header.php');
	require_once('../model/userModel.php');
?>

<head>
	<title>Add User</title>
</head>
<body>
<center>
    <h1>Cattle Feed Management System</h1>
    <form method="post" action="../controller/addUserCheck.php">
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <fieldset>
                        <legend><h3>ADD USER</h3></legend>
                        Username<br/><input type="text" name="username" value=""><br/>
                        Password<br/><input type="password" name="password" value=""><br/>
                        Confirm Password<br/><input type="password" name="repass" value=""><br/>
                        Email<br/><input type="" name="email" value=""><br/>
                        <hr/>
                        <input type="submit" name="signup" value="Save">
                    </fieldset>
                </td>
            </tr>  
            <tr>
                <td colspan="2" align="center"><br><br>
                    <a href="manageUsers.php">Go Back</a><br><br>
                    Copyright @ 2021
                </td>
            </tr>	                              
        </table>
    </form>
    </center>
</body>