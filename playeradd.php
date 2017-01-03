<?php
require 'dbconnect.php';

$fn = $_REQUEST['firstname'];
$ln = $_REQUEST['lastname'];
$nm = $_REQUEST['num'];
$ps = $_REQUEST['pos'];
$ag = $_REQUEST['age'];

$sql = "CALL PlayerAdd('$fn','$ln','$nm','$ps','$ag')";
 
if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


?>


<script>
window.location = 'playerlist.php';
</script>