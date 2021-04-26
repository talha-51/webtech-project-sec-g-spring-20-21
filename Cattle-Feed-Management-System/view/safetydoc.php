<?php
	$title = "Food Safety Document";
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
<center>
<h2>Why is Cattle Feed Safety Important?</h2>
<p id="demo">Animal feed plays a leading role in the global food industry and it is the largest and most 
important component to ensure the sustainable production of safe and affordable animal proteins. 
Rapidly growing populations, along with increased urbanization and income, is expected to rise 
the consumption of animal products by 70% in 2050. The increase in animal production will 
require an additional amount of feed to be produced. The challenge is not only to meet the 
growing demand for feed, but to ensure its safety. Feed safety is a prerequisite for food safety 
and human health</p>
<button onclick="change_text()">Click to read more</button>
<hr>

<button onclick="RevealImage()">Display Chart</button>
</center>
<hr>
<h2 align="center">Guidelines to prevent food safety problems</h2>
<p>
    <list>
        <ol>
            <li id="1">Purchase of feed from a reputable supplier with a feed safety system in operation.</li><br>
            <li id="2">Particular care must be taken with medicated feed.</li><br>
            <li id="3">Use of feed according to manufacturers’ recommendations (e.g. feed for animal species intended).</li><br>
            <li id="4">Feed must never contain prohibited ingredients (e.g. meat and bone meal).</li><br>
            <li id="5">Proper feed storage facilities (clean, dry and bird / vermin proof).</li><br>
            <li id="6">If cereal crops grown on the farm are fed to animals, the withdrawal dates for pesticides should
             be adhered to in order to prevent chemical residue contamination.</li>
        </ol>
    </list>
</p>
<hr>

<script>
    "use strict"
    function RevealImage(){
        var img = document.createElement("img");
        img.setAttribute("src", "../asset/FoodSafety.jpg")
        img.setAttribute("alt", "FoodSafety");
        document.body.appendChild(img);
    }

    function change_text(){
    document.getElementById("demo").innerHTML = "Furthermore, there is a wide assortment of aspects to be weary about whilst managing cattle feed as the processes can be quite intricate.";}
</script>

<?php
	include('footer.php');
?>
<script>
    "use strict"
    function Logout(){
        location.replace("../controller/logout.php")
    }

	function Return(){
        location.replace("home.php")
    }
</script>