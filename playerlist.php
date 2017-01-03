<?php
require 'dbconnect.php';

$sql = "SELECT * FROM Players"; 

if(!empty($_REQUEST["id"]))
{
$team = $_REQUEST['id'];

$sql = "SELECT * FROM Players WHERE Team = '$team'";

}

if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<table border = 0><th>First Name</th><th>Last Name</th><th>Team</th><th>Number</th><th>Position</th><th>Age</th><th>Draft Choices</th><th>Measurables<th></th>";
while($player = $result->fetch_assoc()) {
	echo "<tr><td>" . $player["FirstName"] . "</td><td>" . $player["LastName"] . "</td><td>" . $player["Team"] .
	"</td><td>" . $player["Number"] . "</td><td>" . $player["Position"] . "</td><td>". $player["Age"]."</td><td>" .
	"<a href='draftplayer.php?id=" . $player["ID"] . "'> DRAFT PLAYER" . "</a></td><td>" . "<a href='playermetrics.php?id=" . $player["ID"] . "'>Metrics" . 
	"</a></td><td>" . "<a href='deleteplayer.php?id=" . $player["ID"] . "'>Delete"."</a></td></tr>";
	
}
echo "</table>";
echo "<br><a href='index.php'>Home</a>";
?>