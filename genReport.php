<?php
require 'dbconnect.php';

$sql = "SELECT p.Team AS Team, AVG(Age) AS Age, SUM(Base) AS Exp, SUM(SignBonus) AS TotBonus, COUNT(*) AS Players 
FROM Players p, Salary s
WHERE p.ID = s.PID
GROUP BY p.Team";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<center><h1>Team Report</h1></center>";
echo "<center><table border=1><th bgcolor = ORANGE>TEAM</th><th bgcolor = ORANGE>#PLAYERS</th><th bgcolor = ORANGE>AVG AGE</th><th  bgcolor = ORANGE>YEARLY EXPENSES</th><th bgcolor = ORANGE>BONUSES</th><</th>";

while($gen = $result->fetch_assoc()) {
	echo "<tr><td>". $gen["Team"]. "</td><td>" . $gen["Players"] . "</td><td>". $gen["Age"] . "</td><td>$&nbsp" . $gen["Exp"] . "</td><td>$&nbsp" . $gen["TotBonus"] . "</td></tr>";

}

echo "</center></table>";
echo "<br><center><a href='index.php'><b>HOME</b></a>";









?>