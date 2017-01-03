<?php
require 'dbconnect.php';


$teamid = $_REQUEST['id'];


$sql = "SELECT * FROM Players WHERE Team = '$teamid' GROUP BY Position ";

echo "<b><center>" .$teamid . " Roster</b> </center><br>";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<center <b><table border = 0><th>Position</th><th>Name</th><th>Jersey Num.</th><th><left>Options</th><b></th>";
while($roster = $result->fetch_assoc()) {
echo "<tr><td><right>" . $roster["Position"] . "</td><td><right>" . $roster["LastName"] . ", " . $roster["FirstName"] . "</td></right><td><center>" . $roster["Number"] . "</center></td></tr>";

}

echo "</table>";
echo "<br><a href='index.php'>Home</a>";

?>