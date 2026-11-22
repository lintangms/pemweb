<?php
function cari($array, $cari): bool {
    foreach ($array as $value) {
        if ($value == $cari) {
            return true;
        }
    }
    return false;
}

$data = [10, 20, 30, 40];

var_dump(cari($data, 30));
var_dump(cari($data, 1));
?>