<?php
require 'dbconnect.php';

$pid = $_REQUEST['id'];
$sql = "SELECT * FROM PlayerMetrics WHERE PID = '$pid'";
$player = "SELECT * FROM Players WHERE ID = '$pid'";
$sql4 = "SELECT * FROM PlayerStats WHERE PID = '$pid'";



if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


if (!$presult = $mysqli->query($player)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

if (!$sresult = $mysqli->query($sql4)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


$p_name = $presult->fetch_assoc();
$mets = $result->fetch_assoc();
	echo "<h1><u><i>". $p_name["LastName"] . ", " . $p_name["FirstName"] . "</i></u></h1>";
	echo "<b>Height: <i></b>	" . $mets["Height"] . "</i><br>"; 
	echo "<b>Weight: <i></b>	". $mets["Weight"] . "</i><br>"; 
	echo "<b>40-YRD: <i></b>	" . $mets["40Dash"] . "</i><br>";
	echo "<b>Vertical-Jump: <i></b>	" . $mets["VerticalJump"] . "</i><br><br>";


$stats = $sresult->fetch_assoc();
	echo "<b>PTS: <i></b>	" . $stats["PTS"] . "</i><br>";
	echo "<b>PASS: <i></b>	" . $stats["PASS"] . "</i><br>"; 
	echo "<b>RUSH: <i></b>	". $stats["RUSH"] . "</i><br>"; 
	
	
	

?>


<form  method="post">
<select name="metricOpt">
<option value="Height" selected>Height</option>
<option value="Weight">Weight</option>
<option value="40Dash">40-Yard Dash</option>
<option value="VerticalJump">Vertical-Jump</option>
<input type="text" name="metric">
</select>
<input type="submit" value="Update Metrics" />
</form>


<form  method="post">
<select name="statOpt">
<option value="PTS" selected>Points</option>
<option value="PASS">Passing YDS</option>
<option value="RUSH">Rushing YDS</option>
<input type="text" name="stats">
</select>
<input type="submit" value="Update Stats" />
</form>




<?php

$value = $_REQUEST['metricOpt'];
$metric  = $_REQUEST['metric'];

$sql3 = "UPDATE PlayerMetrics SET $value = '$metric' WHERE PID = '$pid'";

if($result = $mysqli->query($sql3)) {
	
	if (!$result = $mysqli->query($sql3)) {
   	 echo "Error: Query error, here is why: </br>";
    	 echo "Errno: " . $mysqli->errno . "</br>";
    	 echo "Error: " . $mysqli->error . "</br>";
    	 exit;
	}
}

$stValue = $_REQUEST['statOpt'];
$stats = $_REQUEST['stats'];

$sql5 = "UPDATE PlayerStats SET $stValue = '$stats' WHERE PID = '$pid'";

if($result = $mysqli->query($sql5)) {
	
	if (!$result = $mysqli->query($sql5)) {
   	 echo "Error: Query error, here is why: </br>";
    	 echo "Errno: " . $mysqli->errno . "</br>";
    	 echo "Error: " . $mysqli->error . "</br>";
    	 exit;
	}
}


?>

<a href='index.php'>HOME</a> <a href='playerlist.php'>PLAYERS</a> 








