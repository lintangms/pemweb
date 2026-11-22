
<?php
$rawstring = "Welcome Birmingham parents. Your replaceme is a pleasure to have!";

$malestr = str_replace("replaceme", "son", $rawstring);
$femalestr = str_replace("replaceme", "daughter", $rawstring);

echo "Son: " . $malestr . "<br>";
echo "Daughter: " . $femalestr;
?>
