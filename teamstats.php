<?php
require 'dbconnect.php';


$team = $_REQUEST['id'];

$sql = "SELECT   
	COUNT(*) AS Players,
	SUM(PASS) AS Pass,
	SUM(RUSH) AS Rush,
	totYDS(Pass,Rush) AS Tot,
	SUM(PTS) AS Points	
FROM Players p, PlayerStats s
WHERE p.id = s.PID
AND p.Team = '$team'";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

while($stats = $result->fetch_assoc()) {
	echo "<h1 background: ORANGE>". $_REQUEST['id']. "<br></h1>";
	echo "#Players: 		" . $stats["Players"] . "<br>";
	echo "Tot. Passing: 	" . $stats["Pass"]. "<br>";
	echo "Tot. Rushing: 	" . $stats["Rush"]. "<br>";
	echo "Tot. Yards:	" . $stats["Tot"]. "<br>";
	echo "Tot. Points: 	" . $stats["Points"]. "<br>";

}


?>