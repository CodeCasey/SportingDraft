<?php
require 'dbconnect.php';

$sql = "insert into Teams (Name,City,State) VALUES ('" . $_REQUEST["Name"] .
  "','" . $_REQUEST["City"] . "','" . $_REQUEST["State"] . "')";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>

<script>
window.location = 'teamadminadd.htm';
</script>