<?php
require 'dbconnect.php';


$usrTeam = $_REQUEST['team'];
$usrPlayer = $_REQUEST['playerid'];

$sql = "UPDATE Players SET Team = '$usrTeam' WHERE ID = '$usrPlayer'";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


?>

<form >
<h1>Player Salary</h1>
  Base Salary:
  <input type="text" name="Base" >
  <br>
  Signing Bonus:
  <input type="text" name="SignBonus" >
  <br>
  Contract Length (Months):
  <input type="text" name="ContractLength" >
  <br>
  <input type="hidden" name="id" value ="<?php echo $usrPlayer; ?>">
  <br>
  <input type="submit" value="Submit">
</form>

<?php

$base = $_REQUEST['Base'];
$Signb = $_REQUEST['SignBonus'];
$Contr = $_REQUEST['ContractLength'];
$idx = $_REQUEST['id'];



$sql = "UPDATE Salary SET Base = '$base', ContractLength = '$Contr',  SignBonus = '$Signb' WHERE PID = '$idx'";


if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: ";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>

<a href='index.php'>HOME</a> <a href='playerlist.php'>PLAYERS</a> 


