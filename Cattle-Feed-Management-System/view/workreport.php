<?php
    $title = "Productivity Report";
	include('header.php');
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
    <tr><td colspan = "2" align ="center"><input type="button" name="" value="Go Back" onclick="Return()"><td></tr>
</table>

<body>
    <center>
        <h1>Labor Productivity Per Employee</h1>
        <p>Enter Generated Revenue: <input type="text" id="revenue"/>
            </p>
        <p>Enter Number of Employees: <input type="text" id="emp"/>
            </p>
        <input type="submit" value="Calculate" onclick="RECalculator();">
        <h1>Employee Productivity: <span id="output">?</span></h1>

<hr><br><br><hr>

        <h1>Productivity Calculator Per Hour</h1>
        <p>Enter Generated Revenue: <input type="text" id="Grevenue"/>
            </p>
        <p>Enter Number of Hours Worked: <input type="text" id="hour"/>
            </p>
        <input type="submit" value="Calculate" onclick="RHCalculator();">
        <h1>Productivity Per Hour: <span id="poutput">?</span></h1>
        
    </center>

<hr>
</body>

<script>
    "use strict"
    function Logout(){
        location.replace("../controller/logout.php")
    }
    
	function Return(){
        location.replace("home.php")
    }
</script>

<script type="text/javascript">
          
            function RECalculator() {
                // user inputs
                var revenue = Number(document.getElementById("revenue").value);
                var emp = Number(document.getElementById("emp").value);
        
        
                var work = revenue / emp;
        
                //Display result of calculation
                document.getElementById("output").innerText = work;

            }

            function RHCalculator() {
                // user inputs
                var Grevenue = Number(document.getElementById("Grevenue").value);
                var hour = Number(document.getElementById("hour").value);
        
        
                var pwork = Grevenue / hour;
        
                //Display result of calculation
                document.getElementById("poutput").innerText = pwork;

            }
        </script>