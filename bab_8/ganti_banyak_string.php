
<?php
$rawstring = "Welcome Birmingham parent! <br>
Your offspring is a pleasure to have!
We believe pronoun is learning a lot.<br>
The faculty simple adores pronoun2 and you
can often hear them say \"Attah sex!\"<br>";

$placeholders = array('offspring', 'pronoun', 'pronoun2', 'sex');

$malevals = array('son', 'he', 'him', 'boy');

$femalevals = array('daughter', 'she', 'her', 'girl');

$malestr = str_replace($placeholders, $malevals, $rawstring);
$femalestr = str_replace($placeholders, $femalevals, $rawstring);

echo "Son: " . $malestr . "<br>";
echo "Daughter: " . $femalestr;
?>
