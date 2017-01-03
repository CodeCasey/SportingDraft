<?php
require 'dbconnect.php';

$base = $_REQUEST['Base'];
$Signb = $_REQUEST['SignBonus'];
$Contr = $_REQUEST['ContractLength'];
$pid = $_REQUEST['id'];

echo "<br>id: ". $pid ."<br>";
echo $base;
echo $Signb;
echo $Contr;


$sql = "UPDATE Salary SET Base = '$base', ContractLength = '$Contr',  SignBonus = '$Signb' WHERE PID = '$pid'";


if (!$result = $mysqli->query($sql)) {
    echo "Error: Query error, here is why: ";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}




?>

