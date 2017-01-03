<?php
require 'dbconnect.php';

$sql = "INSERT INTO TeamAdmin (Owner,HeadCoach,Team) VALUES ('" . $_REQUEST["Owner"] .
  "','" . $_REQUEST["HeadCoach"] . "','" . $_REQUEST["Team"] . "')";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>

<script>
window.location = 'index.php';
</script>