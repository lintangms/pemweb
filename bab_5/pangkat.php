<?php
function pangkat($x, $y) {
    if ($y == 0) return 1;

    return $x * pangkat($x, $y - 1);
}

echo pangkat(8, 4); 
?>