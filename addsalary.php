
<?php
$id = $_REQUEST["id"];
echo "id: " . $_REQUEST["id"];
?>
<form action="salaryadd.php">
<h1>Player Salary</h1>
  Base Salary:
  <input type="text" name="Base" >
  <br>
  Signing Bonus:
  <input type="text" name="SignBonus" >
  <br>
  Contract Length (Months):
  <input type="text" name="ContractLength" >
  <br>
  <input type="submit" value="Submit">
</form>