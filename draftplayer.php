<?php
require 'dbconnect.php';

$sql = "SELECT * FROM Teams";

if (!$result = $mysqli->query($sql)) {
    echo "DraftPlayer_Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


$playerid = $_REQUEST["id"];
echo "<table border = 2><th  bgcolor = ORANGE>TEAMS</th>";
while($teams = $result->fetch_assoc()) {
	$team = $teams["Name"];
	echo "<tr><td><a href='rosteradd.php?team=" . $teams["Name"] . "&playerid=" . $playerid . "'> $team</a></tr></td>";

} 

echo "</table>";
echo $playerid;



?>