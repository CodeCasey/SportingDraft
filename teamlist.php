<?php
require 'dbconnect.php';

$sql = "SELECT * FROM Team";
if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
echo "<table border=1><th>Team</th><th>Name</th><th>QB</th><th>RB</th><th>WR1</th><th>WR2</th>";
while($team = $result->fetch_assoc()){
   echo "<tr><td>" . $team["Name"] . "</td><td>" . $team["QB"] . "</td><td>" . $team["RB"] . 
   "</td><td>" . $team["WR1"] ."</td><td>" . $team["WR2"] . "</td><td>" . $team["TE"] . "</td></tr>"; 
echo "</table>";
echo $team["Name"];
}

?>