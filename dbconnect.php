<?php
$mysqli = new mysqli('localhost', 'brenardc', 'GodLoves88', 'brenardc_SevenOnSeven');

if ($mysqli->connect_errno) {
    echo "Error: Failed to make a MySQL connection, here is why: </br>";
    echo "Errno: " . $mysqli->connect_errno . "</br>";
    echo "Error: " . $mysqli->connect_error . "</br>";
    exit;
}

?>