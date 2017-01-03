<?php
require 'dbconnect.php';

$sql = "SELECT * FROM Teams";


if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<header><center><b><strong> 7-On-SEVEN</strong></b></center></Header><br><br>";
echo "<center><table border=1><th bgcolor = ORANGE>TEAM</th><th bgcolor = ORANGE>Location</th><th  bgcolor = ORANGE>ROSTER</th><th bgcolor = ORANGE>STATISTICS</th><th bgcolor = ORANGE>SCHEDULE</th>";
while($idx = $result->fetch_assoc()){
	$id = $idx["Name"];
	$Roster = $idx["Name"];
 	echo "<tr><td bgcolor = ALICEBLUE>  " . $idx["Name"] . "</td><td bgcolor = ALICEBLUE>" . $idx["City"] . ", " . $idx["State"] . "</td><td bgcolor = ALICEBLUE><a href='teamroster.php?id=" . $idx[Name]. "'> $id Roster " . "</a>" . "</td><td bgcolor = ALICEBLUE><a href='teamstats.php?id=" . $id . "'>View Stats</a>" . "</td><td bgcolor = ALICEBLUE><a href='schedule.php?id=". $id . "'>Schedule</a>" .
 		"</td><tr>";

		

}
echo "</center></table>";

$sql = "SELECT * FROM Players WHERE Team = FREEAGENT";
echo "<br><b><h2><a href='genReport.php'>Team Reports</a></h2><br>";
echo "<br><a href='playerlist.php'>All Players &nbsp</a>";
echo "&nbsp";
echo " <a href='teamadd.htm'><b>&nbsp Add Team &nbsp</b></a>";
echo "&nbsp";
echo " <a href='playeradd.htm'><b>Add Player</b></a>";
echo "&nbsp";
echo " <a href='teamadminadd.htm'><b>Add Team Admin</b></a>";

?>