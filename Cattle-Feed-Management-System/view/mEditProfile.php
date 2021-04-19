<?php
	//session_start();
	$title = "Manager Edit Profile Page";
	include('header.php');
?>
	
	<link rel="stylesheet" href="style.css">
	<table border="1" width="70%" align="center">
		<tr class="c1">
			<td>
				<img src="../asset/logo.png" alt="logo" width="100px" height="50px">
			</td>
			
			<td align="right">
				Loggedin as <b style="color:Tomato"> <?php echo $_SESSION['username']; ?>| <a href="../controller/logout.php"> Logout</a>
			</td>
		</tr>
		
		<tr style="height:150px;">
			<td class="c1">
                <ul>
                    <li>
                        <a href="mHome.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="mEditProfile.php">Edit Profile</a>
                    </li>
                    <li>
                        <a href="mProfPicChange.php">Change Profile Picture</a>
                    </li>
					<li>
						<a href="cattleDetails.php"> View Cattle Details</a>
                    </li>
					<li>
						<a href="cattlePerformance.php"> View Cattle Performance</a>
                    </li>
					<li>
						<a href="transactionHistory.php"> View Transaction History</a>
                    </li>
					<li>
						<a href="cattleHealthDetails.php"> View Cattle Health Details</a>
                    </li>
					<li>
						<a href="scheduleFeedMixRatio.php"> Plan Schedule,Feed Mix Ratio </a>
                    </li>
					<li>
						<a href="mManageInventory.php"> Manage Inventory</a>
                    </li>
					<li>
						<a href="farmerPerformane.php"> Farmer Performance</a>
                    </li>
					<li>
						<a href="farmerPayroll.php"> Farmer payroll</a>
                    </li>
					<li>
						<a href="budgetReport.php"> Budget Report</a>
                    </li>
                </ul>
			</td>
            <td align="center" class="c2">
            <form method="post" action="../controller/mEditProfileCheck.php">
		        <fieldset style="width:30%">
			        <legend>EDIT User</legend>
			        <table>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password" id="password" value=""></td>
							<td><input type="submit" name="click" value="Validate" onmouseover="validatePassword()"></td>
						</tr>
						<tr>
							<td>Confirm Password</td>
							<td><input type="password" name="repass" id="rePass" value=""></td>
							<td><input type="submit" name="click" value="Validate" onmouseover="validateRePass()"></td>
							<td></td>
						</tr>
						<tr>
							<td id='myid2'>Email</td>
							<td><input type="email" name="email" id="email" value="" onkeyup="changeEmail()"></td>
							<td><input type="submit" name="click" value="Validate" onmouseover="validateEmail()"></td>
						</tr>
						<tr>
					    	<td></td>
					        <td>
						        <input type="submit" name="signup" value="Update" class="c3"> 
					        </td>
				        </tr>
			        </table>
		        </fieldset>
	        </form>
			</td>
		</tr>			
	</table>

	<script>

		function validatePassword(){
			let password= document.getElementById('password').value;
			
			if(password == ""){
				alert("NULL Value");
			}
			else if(password.length < 4){
				alert("Password must contain at least 4 characters");
			}
			else if(password.search(/[0-9]/)== -1){
				alert("Password must contain at least 1 number");
			}
			else if(password.search(/[a-z]/)== -1){
				alert("Password must contain at least 1 lowercase character");
			}
			else if(password.search(/[A-Z]/)== -1){
				alert("Password must contain at least 1 uppercase character");
			}
			else if(password.search(/[!\@\#\$\%\^\&\*\(\)\_\+\<\>\?]/)== -1){
				alert("Password must contain at least 1 special character");
			}
			else{
				alert("Validation Successfull");
			}
		}

		function validateRePass(){
			let rePass= document.getElementById('rePass').value;
			let password= document.getElementById('password').value;
			
			if(rePass == ""){
				alert("NULL Value");
			}
			else if(rePass != password){
				alert("Password & Confirm Password Mismatch");
			}
			else{
				alert("Validation Successfull");
			}
		}

		function validateEmail(){
			let email= document.getElementById('email').value;
			
			if(email == ""){
				alert("NULL Value");
			}
			else{
				alert("Validation Successfull");
			}
		}

		function changeEmail(){
			document.getElementById('myid2').innerHTML = document.getElementById('email').value;
		}

	</script>



<?php
	include('footer.php');
?>
