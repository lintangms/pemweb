<?php
function get_max() {
    $args = func_get_args();

    if (count($args) == 0) {
        return null;
    }

    $max = $args[0];

    foreach ($args as $num) {
        if ($num > $max) {
            $max = $num;
        }
    }

    return $max;
}

echo get_max(10, 20);        // 20
echo get_max(10, 20, 30);    // 30
echo get_max(10, 20, 30, 40);// 40
?>