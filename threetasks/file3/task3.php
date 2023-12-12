<?php
$chars = range('A', 'E');

for ($i = 0; $i < 5; $i++) {
    $char = $chars[$i];
    for ($j = 0; $j < 5; $j++) {
        if ($j < (4 - $i)) {
            echo 'A ';
        } else {
            echo $char . ' ';
        }
    }
    echo PHP_EOL;
}
